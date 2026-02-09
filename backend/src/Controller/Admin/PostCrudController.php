<?php

namespace App\Controller\Admin;

use App\Entity\Post;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PostCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Post::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('title'),
            TextField::new('slug')->setHelp('Use a URL-safe slug, e.g. "a-quiet-blueprint".'),
            ChoiceField::new('status')->setChoices([
                'Draft' => Post::STATUS_DRAFT,
                'Published' => Post::STATUS_PUBLISHED,
            ]),
            TextareaField::new('summary')->setHelp('Short abstract for the list view.'),
            TextareaField::new('content')
                ->setHelp('Markdown content.')
                ->setFormTypeOptions([
                    'attr' => [
                        'data-controller' => 'markdown-editor',
                        'data-min-height' => '420px',
                    ],
                ]),
            DateTimeField::new('createdAt')->hideOnForm(),
        ];
    }
}
