<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ResultController extends Controller
{
    /**
     * @Route("/result", name="result")
     */
    public function indexAction(Request $request)
    {

        $questions = $this->getQuestions();
        $points = $this->get('vitrequest')->points($questions);

        $child = $this->getDoctrine()->getManager()
            ->getRepository('AppBundle:Child')->findAll();
        $congratulation = $this->getDoctrine()->getManager()
            ->getRepository('AppBundle:Child')->findOneById(rand(1,count($child)));

        return $this->render('Default/result.html.twig', array(
            'points' => $points,
            'congratulation'=>$congratulation->getCongratulation(),
        ));
    }

    public function getQuestions()
    {
        $questions = $this->getDoctrine()->getManager()
            ->getRepository('AppBundle:Questions')->findAll();

        return $questions;
    }
}
