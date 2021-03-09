<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FunctionalTest extends WebTestCase
{
    /**
     * @group functional
     */
    public function testClient()
    {
        $client = self::createClient();
        $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
    }

    /**
     * @group functional
     */
    public function testClientBis()
    {
        $client = self::createClient();
        $client->request('GET', '/login');

        $this->assertResponseIsSuccessful();
    }
}
