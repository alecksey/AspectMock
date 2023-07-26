<?php

declare(strict_types=1);

namespace demo;


use PHPUnit\Framework\AssertionFailedError;

final class AccessDemoClassesTest extends \Codeception\Test\Unit
{
    public function testUserModel()
    {
        $user = new UserModel(['name' => 'davert']);
        $this->assertSame('davert', $user->getName());
    }

    public function testUserService()
    {
        $this->expectException(AssertionFailedError::class);
        $service = new UserService();
        $service->create(['name' => 'davert']);
    }
}
