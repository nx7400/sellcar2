<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\AdType;
use AppBundle\Entity\Ad;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;

class AdFormController extends Controller
{
    /**
     * @Route("/adform", name="adForm")
     */
    public function adAction(Request $request)
    {


        $user=$request->getSession()->get('user');
        if($user == NULL){

            return $this->redirect($this->generateUrl('login'));
        }

        $ad = new Ad();
        $ad->setDate(new \DateTime("now"));
        $form = $this->createForm(AdType::class, $ad);



        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $user=$request->getSession()->get('user');
            $ad->setUser($user);

            $file = $ad->getImage();
            $fileName = $this->get('app.image_uploader')->upload($file);
            $ad->setImage($fileName);
            $ad->setPath("uploads/images/{$fileName}");

            $em = $this->getDoctrine()->getManager();
            $em->merge($ad); //it working but why?
            $em->flush();

            return $this->redirect($this->generateUrl('ad_index'));
        }

        return $this->render('AppBundle:Ad:ad.html.twig', array('form' => $form->createView()
            // ...
        ));
    }

}
