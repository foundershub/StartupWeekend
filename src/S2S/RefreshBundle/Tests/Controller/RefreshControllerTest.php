<?php

namespace S2S\RefreshBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RefreshControllerTest extends WebTestCase
{
    public function testRefresh()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/refresh');
    }

}
