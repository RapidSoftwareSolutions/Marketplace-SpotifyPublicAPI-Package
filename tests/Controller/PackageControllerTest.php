<?php

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * @author Dmitry Shumytskyi <d.shumytskyi@gmail.com>
 */
class PackageControllerTest extends WebTestCase
{
    /**
     * @class createClient
     */
    public $client;
    /**
     * @var array
     */
    public $metadata;
    /**
     * @var string
     */
    public $testContent = '{"args":{"q":"test","id":"test"}}';

    public function setUp()
    {
        $this->client = static::createClient();

        self::bootKernel();

        $this->metadata = static::$kernel->getContainer()
            ->getParameter('app_bundle.metadata');
    }

    public function testAllFunctionsOnSucceededRequest()
    {
        foreach ($this->metadata['blocks'] as $key => $blockName)
        {
            $this->client->request(
                'POST',
                '/api/SpotifyPublicAPI/' . $blockName['name'],
                [],
                [],
                [],
                $this->testContent
            );

            $response = $this->client->getResponse();

            $this->assertEquals(200 , $response->getStatusCode());

        }
    }

    public function testMetadata()
    {
        $this->client->request('GET', '/api/SpotifyPublicAPI');
        $response = $this->client->getResponse();
        $data = json_decode($response->getContent(), true);

        $this->assertJson($response->getContent());
        $this->assertArrayHasKey('package', $data);
        $this->assertArrayHasKey('tagline', $data);
        $this->assertArrayHasKey('description', $data);
        $this->assertArrayHasKey('image', $data);
        $this->assertArrayHasKey('repo', $data);
        $this->assertArrayHasKey('accounts', $data);
        $this->assertArrayHasKey('blocks', $data);
        $this->assertEquals('SpotifyPublicAPI', $data['package']);
    }

}