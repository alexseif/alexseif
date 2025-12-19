<?php

namespace App\Controller\Admin;

use App\Entity\IntakeFormSubmission;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

class IntakeFormSubmissionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return IntakeFormSubmission::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name', 'Clinic Name'),
            TextField::new('yourName'),
            TextField::new('role'),
            TextField::new('email'),
            TextField::new('whatsapp'),
            TextField::new('website')->onlyOnDetail(),
            TextField::new('instagram')->onlyOnDetail(),
            TextField::new('interest'),
            TextEditorField::new('situation'),
            TextEditorField::new('message')->onlyOnDetail(),
            DateTimeField::new('submittedAt'),
            ArrayField::new('formData', 'Raw Data')->onlyOnDetail(),
        ];
    }
}
