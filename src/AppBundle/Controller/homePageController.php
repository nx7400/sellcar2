<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class homePageController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function homePageAction()
    {
        return $this->render('AppBundle:homePage:home_page.html.twig', array(
            // ...
        ));
    }

}
