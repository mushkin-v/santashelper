<?php

namespace vit\Doctrine1Bundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use vit\Doctrine1Bundle\Entity\MenuDir;
use vit\Doctrine1Bundle\Entity\MenuItem;
use vit\Doctrine1Bundle\Entity\MenuOrder;

class LoadData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $MenuDir = new MenuDir();
        $MenuDir
            ->setName('Первые блюда')
            ->setDescription('Описание первых блюд')
        ;
        $manager->persist($MenuDir);

        $MenuItem = new MenuItem();
        $MenuItem
            ->setName('Суп с фрикадельками')
            ->setPrice(100)
            ->setDescription('Описание супа с фрикадельками')
            ->setWeight(100)
            ->setMenuDir($MenuDir)
        ;$MenuOrder = new MenuOrder();
        $MenuOrder
            ->setNumber('Тестовый заказ №1')
            ->setDescription('Тестовый заказ №1');
        $MenuOrder->addOrderItem($MenuItem);
        $MenuItem->addOrder($MenuOrder);
        $manager->persist($MenuOrder);
        $manager->persist($MenuItem);

        $MenuItem = new MenuItem();
        $MenuItem
            ->setName('Борщ')
            ->setPrice(200)
            ->setDescription('Борщ украинский')
            ->setWeight(200)
            ->setMenuDir($MenuDir)
        ;
        $manager->persist($MenuItem);

        $MenuDir = new MenuDir();
        $MenuDir
            ->setName('Вторые блюда')
            ->setDescription('Описание вторых блюд')
        ;
        $manager->persist($MenuDir);

        $MenuItem = new MenuItem();
        $MenuItem
            ->setName('Картошка')
            ->setPrice(50)
            ->setDescription('Картошка по селянски')
            ->setWeight(150)
            ->setMenuDir($MenuDir)
        ;
        $manager->persist($MenuItem);

        $MenuItem = new MenuItem();
        $MenuItem
            ->setName('Куринные отбивные')
            ->setPrice(300)
            ->setDescription('Куринные отбивные из лучших куриц')
            ->setWeight(300)
            ->setMenuDir($MenuDir)
        ;
        $manager->persist($MenuItem);

        $MenuDir = new MenuDir();
        $MenuDir
            ->setName('Третьи блюда')
            ->setDescription('Описание третьих блюд')
        ;
        $manager->persist($MenuDir);

        $MenuItem = new MenuItem();
        $MenuItem
            ->setName('Шашлык')
            ->setPrice(500)
            ->setDescription('Вкусный шашлык')
            ->setWeight(500)
            ->setMenuDir($MenuDir)
        ;
        $manager->persist($MenuItem);

        $MenuItem = new MenuItem();
        $MenuItem
            ->setName('Компот')
            ->setPrice(30)
            ->setDescription('Самый вкусный компот')
            ->setWeight(10)
            ->setMenuDir($MenuDir)
        ;
        $manager->persist($MenuItem);

        $MenuDir = new MenuDir();
        $MenuDir
            ->setName('Десерт')
            ->setDescription('Описание десерта')
        ;
        $manager->persist($MenuDir);

        $MenuItem = new MenuItem();
        $MenuItem
            ->setName('Мороженное')
            ->setPrice(110)
            ->setDescription('Десерт мороженное')
            ->setWeight(110)
            ->setMenuDir($MenuDir)
        ;
        $manager->persist($MenuItem);

        $MenuItem = new MenuItem();
        $MenuItem
            ->setName('Бананы')
            ->setPrice(130)
            ->setDescription('Бананы из Африки')
            ->setWeight(130)
            ->setMenuDir($MenuDir)
        ;
        $manager->persist($MenuItem);

        $manager->flush();
    }
}
