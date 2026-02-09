<?php

namespace App\Controller\Api;

use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class BlogController extends AbstractController
{
    #[Route('/api/posts', name: 'api_posts_index', methods: ['GET'])]
    public function index(PostRepository $posts): JsonResponse
    {
        $items = array_map(
            fn (Post $post) => $this->serializePost($post, false),
            $posts->findPublished()
        );

        return $this->json([
            'data' => $items,
        ]);
    }

    #[Route('/api/posts/{slug}', name: 'api_posts_show', methods: ['GET'])]
    public function show(string $slug, PostRepository $posts): JsonResponse
    {
        $post = $posts->findOnePublishedBySlug($slug);

        if (!$post) {
            throw $this->createNotFoundException('Post not found.');
        }

        return $this->json([
            'data' => $this->serializePost($post, true),
        ]);
    }

    private function serializePost(Post $post, bool $includeContent): array
    {
        $data = [
            'title' => $post->getTitle(),
            'slug' => $post->getSlug(),
            'summary' => $post->getSummary(),
            'createdAt' => $post->getCreatedAt()?->format(DATE_ATOM),
        ];

        if ($includeContent) {
            $data['content'] = $post->getContent();
        }

        return $data;
    }
}
