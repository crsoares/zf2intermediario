<?php

namespace SONUser\Fixture;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

use SONUser\Entity\User;

class LoadUser extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setNome('Crythiano')
             ->setEmail('crysthianophp@gmail.com')
             ->setPassword(123456)
             ->setActive(true);

        $manager->persist($user);
        
        $user = new User();
        $user->setNome('Admin')
             ->setEmail('admin@gmail.com')
             ->setPassword(123456)
             ->setActive(true);

        $manager->persist($user);

        $user = new User();
        $user->setNome('Maria')
             ->setEmail('maria@gmail.com')
             ->setPassword(123)
             /*->setActive(false)*/;

        $manager->persist($user);
        
        $manager->flush();
    }
}
