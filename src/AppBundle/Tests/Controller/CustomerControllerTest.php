<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CustomerControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/customers');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/customers/{id}');
    }

}
