<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OrderControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/commandes');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/commandes/{id}');
    }

}
