<?php

namespace test;

use PHPUnit\Framework\TestCase;
use Vesh95\ChatCore\Group\Id as GroupId;
use Vesh95\ChatCore\Message\Id as MessageId;
use Vesh95\ChatCore\User\Id;

final class MessageEqualTest extends TestCase
{
    public function testEquals(): void
    {
        $g1 = new MessageId(1);
        $g2 = new MessageId(1);

        $this->assertTrue($g1->equals($g2));
        $this->assertTrue($g2->equals($g1));
    }

    public function testSameValue(): void
    {
        $g1 = new MessageId(1);
        $g2 = new MessageId(2);

        $this->assertFalse($g1->equals($g2));
        $this->assertFalse($g2->equals($g1));
    }

    public function testSameType(): void
    {
        $group = new MessageId(1);
        $message = new GroupId(1);
        $user = new Id(1);

        $this->assertFalse($message->equals($group));
        $this->assertFalse($message->equals($user));
    }
}