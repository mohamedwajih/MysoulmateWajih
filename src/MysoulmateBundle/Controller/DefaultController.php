<?php

namespace MysoulmateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MysoulmateBundle:Default:layout.html.twig');
    }
}
