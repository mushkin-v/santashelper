<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\ChildType;
use AppBundle\Entity\Child;


class TestsController extends Controller
{
    /**
     * @Route("/test", name="test")
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

            return $this->redirect($this->generateUrl('test'));
        }


        return $this->render('Default/test.html.twig', array('form' => $form->createView()));
    }
}
