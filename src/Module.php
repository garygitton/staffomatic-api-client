<?php
namespace Staffomatic\Api\Client;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface
{
    public function getConfig(): array
    {
        return  include __DIR__ . '/../config/module.config.php';
    }
}
