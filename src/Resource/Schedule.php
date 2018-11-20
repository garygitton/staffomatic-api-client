<?php
namespace Staffomatic\Api\Client\Resource;

/**
 * Class Schedule
 *
 * @see https://github.com/staffomatic/staffomatic-api-documentation/blob/master/ressources/schedules.md
 *
 * @package Staffomatic\Api\Client\Resource
 */
class Schedule
{
    use TimestampableTrait;

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $creatorId;

    /**
     * @var int
     */
    private $scheduleId;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $template;

    /**
     * @var string
     */
    private $bop;

    /**
     * @var string
     */
    private $eop;

    /**
     * @var string
     */
    private $deadline;

    /**
     * @var int
     */
    private $coveragePercentage;

    /**
     * @var int
     */
    private $scheduleChangesCount;

    /**
     * @var int
     */
    private $firstDayOfWeek;

    /**
     * @var int
     */
    private $slotMinutes;

    /**
     * @var int
     */
    private $minTime;

    /**
     * @var int
     */
    private $maxTime;

    /**
     * @var string
     */
    private $defaultView;

    /**
     * @var int
     */
    private $defaultEventMinutes;

    /**
     * @var bool
     */
    private $showEventHeader;

    /**
     * @var bool
     */
    private $applicationsVisible;

    /**
     * @var bool
     */
    private $assignmentsVisible;

    /**
     * @var bool
     */
    private $swapShifts;

    /**
     * @var bool
     */
    private $notesVisible;

    /**
     * @var bool
     */
    private $allowSelfAssign;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getCreatorId(): ?int
    {
        return $this->creatorId;
    }

    public function setCreatorId(int $creatorId)
    {
        $this->creatorId = $creatorId;
    }

    public function getScheduleId(): ?int
    {
        return $this->scheduleId;
    }

    public function setScheduleId(int $scheduleId)
    {
        $this->scheduleId = $scheduleId;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state)
    {
        $this->state = $state;
    }

    public function getTemplate(): ?string
    {
        return $this->template;
    }

    public function setTemplate(string $template)
    {
        $this->template = $template;
    }

    public function getBop(): ?string
    {
        return $this->bop;
    }

    public function setBop(string $bop)
    {
        $this->bop = $bop;
    }

    public function getEop(): ?string
    {
        return $this->eop;
    }

    public function setEop(string $eop)
    {
        $this->eop = $eop;
    }

    public function getDeadline(): ?string
    {
        return $this->deadline;
    }

    public function setDeadline(string $deadline)
    {
        $this->deadline = $deadline;
    }

    public function getCoveragePercentage(): ?int
    {
        return $this->coveragePercentage;
    }

    public function setCoveragePercentage(int $coveragePercentage)
    {
        $this->coveragePercentage = $coveragePercentage;
    }

    public function getScheduleChangesCount(): ?int
    {
        return $this->scheduleChangesCount;
    }

    public function setScheduleChangesCount(int $scheduleChangesCount)
    {
        $this->scheduleChangesCount = $scheduleChangesCount;
    }

    public function getFirstDayOfWeek(): ?int
    {
        return $this->firstDayOfWeek;
    }

    public function setFirstDayOfWeek(int $firstDayOfWeek)
    {
        $this->firstDayOfWeek = $firstDayOfWeek;
    }

    public function getSlotMinutes(): ?int
    {
        return $this->slotMinutes;
    }

    public function setSlotMinutes(int $slotMinutes)
    {
        $this->slotMinutes = $slotMinutes;
    }

    public function getMinTime(): ?int
    {
        return $this->minTime;
    }

    public function setMinTime(int $minTime)
    {
        $this->minTime = $minTime;
    }

    public function getMaxTime(): ?int
    {
        return $this->maxTime;
    }

    public function setMaxTime(int $maxTime)
    {
        $this->maxTime = $maxTime;
    }

    public function getDefaultView(): ?string
    {
        return $this->defaultView;
    }

    public function setDefaultView(string $defaultView)
    {
        $this->defaultView = $defaultView;
    }

    public function getDefaultEventMinutes(): ?int
    {
        return $this->defaultEventMinutes;
    }

    public function setDefaultEventMinutes(int $defaultEventMinutes)
    {
        $this->defaultEventMinutes = $defaultEventMinutes;
    }

    public function isShowEventHeader(): ?bool
    {
        return $this->showEventHeader;
    }

    public function setShowEventHeader(bool $showEventHeader)
    {
        $this->showEventHeader = $showEventHeader;
    }

    public function isApplicationsVisible(): ?bool
    {
        return $this->applicationsVisible;
    }

    public function setApplicationsVisible(bool $applicationsVisible)
    {
        $this->applicationsVisible = $applicationsVisible;
    }

    public function isAssignmentsVisible(): ?bool
    {
        return $this->assignmentsVisible;
    }

    public function setAssignmentsVisible(bool $assignmentsVisible)
    {
        $this->assignmentsVisible = $assignmentsVisible;
    }

    public function isSwapShifts(): ?bool
    {
        return $this->swapShifts;
    }

    public function setSwapShifts(bool $swapShifts)
    {
        $this->swapShifts = $swapShifts;
    }

    public function isNotesVisible(): ?bool
    {
        return $this->notesVisible;
    }

    public function setNotesVisible(bool $notesVisible)
    {
        $this->notesVisible = $notesVisible;
    }

    public function isAllowSelfAssign(): ?bool
    {
        return $this->allowSelfAssign;
    }

    public function setAllowSelfAssign(bool $allowSelfAssign)
    {
        $this->allowSelfAssign = $allowSelfAssign;
    }
}
