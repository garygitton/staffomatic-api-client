<?php
namespace Staffomatic\Api\Client;

use Staffomatic\Api\Client\Factory\ClientFactory;
use Staffomatic\Api\Client\Service\ScheduleService;
use Staffomatic\Api\Client\Service\ShiftService;
use Staffomatic\Api\Client\Service\UserService;
use Zend\ServiceManager\AbstractFactory\ConfigAbstractFactory;

return [
    'service_manager' => [
        'factories' => [
            Client::class => ClientFactory::class,
            ShiftService::class => ConfigAbstractFactory::class,
            ShiftService::class => ConfigAbstractFactory::class,
            UserService::class => ConfigAbstractFactory::class
        ]
    ],
    ConfigAbstractFactory::class => [
        ShiftService::class => [
            Client::class
        ],
        ScheduleService::class => [
            Client::class
        ],
        UserService::class => [
            Client::class
        ]
    ]
];
