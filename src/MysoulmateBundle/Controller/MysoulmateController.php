<?php

namespace MysoulmateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MysoulmateController extends Controller
{

    public function indexAction()
    {
        return $this->render('MysoulmateBundle:Template:layout.html.twig');
    }
}
