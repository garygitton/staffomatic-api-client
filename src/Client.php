<?php
namespace Staffomatic\Api\Client;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\RequestOptions;
use Staffomatic\Api\Client\Resource\Absence;
use Staffomatic\Api\Client\Resource\AbsenceType;
use Staffomatic\Api\Client\Resource\Account;
use Staffomatic\Api\Client\Resource\Application;
use Staffomatic\Api\Client\Resource\BreakTimer;
use Staffomatic\Api\Client\Resource\Department;
use Staffomatic\Api\Client\Resource\Event;
use Staffomatic\Api\Client\Resource\FormField;
use Staffomatic\Api\Client\Resource\Location;
use Staffomatic\Api\Client\Resource\NewsItem;
use Staffomatic\Api\Client\Resource\NotificationSetting;
use Staffomatic\Api\Client\Resource\Schedule;
use Staffomatic\Api\Client\Resource\Shift;
use Staffomatic\Api\Client\Resource\SpecialDay;
use Staffomatic\Api\Client\Resource\User;
use Zend\Hydrator\HydratorInterface;
use Zend\Hydrator\Strategy\DateTimeFormatterStrategy;

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
        $dateTimeFormatterStrategy = new DateTimeFormatterStrategy(\DateTime::W3C);
        $this->hydrator->addStrategy('created_at', $dateTimeFormatterStrategy);
        $this->hydrator->addStrategy('updated_at', $dateTimeFormatterStrategy);
        $this->hydrator->addStrategy('starts_at', $dateTimeFormatterStrategy);
        $this->hydrator->addStrategy('ends_at', $dateTimeFormatterStrategy);
        $this->hydrator->addStrategy('shift_starts_at', $dateTimeFormatterStrategy);
        $this->hydrator->addStrategy('shift_ends_at', $dateTimeFormatterStrategy);
        $this->hydrator->addStrategy('attend_starts_at', $dateTimeFormatterStrategy);
        $this->hydrator->addStrategy('attend_ends_at', $dateTimeFormatterStrategy);
        $this->hydrator->addStrategy('deadline', $dateTimeFormatterStrategy);
        $this->hydrator->addStrategy('application_starts_at', $dateTimeFormatterStrategy);
        $this->hydrator->addStrategy('application_ends_at', $dateTimeFormatterStrategy);
        $this->hydrator->addStrategy('locked_at', $dateTimeFormatterStrategy);
    }

    public function getResource($path, $queryParams = [])
    {
        $options = [
            RequestOptions::QUERY => $this->serializeParams($queryParams)
        ];

        $result = $this->guzzleClient->get($this->baseUrl . $path, $options);
        $content = $result->getBody()->getContents();
        $data = json_decode($content, true);

        $resource = $this->getResourceFromPath($path);
        $this->hydrator->hydrate($data, $resource);

        return $resource;
    }

    public function listResource($path, $queryParams = [])
    {
        $options = [
            RequestOptions::QUERY => $this->serializeParams($queryParams)
        ];

        $result = $this->guzzleClient->get($this->baseUrl . $path, $options);
        $content = $result->getBody()->getContents();
        $dataRows = json_decode($content, true);

        $resource = $this->getResourceFromPath($path);

        $resources = [];
        foreach ($dataRows as $data) {
            $resources[] = $this->hydrator->hydrate($data, clone $resource);
        }

        return $resources;
    }

    public function postResource($path, $body)
    {
        if(is_object($body)) {
            $body = $this->hydrator->extract($body);
        }

        $options = [
            RequestOptions::BODY => $body
        ];

        $result = $this->guzzleClient->post($this->baseUrl . $path, $options);
        $content = $result->getBody()->getContents();
        $body = json_decode($content, true);

        return $body;
    }

    public function putResource($path, $body)
    {
        if(is_object($body)) {
            $body = $this->hydrator->extract($body);
        }

        $options = [
            RequestOptions::BODY => $body
        ];

        $result = $this->guzzleClient->put($this->baseUrl . $path, $options);
        $content = $result->getBody()->getContents();
        $body = json_decode($content, true);

        return $body;
    }

    public function deleteResource($path)
    {
        $result = $this->guzzleClient->delete($this->baseUrl . $path);

        return $result;
    }

    private function serializeParams(array $params = [])
    {
        foreach ($params as $key => $param) {
            if ($param instanceof \DateTimeInterface) {
                $params[$key] = $param->format(\DateTime::W3C);
            }
        }

        return $params;
    }

    public function getResourceFromPath(string $path)
    {
        $pathInfo = pathinfo($path);
        $resource = $this->getResourceFromRoutePart($pathInfo['filename']);

        if ($resource) {
            return $resource;
        }

        $parts = explode('/', $pathInfo['dirname']);
        $lastPart = array_pop($parts);
        $resource = $this->getResourceFromRoutePart($lastPart);

        if (!$resource) {
            throw new \Exception('Impossible to invoke resource from path.');
        }

        return $resource;
    }

    private function getResourceFromRoutePart($part)
    {
        $mapPartToResource = [
            'absences' => new Absence(),
            'absence_types' => new AbsenceType(),
            'account' => new Account(),
            'applications' => new Application(),
            'break_timers' => new BreakTimer(),
            'departments' => new Department(),
            'events' => new Event(),
            'form_fields' => new FormField(),
            'locations' => new Location(),
            'news_items' => new NewsItem(),
            'notification_settings' => new NotificationSetting(),
            'schedules' => new Schedule(),
            'shifts' => new Shift(),
            'special_days' => new SpecialDay(),
            'users' => new User(),
        ];

        if (!isset($mapPartToResource[$part])) {
            return null;
        }

        $resource = $mapPartToResource[$part];

        return $resource;
    }
}
