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
            ->setQuestion('Evening. Your mother asks you to collect  your toys and go to bed. Your reaction:');

        $answer = new Answers();
        $answer
            ->setAnswer('You obey immediately')
            ->setPoints(1)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $answer = new Answers();
        $answer
            ->setAnswer('You cry: “Please, 5 minutes more!”. But then you do what you have been told')
            ->setPoints(2)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $answer = new Answers();
        $answer
            ->setAnswer('You parent collects your toys and makes you go to bed')
            ->setPoints(3)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $manager->persist($questions);

        //Question #2
        $questions = new Questions();
        $questions
            ->setQuestion('on the playground you hang out with other children, and');

        $answer = new Answers();
        $answer
            ->setAnswer("You play separately, when someone takes your toys by force – you don't try to take them back or cry")
            ->setPoints(1)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $answer = new Answers();
        $answer
            ->setAnswer('You communicate with other children and play together with them')
            ->setPoints(2)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $answer = new Answers();
        $answer
            ->setAnswer('You take others toys by force and fight with other children')
            ->setPoints(3)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $manager->persist($questions);

        //Question #3
        $questions = new Questions();
        $questions
            ->setQuestion('Its dinner time! You have to come back home. What is the way your parent calls you back?');

        $answer = new Answers();
        $answer
            ->setAnswer('“Sweety, lets go home!” - and goes home. You follow her immediately.')
            ->setPoints(1)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $answer = new Answers();
        $answer
            ->setAnswer('“Sweety, in 5 minutes well go home, finish your play!”')
            ->setPoints(2)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $answer = new Answers();
        $answer
            ->setAnswer('“Sweety, lets go home! We have to, its time. Your bear is waiting for you, and Ive got candies!”')
            ->setPoints(3)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $manager->persist($questions);

        //Question #4
        $questions = new Questions();
        $questions
            ->setQuestion('For dinner you have got milk soup – the dish you hate. How does your parent try to make you eat that?');

        $answer = new Answers();
        $answer
            ->setAnswer('He/she says: “in 10 minutes it has to be eaten” and leaves the kitchen.')
            ->setPoints(1)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $answer = new Answers();
        $answer
            ->setAnswer('She just doesnt make you eat the hated soup')
            ->setPoints(2)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $answer = new Answers();
        $answer
            ->setAnswer('You eat that with asks and pleases, and all family is involved – from your Granny to your dog')
            ->setPoints(3)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $manager->persist($questions);

        //Question #5
        $questions = new Questions();
        $questions
            ->setQuestion('Someone has bought you a new puzzle. You try to complete the picture, but it doesnt work. What is your reaction?');

        $answer = new Answers();
        $answer
            ->setAnswer('You give up the whole idea and switch to smth else')
            ->setPoints(1)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $answer = new Answers();
        $answer
            ->setAnswer('Nevertheless, you try to finish the puzzle, and youre sure – if not today – tomorrow itll be done anyway')
            ->setPoints(2)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $answer = new Answers();
        $answer
            ->setAnswer('You get angry, beat the box, throw the parts all over the room...')
            ->setPoints(3)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $manager->persist($questions);

        //Question #6
        $questions = new Questions();
        $questions
            ->setQuestion('Parents want to buy you a new toy, which is very expensive and everyone wants it. You:');

        $answer = new Answers();
        $answer
            ->setAnswer('I dont think I need that thing')
            ->setPoints(1)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $answer = new Answers();
        $answer
            ->setAnswer('I want that, but Ill share the toy with my friends')
            ->setPoints(2)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $answer = new Answers();
        $answer
            ->setAnswer('I want that! My precious!')
            ->setPoints(3)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $manager->persist($questions);

        //Question #7
        $questions = new Questions();
        $questions
            ->setQuestion('Its time to get prepared for your lessons. You:');

        $answer = new Answers();
        $answer
            ->setAnswer('Go to your room and begin studying')
            ->setPoints(1)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $answer = new Answers();
        $answer
            ->setAnswer('Try to postpone preparing, do smth else, but at last you manage to do your tasks')
            ->setPoints(2)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $answer = new Answers();
        $answer
            ->setAnswer('Even dont start doing that. You are too clever to study')
            ->setPoints(3)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $manager->persist($questions);

        //Question #8
        $questions = new Questions();
        $questions
            ->setQuestion('Its dinner time! Do you wash your hands before eating?');

        $answer = new Answers();
        $answer
            ->setAnswer('Yes, always')
            ->setPoints(1)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $answer = new Answers();
        $answer
            ->setAnswer('Only when somebody reminds me')
            ->setPoints(2)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $answer = new Answers();
        $answer
            ->setAnswer('No. I dont see any point in that')
            ->setPoints(3)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $manager->persist($questions);

        //Question #9
        $questions = new Questions();
        $questions
            ->setQuestion('In the evening, your parent has got a headache. He/she asks you to behave quietly. You:');

        $answer = new Answers();
        $answer
            ->setAnswer('Play quietly in the corner')
            ->setPoints(1)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $answer = new Answers();
        $answer
            ->setAnswer('Try to behave quietly, but sometimes you forget that and shout your favourite “Kalaboonga!”')
            ->setPoints(2)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $answer = new Answers();
        $answer
            ->setAnswer('Make as much noise as usual. Youre still a child, its difficult for you to hold emotions')
            ->setPoints(3)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $manager->persist($questions);

        //Question #10
        $questions = new Questions();
        $questions
            ->setQuestion('your parents and friends usually say about you:');

        $answer = new Answers();
        $answer
            ->setAnswer('Thats a good child! A little helper!')
            ->setPoints(1)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $answer = new Answers();
        $answer
            ->setAnswer('Thats a cute and jolly child!')
            ->setPoints(2)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $answer = new Answers();
        $answer
            ->setAnswer('Thats a fidget! A real gadabout!')
            ->setPoints(3)
            ->setQuestion($questions)
        ;
        $manager->persist($answer);

        $manager->persist($questions);


        $manager->flush();
    }
}
