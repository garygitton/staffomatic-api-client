<?php
namespace Staffomatic\Api\Client\Factory;

use GuzzleHttp\Client as GuzzleClient;
use Psr\Container\ContainerInterface;
use Staffomatic\Api\Client\Client;
use Zend\Hydrator\ClassMethods;

class ClientFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $globalConfig = $container->get('config');
        $config = $globalConfig['staffomatic']['api'];
        $domain = $config['domain'];
        $username = $config['username'];
        $baseUrl = 'https://api.staffomaticapp.com/v3/'.$domain;
        $userAgent = $domain.' ('.$username.')';
        $authorization = 'Basic '.base64_encode($config['username'].':'.$config['password']);

        $guzzleClient = new GuzzleClient([
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => $authorization,
                'User-Agent' => $userAgent
            ]
        ]);

        return new Client(
            $baseUrl,
            $guzzleClient,
            new ClassMethods()
        );
    }
}
