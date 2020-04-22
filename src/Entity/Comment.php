<?php

namespace App\Entity;

use Core\AbstractEntity;

class Comment extends AbstractEntity
{
    protected $id;
    protected $user_id;
    protected $project_id;
    protected $pseudo='';
    protected $comment = '';
    protected $date_created = '';
    protected $date_updated = '';
    protected $is_validated = false;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId)
    {
        $this->userId = $userId;

        return $this;
    }

    public function getProjectId(): int
    {
        return $this->projectId;
    }

    public function setProjectId(int $projectId)
    {
        $this->projectId = $projectId;

        return $this;
    }

    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setComment(string $comment)
    {
        $this->comment = $comment;

        return $this;
    }

    public function getDateCreated(): string
    {
        return $this->dateCreated;
    }

    public function setDateCreated(string $dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    public function getDateUpdated(): string
    {
        return $this->dateUpdated;
    }

    public function setDateUpdated(string $dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }

    public function getIsValidated(): bool
    {
        return $this->isValidated;
    }

    public function setIsValidated(bool $isValidated)
    {
        $this->isValidated = $isValidated;

        return $this;
    }
}
