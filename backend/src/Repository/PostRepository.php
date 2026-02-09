<?php

namespace App\Repository;

use App\Entity\Post;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Post>
 */
class PostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Post::class);
    }

    /**
     * @return Post[]
     */
    public function findPublished(): array
    {
        return $this->findBy(
            ['status' => Post::STATUS_PUBLISHED],
            ['createdAt' => 'DESC']
        );
    }

    public function findOnePublishedBySlug(string $slug): ?Post
    {
        return $this->findOneBy([
            'slug' => $slug,
            'status' => Post::STATUS_PUBLISHED,
        ]);
    }
}
