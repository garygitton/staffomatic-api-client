<?php
namespace Staffomatic\Api\Client\Resource;

/**
 * Class User
 *
 * @see https://github.com/staffomatic/staffomatic-api-documentation/blob/master/ressources/users.md
 *
 * @package Staffomatic\Api\Client\Resource
 */
class User
{
    use TimestampableTrait;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var string
     */
    private $role;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $phoneNumberMobile;

    /**
     * @var string
     */
    private $phoneNumberOffice;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $additionalStreet;

    /**
     * @var string
     */
    private $zip;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $country;

    /**
     * @var int
     */
    private $maxVacationDays;

    /**
     * @var int
     */
    private $commentCounts;

    /**
     * @var int
     */
    private $attachmentCounts;

    /**
     * @var bool
     */
    private $commentable;

    /**
     * @var bool
     */
    private $attachable;

    /**
     * @var int
     */
    private $approvedAbsencesHours;

    /**
     * @var int
     */
    private $maxHoursPerMonth;

    /**
     * @var array
     */
    private $departmentIds;

    /**
     * @var \DateTimeInterface
     */
    private $lockedAt;

    /**
     * @var int
     */
    private $invitedById;

    /**
     * @var string
     */
    private $invitationState;

    /**
     * @var string
     */
    private $customId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id)
    {
        $this->id = $id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email)
    {
        $this->email = $email;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName)
    {
        $this->lastName = $lastName;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale)
    {
        $this->locale = $locale;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role)
    {
        $this->role = $role;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image)
    {
        $this->image = $image;
    }

    public function getPhoneNumberMobile(): ?string
    {
        return $this->phoneNumberMobile;
    }

    public function setPhoneNumberMobile(?string $phoneNumberMobile)
    {
        $this->phoneNumberMobile = $phoneNumberMobile;
    }

    public function getPhoneNumberOffice(): ?string
    {
        return $this->phoneNumberOffice;
    }

    public function setPhoneNumberOffice(?string $phoneNumberOffice)
    {
        $this->phoneNumberOffice = $phoneNumberOffice;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company)
    {
        $this->company = $company;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street)
    {
        $this->street = $street;
    }

    public function getAdditionalStreet(): ?string
    {
        return $this->additionalStreet;
    }

    public function setAdditionalStreet(?string $additionalStreet)
    {
        $this->additionalStreet = $additionalStreet;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function setZip(?string $zip)
    {
        $this->zip = $zip;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city)
    {
        $this->city = $city;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country)
    {
        $this->country = $country;
    }

    public function getMaxVacationDays(): ?int
    {
        return $this->maxVacationDays;
    }

    public function setMaxVacationDays(?int $maxVacationDays)
    {
        $this->maxVacationDays = $maxVacationDays;
    }

    public function getCommentCounts(): ?int
    {
        return $this->commentCounts;
    }

    public function setCommentCounts(?int $commentCounts)
    {
        $this->commentCounts = $commentCounts;
    }

    public function getAttachmentCounts(): ?int
    {
        return $this->attachmentCounts;
    }

    public function setAttachmentCounts(?int $attachmentCounts)
    {
        $this->attachmentCounts = $attachmentCounts;
    }

    public function isCommentable(): ?bool
    {
        return $this->commentable;
    }

    public function setCommentable(?bool $commentable)
    {
        $this->commentable = $commentable;
    }

    public function isAttachable(): ?bool
    {
        return $this->attachable;
    }

    public function setAttachable(?bool $attachable)
    {
        $this->attachable = $attachable;
    }

    public function getApprovedAbsencesHours(): ?int
    {
        return $this->approvedAbsencesHours;
    }

    public function setApprovedAbsencesHours(?int $approvedAbsencesHours)
    {
        $this->approvedAbsencesHours = $approvedAbsencesHours;
    }

    public function getMaxHoursPerMonth(): ?int
    {
        return $this->maxHoursPerMonth;
    }

    public function setMaxHoursPerMonth(?int $maxHoursPerMonth)
    {
        $this->maxHoursPerMonth = $maxHoursPerMonth;
    }

    public function getDepartmentIds(): ?array
    {
        return $this->departmentIds;
    }

    public function setDepartmentIds(array $departmentIds)
    {
        $this->departmentIds = $departmentIds;
    }

    public function getLockedAt(): ?\DateTimeInterface
    {
        return $this->lockedAt;
    }

    public function setLockedAt(?\DateTimeInterface $lockedAt = null)
    {
        $this->lockedAt = $lockedAt;
    }

    public function getInvitedById(): ?int
    {
        return $this->invitedById;
    }

    public function setInvitedById(?int $invitedById)
    {
        $this->invitedById = $invitedById;
    }

    public function getInvitationState(): ?string
    {
        return $this->invitationState;
    }

    public function setInvitationState(?string $invitationState)
    {
        $this->invitationState = $invitationState;
    }

    public function getCustomId(): ?string
    {
        return $this->customId;
    }

    public function setCustomId(?string $customId)
    {
        $this->customId = $customId;
    }
}

