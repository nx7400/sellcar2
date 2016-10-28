<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\AdType;
use AppBundle\Entity\Ad;
use AppBundle\Entity\User;

class AdController extends Controller
{
    /**
     * @Route("/ad", name="adFrom")
     */
    public function adAction(Request $request)
    {
        $ad = new Ad();
        $form = $this->createForm(AdType::class, $ad);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

//            $user=$request->getSession()->get('user');
//            $ad->setUser($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($ad);
            $em->flush();
        }

        return $this->render('AppBundle:Ad:ad.html.twig', array('form' => $form->createView()
            // ...
        ));
    }

}
