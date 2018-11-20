<?php
namespace Staffomatic\Api\Client;

use Staffomatic\Api\Client\Factory\ClientFactory;

return [
    'service_manager' => [
        'factories' => [
            Client::class => ClientFactory::class
        ]
    ]
];
