<?php
namespace Staffomatic\Api\Client\Service;

use League\Period\Period;
use Staffomatic\Api\Client\Client;
use Staffomatic\Api\Client\Resource\Shift;

class ShiftService
{
    private $client;

    public function __construct(
        Client $client
    ) {
        $this->client = $client;
    }

    public function listShiftBySchedule(int $scheduleId)
    {
        return $this->client->listResource('/schedules/'.$scheduleId.'/shifts.json');
    }

    public function listShiftByLocation(int $locationId)
    {
        return $this->client->listResource('/locations/'.$locationId.'/shifts.json');
    }

    public function listShiftByLocationAndPeriod(int $locationId, Period $period): array
    {
        return $this->client->listResource('/locations/'.$locationId.'/shifts.json', [
            'from' => $period->getStartDate(),
            'until' => $period->getEndDate()
        ]);
    }

    public function listShiftByPeriod(Period $period)
    {
        return $this->client->listResource('/shifts.json', [
            'from' => $period->getStartDate(),
            'until' => $period->getEndDate()
        ]);
    }

    public function listShiftByDepartment(int $departmentId)
    {
        return $this->client->listResource('/shifts.json', [
            'department_ids[]' => $departmentId,
        ]);
    }

    public function getShiftByScheduleAndShift(int $scheduleId, int $shiftId)
    {
        return $this->client->getResource('/schedules/'.$scheduleId.'/shifts/'.$shiftId.'/.json');
    }

    public function addShiftToSchedule(int $scheduleId, Shift $shift)
    {
        return $this->client->postResource('/schedules/'.$scheduleId.'/shifts.json', $shift);
    }

    public function updateShiftByScheduleAndShift(int $scheduleId, Shift $shift)
    {
        $shiftId = $shift->getId();

        return $this->client->putResource('/schedules/'.$scheduleId.'/shifts/'.$shiftId.'/.json', $shift);
    }

    public function deleteShiftByScheduleAndShift(int $scheduleId, int $shiftId)
    {
        return $this->client->deleteResource('/schedules/'.$scheduleId.'/shifts/'.$shiftId.'/.json');
    }
}