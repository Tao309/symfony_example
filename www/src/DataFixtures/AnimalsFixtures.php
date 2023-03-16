<?php

namespace App\DataFixtures;

use App\Animal\Model\Type;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Animal\Model\Entity\Animal;
use App\Animal\Model\AnimalFactory;

class AnimalsFixtures extends Fixture
{
    public function __construct(
        private readonly AnimalFactory $animalFactory
    )
    {

    }

    public function load(ObjectManager $manager): void
    {
        $animalDog = $this->animalFactory->create([Type::DOG, 'Pluto'])->setWeight(2300)
            ->setSwim(true)->setWalk(true);
        $manager->persist($animalDog);

        $animalDuck = $this->animalFactory->create([Type::DUCK, 'Donald'])->setWeight(800)
            ->setSwim(true)->setWalk(true)->setFly(true);
        $manager->persist($animalDuck);

        $animalEagle = $this->animalFactory->create([Type::EAGLE, 'Dickens'])->setWeight(4300)
            ->setWalk(true)->setFly(true)->setDangerous(true);
        $manager->persist($animalEagle);

        $animalMouse = $this->animalFactory->create([Type::MOUSE, 'Jerry'])->setWeight(20)
            ->setSwim(true)->setWalk(true);
        $manager->persist($animalMouse);

        $animalWorm = $this->animalFactory->create([Type::WORM, 'Jim'])->setWeight(1);
        $manager->persist($animalWorm);

        $animalShark = $this->animalFactory->create([Type::SHARK, 'Peter'])->setWeight(820)
            ->setSwim(true)->setDangerous(true);
        $manager->persist($animalShark);

        $animalWhale = $this->animalFactory->create([Type::WHALE, 'Timbo'])->setWeight(25000000)
            ->setSwim(true)->setDangerous(true);
        $manager->persist($animalWhale);

        $manager->flush();
    }
}
