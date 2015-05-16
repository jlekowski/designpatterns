<?php

namespace spec\DesignPatterns\DataMapper;

use DesignPatterns\DataMapper\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin User
 */
class UserSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DesignPatterns\DataMapper\User');
    }

    public function it_gets_id()
    {
        $this->id = '99';
        $this->getId()->shouldReturn(99);
    }

    public function it_gets_name()
    {
        $this->name = 'userName';
        $this->getName()->shouldReturn('userName');
    }

    public function it_sets_id()
    {
        $this->setId(11);
        $this->id->shouldReturn(11);
    }

    public function it_sets_name()
    {
        $this->setName('user2Name');
        $this->name->shouldReturn('user2Name');
    }
}
