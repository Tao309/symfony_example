<?php

namespace App\Animal\Model\Entity;

use App\Animal\Model\Type;
use App\Animal\Repository\AnimalRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AnimalRepository::class)]
#[ORM\Table(name: 'animal')]
class Animal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer', options: ['unsigned' => true])]
    private ?int $id = null;

    #[Assert\Positive(message: 'Должен быть указан тип животного')]
    #[ORM\Column(type: 'smallint', options: ['unsigned' => true], enumType: Type::class)]
    private Type $type;

    #[Assert\NotNull]
    #[Assert\Length(max: 50)]
    #[ORM\Column(type: 'string', length: 50)]
    private string $name;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $canSwim = false;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $canWalk = false;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $canFly = false;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $isDangerous = false;

    #[ORM\Column(type: 'integer', nullable: false)]
    private int $weight;

    public function __construct(Type $type, string $name)
    {
        $this->type = $type;
        $this->name = $name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): Type
    {
        return $this->type;
    }

    public function getTypeName(): string
    {
        return $this->type->name;
    }

    public function getTypeValue(): int
    {
        return $this->type->value;
    }

    public function setType(Type $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function canSwim(): bool
    {
        return $this->canSwim;
    }

    public function setSwim(bool $canSwim): self
    {
        $this->canSwim = $canSwim;

        return $this;
    }

    public function canWalk(): bool
    {
        return $this->canWalk;
    }

    public function setWalk(bool $canWalk): self
    {
        $this->canWalk = $canWalk;

        return $this;
    }

    public function canFly(): bool
    {
        return $this->canFly;
    }

    public function setFly(bool $canFly): self
    {
        $this->canFly = $canFly;

        return $this;
    }

    public function isDangerous(): bool
    {
        return $this->isDangerous;
    }

    public function setDangerous(bool $isDangerous): self
    {
        $this->isDangerous = $isDangerous;

        return $this;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function setWeight(int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }
}
