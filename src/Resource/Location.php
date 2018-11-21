<?php
namespace Staffomatic\Api\Client\Resource;

/**
 * Class Location
 *
 * @see https://github.com/staffomatic/staffomatic-api-documentation/blob/master/ressources/locations.md
 *
 * @package Staffomatic\Api\Client\Resource
 */
class Location
{
    use TimestampableTrait;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $logo;

    /**
     * @var integer
     */
    private $firstDayOfWeek;

    /**
     * @var integer
     */
    private $slotMinute;

    /**
     * @var integer
     */
    private $minTime;

    /**
     * @var integer
     */
    private $maxTime;

    /**
     * @var string
     */
    private $defaultView;

    /**
     * @var integer
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
    private $allowSelfAssign;

    /**
     * @var bool
     */
    private $swapShifts;

    /**
     * @var string
     */
    private $mannersAddress;

    /**
     * @var string
     */
    private $userSortBy;

    /**
     * @var bool
     */
    private $notesVisible;

    /**
     * @var int
     */
    private $activeUsersCount;

    /**
     * @var int
     */
    private $departmentCount;

    /**
     * @var array
     */
    private $userIds;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo)
    {
        $this->logo = $logo;
    }

    public function getFirstDayOfWeek(): ?int
    {
        return $this->firstDayOfWeek;
    }

    public function setFirstDayOfWeek(int $firstDayOfWeek)
    {
        $this->firstDayOfWeek = $firstDayOfWeek;
    }

    public function getSlotMinute(): ?int
    {
        return $this->slotMinute;
    }

    public function setSlotMinute(int $slotMinute)
    {
        $this->slotMinute = $slotMinute;
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

    public function isAllowSelfAssign(): ?bool
    {
        return $this->allowSelfAssign;
    }

    public function setAllowSelfAssign(bool $allowSelfAssign)
    {
        $this->allowSelfAssign = $allowSelfAssign;
    }

    public function isSwapShifts(): ?bool
    {
        return $this->swapShifts;
    }

    public function setSwapShifts(bool $swapShifts)
    {
        $this->swapShifts = $swapShifts;
    }

    public function getMannersAddress(): ?string
    {
        return $this->mannersAddress;
    }

    public function setMannersAddress(string $mannersAddress)
    {
        $this->mannersAddress = $mannersAddress;
    }

    public function getUserSortBy(): ?string
    {
        return $this->userSortBy;
    }

    public function setUserSortBy(string $userSortBy)
    {
        $this->userSortBy = $userSortBy;
    }

    public function isNotesVisible(): ?bool
    {
        return $this->notesVisible;
    }

    public function setNotesVisible(bool $notesVisible)
    {
        $this->notesVisible = $notesVisible;
    }

    public function getActiveUsersCount(): ?int
    {
        return $this->activeUsersCount;
    }

    public function setActiveUsersCount(int $activeUsersCount)
    {
        $this->activeUsersCount = $activeUsersCount;
    }

    public function getDepartmentCount(): ?int
    {
        return $this->departmentCount;
    }

    public function setDepartmentCount(int $departmentCount)
    {
        $this->departmentCount = $departmentCount;
    }

    public function getUserIds(): ?array
    {
        return $this->userIds;
    }

    public function setUserIds(array $userIds)
    {
        $this->userIds = $userIds;
    }
}
