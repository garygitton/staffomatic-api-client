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
}
