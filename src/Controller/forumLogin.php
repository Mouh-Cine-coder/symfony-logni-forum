<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class forumLogin extends  AbstractController
{
    #[Route('/')]
    public function Login(): Response
    {
        
        return $this->render('app-form/login-form.html.twig');
    }
}