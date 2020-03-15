<?php
namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApplicationControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client  = static::createClient();

        $client->request('POST', '/applications');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}