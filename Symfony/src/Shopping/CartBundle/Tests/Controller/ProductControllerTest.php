<?php

namespace Shopping\CartBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductControllerTest extends WebTestCase
{
    public function testGetproduct()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getProduct');
    }

}
