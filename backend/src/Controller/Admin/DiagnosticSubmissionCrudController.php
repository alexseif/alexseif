<?php

namespace App\Controller\Admin;

use App\Entity\DiagnosticSubmission;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class DiagnosticSubmissionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DiagnosticSubmission::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Action::INDEX, Action::DETAIL)
            ->add(Action::EDIT, Action::DETAIL);
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name'),
            TextField::new('email'),
            TextField::new('mobile'),
            BooleanField::new('hasCto'),
            TextareaField::new('vision')->setMaxLength(80),
            TextareaField::new('bottleneck')->setMaxLength(80),
            DateTimeField::new('submittedAt'),
        ];
    }
}
