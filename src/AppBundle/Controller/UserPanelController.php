<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;

class UserPanelController extends Controller
{
    /**
     * @Route("/userPanel", name="userPanel")
     */
    public function userPanelAction()
    {

        return $this->render('AppBundle:UserPanel:user_panel.html.twig', array(
            // ...
        ));
    }

}
