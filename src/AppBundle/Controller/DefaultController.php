<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\ChildType;
use AppBundle\Entity\Child;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $child = new Child();
        $form = $this->createForm(new ChildType(), $child);

        $form->handleRequest($request);
        if ($form->isValid()) {
            $child = $form->getData();
            $em->persist($child);
            $em->flush();

            return $this->redirect($this->generateUrl('test',array('slug'=>$child->getId())), 301);
        }


        return $this->render('Default/index.html.twig', array('form' => $form->createView()));
    }
}
