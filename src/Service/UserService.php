<?php
namespace Staffomatic\Api\Client\Service;

use League\Period\Period;
use Staffomatic\Api\Client\Client;
use Staffomatic\Api\Client\Enum\ScheduleActionEnum;
use Staffomatic\Api\Client\Enum\UserActionEnum;
use Staffomatic\Api\Client\Enum\UserStateEnum;
use Staffomatic\Api\Client\Resource\Schedule;
use Staffomatic\Api\Client\Resource\Shift;
use Staffomatic\Api\Client\Resource\User;

class UserService
{
    private $client;

    public function __construct(
        Client $client
    ) {
        $this->client = $client;
    }

    public function listUserByLocation(int $locationId)
    {
        return $this->client->listResource('/locations/' . $locationId . '/users.json');
    }

    public function listActiveUser()
    {
        return $this->client->getResource('/users.json', [
            'state' => UserStateEnum::ACTIVE
        ]);
    }

    public function listUserByLocationAndDepartment(int $locationId, int $departmentId)
    {
        return $this->client->listResource('/locations' . $locationId . '/user.json', [
            'department_ids[]' => $departmentId,
        ]);
    }

    public function getUserByLocationAndUser(int $locationId, int $userId)
    {
        return $this->client->getResource('/locations/' . $locationId . '/users/' . $userId . '.json');
    }

    public function inviteUserToLocation(
        int $locationId,
        string $email = '',
        array $departmentIds = []
    ) {
        $body = [
            'do' => UserActionEnum::SEND_INVITATION,
            'email' => $email,
            'department_ids' => $departmentIds
        ];

        return $this->client->postResource('/locations/' . $locationId . '/users.json', $body);
    }

    public function updateUserForLocation(int $locationId, User $user)
    {
        $userId = $user->getId();

        return $this->client->putResource('/locations/' . $locationId . '/users/' . $userId . '.json', $user);
    }

    public function lockUserForLocationAndUser(int $locationId, int $userId)
    {
        $body = [
            'do' => UserActionEnum::LOCK,
        ];

        return $this->client->putResource('/locations/' . $locationId . '/users' . $userId . '.json', $body);
    }

    public function unlockUserForLocationAndUser(int $locationId, int $userId)
    {
        $body = [
            'do' => UserActionEnum::LOCK,
        ];

        return $this->client->putResource('/locations/' . $locationId . '/users' . $userId . '.json', $body);
    }

    public function deleteUserForLocationAndUser(int $locationId, int $userId)
    {
        return $this->client->deleteResource('/locations/' . $locationId . '/users' . $userId . '.json');
    }
}
