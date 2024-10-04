<?php declare(strict_types = 1);

namespace App\Model;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: 'users')]
class User
{

	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column(type: 'integer')]
	public int $id;

	#[ORM\Column(type: 'string')]
	public string $username;

	#[ORM\Column(type: 'datetime')]
	public DateTime $createdAt;

	#[ORM\Column(type: 'datetime', nullable: true)]
	public ?DateTime $updatedAt = null;

	public function __construct(
		string $username
	)
	{
		$this->username = $username;
		$this->createdAt = new DateTime();
	}

	#[ORM\PreUpdate]
	public function preUpdate(): void
	{
		$this->updatedAt = new DateTime();
	}

}
