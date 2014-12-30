<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\Type\ChildType;
use AppBundle\Entity\Child;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $locale = $request->getLocale();
        $request->setLocale('en');

        $em = $this->getDoctrine()->getManager();
        $child = new Child();
        $form = $this->createForm(new ChildType(), $child);

        $form->handleRequest($request);
        if ($form->isValid()) {
            $child = $form->getData();
            $em->persist($child);
            $em->flush();

            //sending email to parents
            $this->get('vitmail')->Send(
                'This letter to'.$child->getParent().'from santa about your '.$child->getName(),
                'santa@claus.com',
                $child->getEmail(),
                $child->getLetter()
            );

            return $this->redirect($this->generateUrl('test',array('slug'=>$child->getId())), 301);
        }

        return $this->render('Default/index.html.twig', array('form' => $form->createView()));
    }
}