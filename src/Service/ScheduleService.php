<?php
namespace Staffomatic\Api\Client\Service;

use League\Period\Period;
use Staffomatic\Api\Client\Client;
use Staffomatic\Api\Client\Enum\ScheduleActionEnum;
use Staffomatic\Api\Client\Resource\Schedule;
use Staffomatic\Api\Client\Resource\Shift;

class ScheduleService
{
    private $client;

    public function __construct(
        Client $client
    ) {
        $this->client = $client;
    }

    public function listScheduleByLocation(int $locationId)
    {
        return $this->client->listResource('/locations/'.$locationId.'/schedules.json');
    }

    public function listScheduleByLocationAndPeriod(int $locationId, Period $period): array
    {
        return $this->client->listResource('/locations/'.$locationId.'/schedules.json', [
            'from' => $period->getStartDate(),
            'until' => $period->getEndDate()
        ]);
    }

    public function listTemplateScheduleByLocation(int $locationId): array
    {
        return $this->client->listResource('/locations/'.$locationId.'/schedules.json', [
            'template' => 'true',
        ]);
    }

    public function getScheduleByLocationAndSchedule(int $locationId, int $scheduleId)
    {
        return $this->client->getResource('/locations/'.$locationId.'/schedules/'.$scheduleId.'/.json');
    }

    public function addScheduleToLocation(int $locationId, array $body)
    {
        return $this->client->postResource('/locations/'.$locationId.'/schedules.json', $body);
    }

    public function updateScheduleByLocationAndSchedule(int $locationId, int $scheduleId, array $body)
    {
        return $this->client->putResource('/locations/'.$locationId.'/schedules/'.$scheduleId.'/.json', $body);
    }

    public function publishScheduleByLocationAndSchedule(
        int $locationId,
        int $scheduleId,
        string $message = '',
        bool $deliveryEmail = false
    ) {
        $body = [
            'do' => ScheduleActionEnum::PUBLISH,
            'message' => $message,
            'deliver_emails' => $deliveryEmail
        ];

        return $this->client->putResource('/locations/'.$locationId.'/schedules/'.$scheduleId.'/.json', $body);
    }

    public function republishScheduleByLocationAndSchedule(
        int $locationId,
        int $scheduleId,
        string $message = '',
        bool $deliveryEmail = false
    ) {
        $body = [
            'do' => ScheduleActionEnum::REPUBLISH,
            'message' => $message,
            'deliver_emails' => $deliveryEmail
        ];

        return $this->client->putResource('/locations/'.$locationId.'/schedules/'.$scheduleId.'/.json', $body);
    }

    public function deleteScheduleByLocationAndSchedule(int $locationId, int $scheduleId)
    {
        return $this->client->deleteResource('/locations/'.$locationId.'/schedules/'.$scheduleId.'/.json');
    }
}