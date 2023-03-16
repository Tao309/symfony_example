<?php

namespace App\Animal\Model;

use App\Animal\Model\Entity\Animal;

final class AnimalFactory
{
    public function create(array $data): Animal
    {
        $data['type'] = $data[0];
        $data['name'] = $data[1];

        $entity = new Animal($data['type'], $data['name']);

        return $entity;
    }
}