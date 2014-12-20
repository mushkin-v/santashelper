<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\ChildType;
use AppBundle\Entity\Child;


class ResultController extends Controller
{
    /**
     * @Route("/result", name="result")
     */
    public function indexAction(Request $request)
    {
        

        return $this->render('Default/result.html.twig', array('form' => $form->createView()));
    }
}
