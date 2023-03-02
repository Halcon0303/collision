<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * @group fail
     */
    public function testFailExample()
    {
        $this->assertFalse(true);
    }

    /**
     * @group todo
     */
    public function testTodoExample()
    {
        $this->markTestSkipped('__TODO__');
    }

    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    /**
     * @group deprecations
     */
    public function testUserDeprecation()
    {
        trigger_deprecation('foo', '1.0', 'This is a deprecation description');

        $this->assertTrue(true);
    }
}
