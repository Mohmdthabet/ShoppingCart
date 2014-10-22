<?php

namespace Shopping\CartBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductCategControllerTest extends WebTestCase
{
    public function testAddcateg()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AddCateg');
    }

    public function testEditcateg()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/EditCateg');
    }

    public function testDeletecateg()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/DeleteCateg');
    }

}
