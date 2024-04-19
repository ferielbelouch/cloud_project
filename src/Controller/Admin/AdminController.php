<?php

namespace App\Controller\Admin;

use App\Entity\Concert;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Annotation\Security;

class AdminController extends AbstractDashboardController
{

    #[Route('/admin', name: 'admin')]
    #[Security('is_granted("ROLE_SUPER_ADMIN")')]
    public function index(): Response
    {
        return $this->render('admin/dashbord.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Cloud Project');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Concert', 'fas fa-list', Concert::class); 
        yield MenuItem::linkToCrud('Users', 'fas fa-list', User::class); 
    }


}
