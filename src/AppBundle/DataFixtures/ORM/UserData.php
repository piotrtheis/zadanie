<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

/**
 * Class UserData
 *
 * @package AppBundle\DataFixtures
 * @author Piotr Theis <piotr.theis@etendard.pl>
 */
class UserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setName("Piotr");

        $manager->persist($userAdmin);
        $manager->flush();
    }
}