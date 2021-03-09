<?php

namespace App\Tests\Controller;

use PHPUnit\Framework\TestCase;

class TestControllerTest extends TestCase
{
    /**
     * @group functional
     */
    public function testSuccess()
    {
        $this->assertEquals(1,1);
    }
}
