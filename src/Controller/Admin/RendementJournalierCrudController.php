<?php

namespace App\Controller\Admin;

use App\Entity\RendementJournalier;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class RendementJournalierCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return RendementJournalier::class;
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
}
