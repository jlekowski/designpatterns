<?php

namespace spec\DesignPatterns\DataMapper;

use DesignPatterns\DataMapper\User;
use DesignPatterns\DataMapper\UserMapper;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin UserMapper
 */
class UserMapperSpec extends ObjectBehavior
{
    public function let(\PDO $db)
    {
        $this->beConstructedWith($db);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('DesignPatterns\DataMapper\UserMapper');
    }

    public function it_gets_user_by_id(\PDOStatement $stm, $db)
    {
        $db->prepare('SELECT * FROM user WHERE id = :id')->willReturn($stm);
        $stm->setFetchMode(\PDO::FETCH_CLASS, 'DesignPatterns\DataMapper\User')->shouldBeCalled();
        $stm->bindValue(':id', 2, \PDO::PARAM_INT)->shouldBeCalled();
        $stm->execute()->shouldBeCalled();
        $stm->fetch()->willReturn('User Object');

        $this->getById(2)->shouldReturn('User Object');
    }

    public function it_saves_user(User $user, \PDOStatement $stm, $db)
    {
        // updates user
        $user->getId()->willReturn(8);
        $user->getName()->willReturn('name1');
        $db->prepare('UPDATE user SET name = :name WHERE id = :id')->willReturn($stm);
        $stm->bindValue(':name', 'name1')->shouldBeCalled();
        $stm->bindValue(':id', 8, \PDO::PARAM_INT)->shouldBeCalled();
        $stm->execute()->shouldBeCalled();

        $this->save($user);

        // insert new user
        $user->getId()->willReturn(null);
        $user->getName()->willReturn('name2');
        $user->setId(99)->shouldBeCalled();
        $db->prepare('INSERT INTO user (name) VALUES (:name)')->willReturn($stm);
        $db->lastInsertId()->willReturn(99);
        $stm->bindValue(':name', 'name2')->shouldBeCalled();

        $this->save($user);
    }
}
