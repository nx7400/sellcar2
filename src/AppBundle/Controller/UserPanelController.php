<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\User;

class UserPanelController extends Controller
{
    /**
     * @Route("/userPanel", name="userPanel")
     */
    public function userPanelAction(Request $request)
    {

        $user=$request->getSession()->get('user');
        if($user == NULL){

            return $this->redirect($this->generateUrl('login'));
        }

        $userName=$user->getUsername();

        return $this->render('AppBundle:UserPanel:user_panel.html.twig', array('userName' => $userName

        ));
    }

}
