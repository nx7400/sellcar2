<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserPanelControllerTest extends WebTestCase
{
    public function testUserpanel()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/userPanel');
    }

}
