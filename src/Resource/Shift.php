<?php
namespace Staffomatic\Api\Client\Resource;

use League\Period\Period;

/**
 * Class Shift
 *
 * @see https://github.com/staffomatic/staffomatic-api-documentation/blob/master/ressources/shifts.md
 *
 * @package Staffomatic\Api\Client\Resource
 */
class Shift
{
    use TimestampableTrait;

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $desiredCoverage;

    /**
     * @var string
     */
    private $note;

    /**
     * @var bool
     */
    private $openEnd;

    /**
     * @var bool
     */
    private $full;

    /**
     * @var int
     */
    private $locationId;

    /**
     * @var int
     */
    private $departmentId;

    /**
     * @var \DateTime
     */
    private $endsAt;

    /**
     * @var \DateTime
     */
    private $startsAt;

    /**
     * @var int
     */
    private $scheduleId;

    /**
     * @var array
     */
    private $appliedUserIds;

    /**
     * @var array
     */
    private $assignedUserIds;

    /**
     * @var array
     */
    private $cancelledUserIds;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getDesiredCoverage(): ?int
    {
        return $this->desiredCoverage;
    }

    public function setDesiredCoverage(int $desiredCoverage)
    {
        $this->desiredCoverage = $desiredCoverage;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(string $note)
    {
        $this->note = $note;
    }

    public function isOpenEnd(): ?bool
    {
        return $this->openEnd;
    }

    public function setOpenEnd(bool $openEnd)
    {
        $this->openEnd = $openEnd;
    }

    public function isFull(): ?bool
    {
        return $this->full;
    }

    public function setFull(bool $full)
    {
        $this->full = $full;
    }

    public function getLocationId(): ?int
    {
        return $this->locationId;
    }

    public function setLocationId(int $locationId)
    {
        $this->locationId = $locationId;
    }

    public function getDepartmentId(): ?int
    {
        return $this->departmentId;
    }

    public function setDepartmentId(int $departmentId)
    {
        $this->departmentId = $departmentId;
    }

    public function getEndsAt(): ?\DateTime
    {
        return $this->endsAt;
    }

    public function setEndsAt(\DateTime $endsAt)
    {
        $this->endsAt = $endsAt;
    }

    public function getStartsAt(): ?\DateTime
    {
        return $this->startsAt;
    }

    public function setStartsAt(\DateTime $startsAt)
    {
        $this->startsAt = $startsAt;
    }

    public function getPeriod(): Period
    {
        return new Period($this->startsAt, $this->endsAt);
    }

    public function setPeriod(Period $period)
    {
        $this->startsAt = $period->getStartDate();
        $this->endsAt = $period->getEndDate();
    }

    public function getScheduleId(): ?int
    {
        return $this->scheduleId;
    }

    public function setScheduleId(int $scheduleId)
    {
        $this->scheduleId = $scheduleId;
    }

    public function getAppliedUserIds(): ?array
    {
        return $this->appliedUserIds;
    }

    public function setAppliedUserIds(array $appliedUserIds)
    {
        $this->appliedUserIds = $appliedUserIds;
    }

    public function getAssignedUserIds(): ?array
    {
        return $this->assignedUserIds;
    }

    public function setAssignedUserIds(array $assignedUserIds)
    {
        $this->assignedUserIds = $assignedUserIds;
    }

    public function getCancelledUserIds(): ?array
    {
        return $this->cancelledUserIds;
    }

    public function setCancelledUserIds(array $cancelledUserIds)
    {
        $this->cancelledUserIds = $cancelledUserIds;
    }
}
