<?php declare(strict_types = 1);

namespace App\Model;

use Doctrine\ORM\EntityRepository;

/**
 * @extends EntityRepository<User>
 * @method User|null find($id, ?int $lockMode = null, ?int $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User|null findOneById(int $id)
 * @method User[] findAll()
 * @method User[] findBy(array $criteria, array $orderBy = null, ?int $limit = null, ?int $offset = null)
 */
final class UserRepository extends EntityRepository
{

}
