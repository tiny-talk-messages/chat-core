<?php

namespace test;

use PHPUnit\Framework\TestCase;
use Vesh95\ChatCore\Group\Id as GroupId;
use Vesh95\ChatCore\Message\Id as MessageId;
use Vesh95\ChatCore\User\Id;

final class UserEqualTest extends TestCase
{
    public function testEquals(): void
    {
        $g1 = new Id(1);
        $g2 = new Id(1);

        $this->assertTrue($g1->equals($g2));
        $this->assertTrue($g2->equals($g1));
    }

    public function testSameValue(): void
    {
        $u = new Id(1);
        $m = new MessageId(1);

        $this->assertFalse($u->equals($m));
        $this->assertFalse($m->equals($u));
    }

    public function testSameType(): void
    {
        $group = new MessageId(1);
        $message = new GroupId(1);
        $user = new Id(1);

        $this->assertFalse($user->equals($message));
        $this->assertFalse($user->equals($group));
    }
}