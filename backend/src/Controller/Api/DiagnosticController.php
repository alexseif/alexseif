<?php

namespace App\Controller\Api;

use App\Entity\DiagnosticSubmission;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Attribute\Route;

class DiagnosticController extends AbstractController
{
    private const NOTIFY_EMAIL = 'alex.seif@gmail.com';

    #[Route('/api/diagnostic', name: 'api_diagnostic_post', methods: ['POST'])]
    public function __invoke(
        Request $request,
        EntityManagerInterface $em,
        MailerInterface $mailer,
        LoggerInterface $logger
    ): JsonResponse {
        $content = $request->getContent();
        $data = json_decode($content, true);

        if (!\is_array($data)) {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Invalid JSON body.',
            ], Response::HTTP_BAD_REQUEST, [
                'Content-Type' => 'application/json',
            ]);
        }

        $name = trim((string) ($data['name'] ?? ''));
        $email = trim((string) ($data['email'] ?? ''));
        $mobile = trim((string) ($data['mobile'] ?? ''));
        $vision = trim((string) ($data['vision'] ?? ''));
        $bottleneck = trim((string) ($data['bottleneck'] ?? ''));

        if ($name === '' || $email === '' || $mobile === '') {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Name, email and mobile are required.',
            ], Response::HTTP_BAD_REQUEST, [
                'Content-Type' => 'application/json',
            ]);
        }

        try {
            $submission = new DiagnosticSubmission();
            $submission->setName($name);
            $submission->setEmail($email);
            $submission->setMobile($mobile);
            $submission->setVision($vision ?: null);
            $submission->setBottleneck($bottleneck ?: null);
            $submission->setSubmittedAt(new \DateTimeImmutable());

            $em->persist($submission);
            $em->flush();

            $logger->info('Diagnostic intake saved', [
                'id' => $submission->getId(),
                'name' => $name,
                'ip' => $request->getClientIp(),
            ]);

            $mail = (new Email())
                ->to(self::NOTIFY_EMAIL)
                ->replyTo($email)
                ->subject(sprintf('[Diagnostic] %s', $name))
                ->text(sprintf(
                    "Diagnostic intake from %s\n\nEmail: %s\nMobile: %s\n\nProject Vision:\n%s\n\nPrimary Bottleneck:\n%s",
                    $name,
                    $email,
                    $mobile,
                    $vision,
                    $bottleneck
                ));
            $mailer->send($mail);
        } catch (\Throwable $e) {
            $logger->error('Diagnostic save or email failed', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Request could not be processed. Please try again.',
            ], Response::HTTP_INTERNAL_SERVER_ERROR, [
                'Content-Type' => 'application/json',
            ]);
        }

        return new JsonResponse([
            'status' => 'captured',
            'message' => 'Diagnostic request received. The story continues.',
        ], Response::HTTP_OK, [
            'Content-Type' => 'application/json',
        ]);
    }
}
