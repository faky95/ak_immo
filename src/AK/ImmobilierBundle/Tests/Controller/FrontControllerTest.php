<?php

namespace AK\ImmobilierBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FrontControllerTest extends WebTestCase
{
    public function testSearchbien()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/searchBien');
    }

    public function testReservatebien()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/reservateBien');
    }

}
