<?php
namespace Staffomatic\Api\Client;

use GuzzleHttp\Client as GuzzleClient;
use Zend\Hydrator\HydratorInterface;

class Client
{
    private $baseUrl;
    private $guzzleClient;
    private $hydrator;

    public function __construct(
        string $baseUrl,
        GuzzleClient $guzzleClient,
        HydratorInterface $hydrator
    ) {
        $this->baseUrl = $baseUrl;
        $this->guzzleClient = $guzzleClient;
        $this->hydrator = $hydrator;
    }

    private function serializeParams(array $params = [])
    {
        foreach($params as $key => $param) {
            if($param instanceof \DateTime) {
                $params[$key] = $param->format(\DateTime::W3C);
            }
        }

        return $params;
    }
}
