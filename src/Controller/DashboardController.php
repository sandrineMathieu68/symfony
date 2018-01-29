<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends Controller
{
	/**
     * @Route("/dashboard")
     */
    public function home()
    {
        return $this->render('dashboard/dashboard.html');
    }

    /**
     * @Route("/user")
     */
    public function user()
    {
        return $this->render('dashboard/user.html');
    } 
    /**
     * @Route("/table")
     */
    public function table()
    {
        return $this->render('dashboard/table.html');
    }

    /**
     * @Route("/typography")
     */
    public function typography()
    {
        return $this->render('dashboard/typography.html');
    }
    /**
     * @Route("/icons")
     */
    public function icons()
    {
        return $this->render('dashboard/icons.html');
    }
    /**
     * @Route("/maps")
     */
    public function maps()
    {
        return $this->render('dashboard/maps.html');
    }
    /**
     * @Route("/notifications")
     */
    public function notifications()
    {
        return $this->render('dashboard/notifications.html');
    }

    /**
     * @Route("/upgrade")
     */
    public function upgrade()
    {
        return $this->render('dashboard/upgrade.html');
    }
    /**
     * @Route("/template")
     */
    public function template()
    {
        return $this->render('dashboard/template.html');
    }                                
}