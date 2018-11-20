<?php
namespace Staffomatic\Api\Client\Enum;

class ResourceEnum
{
    const ABSENCE_TYPE = 'absence type';
    const ABSENCE = 'absence';
    const ACCOUNT = 'account';
    const APPLICATION = 'application';
    const BREAK_TIMER = 'break timer';
    const DEPARTMENT = 'department';
    const EVENT = 'event';
    const FORM_FIELD = 'form field';
    const LOCATION = 'location';
    const NEWS_ITEM = 'news item';
    const NOTIFICATION_SETTING = 'notification setting';
    const SCHEDULE = 'schedule';
    const SHIFT = 'shift';
    const SPECIAL_DAY = 'special day';
    const USER = 'user';
    const WORK_TIMER = 'work timer';

    public static $values = [
        self::ABSENCE_TYPE,
        self::ABSENCE,
        self::ACCOUNT,
        self::BREAK_TIMER,
        self::DEPARTMENT,
        self::EVENT,
        self::FORM_FIELD,
        self::LOCATION,
        self::NEWS_ITEM,
        self::NOTIFICATION_SETTING,
        self::SCHEDULE,
        self::SHIFT,
        self::SPECIAL_DAY,
        self::USER,
        self::WORK_TIMER
    ];
}
