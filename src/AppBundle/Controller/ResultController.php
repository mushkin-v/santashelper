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
        $points = 0;

        if ($request->isMethod('POST')) {

            // ->setDescription($request->request->get('description'))
            foreach ($this->getQuestions() as $question) {
                if ($request->request->get($question->getId())) {
                    $points=$points+$request->request->get($question->getId());
                }
            }
        }
        return $this->render('Default/result.html.twig', array('points' => $points));
    }

    public function getQuestions()
    {
        $questions = $this->getDoctrine()->getManager()
            ->getRepository('AppBundle:Questions')->findAll();

        return $questions;
    }
}
