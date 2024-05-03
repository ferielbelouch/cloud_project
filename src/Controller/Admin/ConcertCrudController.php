<?php

namespace App\Controller\Admin;

use App\Entity\Concert;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ConcertCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {

        return Concert::class;
    }

    
    public function configureFields(string $pageName): iterable
    {

        return [
            IdField::new('id')->onlyOnDetail(),
            TextField::new('Name'),
            TextEditorField::new('Description'),
            DateField::new('StartAt')->onlyOnForms(),
            DateField::new('EndAt')->onlyOnForms(),
            TextField::new('Type')->onlyOnForms(),
            ImageField::new('imageFile')
                ->setBasePath('/images/concertsUpload')
                ->setUploadDir('/public/images/concertsUpload'),
            DateField::new('createdAt')->onlyOnIndex(),
        ];
    }
}