<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestsController extends Controller
{
    /**
     * @Route("/test/{slug}", name="test")
     */
    public function indexAction($slug)
    {
        $child = $this->getDoctrine()->getManager()
            ->getRepository('AppBundle:Child')->findOneById($slug);

        return $this->render('Default/test.html.twig', array(
            'child'=>$child,
            'questions'=>$this->getQuestions(),
            'answers'=>$this->getAnswers(),
        ));
    }

    public function getQuestions()
    {
        $questions = $this->getDoctrine()->getManager()
            ->getRepository('AppBundle:Questions')->findAll();

        return $questions;
    }

    public function getAnswers()
    {
        $answers = $this->getDoctrine()->getManager()
            ->getRepository('AppBundle:Answers')->findAll();

        return $answers;
    }

}
