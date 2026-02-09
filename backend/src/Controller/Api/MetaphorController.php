<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Attribute\Route;

class MetaphorController extends AbstractController
{
    #[Route('/api/metaphor', name: 'api_metaphor_random', methods: ['GET'])]
    public function __invoke(KernelInterface $kernel): JsonResponse
    {
        $path = $kernel->getProjectDir() . '/data/metaphor.json';

        if (!is_file($path)) {
            return $this->json([
                'error' => 'Metaphor source not found.',
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        $raw = file_get_contents($path);
        $entries = json_decode($raw ?: '[]', true);

        if (!is_array($entries) || $entries === []) {
            return $this->json([
                'error' => 'Metaphor source is empty.',
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        $entry = $entries[array_rand($entries)];

        return $this->json([
            'data' => $entry,
        ]);
    }
}
