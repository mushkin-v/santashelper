<?php
namespace AppBundle\Services;

use Symfony\Component\HttpFoundation\RequestStack;

class VitRequest
{
    protected $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }


    public function points(Array $questions)
    {
        $request = $this->requestStack->getCurrentRequest();

        $points = 0;

        if ($request->isMethod('POST')) {

            foreach ($questions as $question) {
                if ($request->request->get($question->getId())) {
                    $points=$points+$request->request->get($question->getId());
                }
            }
        }

        return $points;
    }
}