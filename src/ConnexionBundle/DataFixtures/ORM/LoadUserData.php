<?php

namespace ConnexionBundle\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use ConnexionBundle\Entity\User;

class LoadUserData extends \Doctrine\Bundle\FixturesBundle\Fixture
{
    public function load(ObjectManager $manager)
    {
        $entity = new User();
        $entity->setUsername('admin');
        $entity->setPlainPassword('admin');
        $entity->setEmail('');
        $role = array('ROLE_ADMIN');
        $entity->setEnabled(1);
        $entity->setRoles($role);
        $manager->persist($entity);
        $manager->flush();
    }
}

?>
