<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Answers;
use AppBundle\Entity\Questions;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        //Question #1
        $questions = new Questions();
        $questions
            ->setQuestion('Are your nut?');

        $answer = new Answers();
        $answer
            ->setAnswer('Yes')
            ->setPoints(10)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $answer = new Answers();
        $answer
            ->setAnswer('No')
            ->setPoints(20)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $answer = new Answers();
        $answer
            ->setAnswer('what?')
            ->setPoints(30)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $manager->persist($questions);


        $manager->flush();
    }
}
