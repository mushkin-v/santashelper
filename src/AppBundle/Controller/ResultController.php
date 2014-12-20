<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ResultController extends Controller
{
    /**
     * @Route("/result", name="result")
     */
    public function indexAction(Request $request)
    {
        $questions = $this->getQuestions();
        $points = $this->get('vitrequest')->points($questions);

        $congratulations = $this->getDoctrine()->getManager()
            ->getRepository('AppBundle:Child')->findAll('congratulation');

        return $this->render('Default/result.html.twig', array(
            'points' => $points,
            'congratulation'=>$congratulations[rand(1,count($congratulations))],
        ));
    }

    public function getQuestions()
    {
        $questions = $this->getDoctrine()->getManager()
            ->getRepository('AppBundle:Questions')->findAll();

        return $questions;
    }
}
