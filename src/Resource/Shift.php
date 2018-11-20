<?php
namespace Staffomatic\Api\Client\Resource;

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
}
