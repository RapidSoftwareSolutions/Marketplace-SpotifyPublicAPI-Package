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
                '/api/SpotifyPublickAPI/' . $blockName['name']
            );

            $response = $this->client->getResponse();
            //$data = json_decode($response->getContent(), true);

            $this->assertEquals(200 , $response->getStatusCode());

            //$this->assertJson($response->getContent());
            //$this->assertEquals('success', $data['callback']);
        }
    }

    public function testMetadata()
    {
        $this->client->request('GET', '/api/SpotifyPublickAPI');
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
        $this->assertEquals('FacebookGraphAPI', $data['package']);
    }

}