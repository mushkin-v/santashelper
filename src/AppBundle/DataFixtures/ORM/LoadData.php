<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Child;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $child = new Child();
        $child
            ->setName('Donald')
            ->setSurname('Duck')
            ->setAge(4)
            ->setParent('Walt Disney')
            ->setEmail('myroslavazel@gmail.com')
            ->setCongratulation('We wish you a happy New Year!!!')
            ->setLetter('Dear, Santa! I want a dog!')
            ->setTestresult(10)
        ;
        $manager->persist($child);

        $child = new Child();
        $child
            ->setName('Myroslava')
            ->setSurname('Zelenska')
            ->setAge(7)
            ->setParent('Mother')
            ->setEmail('myroslavazel@google.net')
            ->setCongratulation('We wish you Marry Christmas!!!')
            ->setLetter('Dear, Santa! I want a big barby!')
            ->setTestresult(27)
        ;
        $manager->persist($child);

        $child = new Child();
        $child
            ->setName('Vitalii')
            ->setSurname('Mushkin')
            ->setAge(13)
            ->setParent('Father')
            ->setEmail('vitbox5@yandex.ru')
            ->setCongratulation('We wish you a happy New Year and Marry Christmas!!!')
            ->setLetter('Dear, Santa! I want a BMV X6!')
            ->setTestresult(23)
        ;
        $manager->persist($child);

        $manager->flush();
    }
}
