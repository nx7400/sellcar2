<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdControllerTest extends WebTestCase
{
    public function testAd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ad');
    }

}
