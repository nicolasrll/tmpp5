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
        return $this->user_id;
    }

    public function setUserId(int $userId)
    {
        $this->user_id = $userId;

        return $this;
    }

    public function getProjectId(): int
    {
        return $this->project_id;
    }

    public function setProjectId(int $projectId)
    {
        $this->project_id = $projectId;

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
        return $this->date_created;
    }

    public function setDateCreated(string $dateCreated)
    {
        $this->date_created = $dateCreated;

        return $this;
    }

    public function getDateUpdated(): string
    {
        return $this->date_updated;
    }

    public function setDateUpdated(string $dateUpdated)
    {
        $this->date_updated = $dateUpdated;

        return $this;
    }

    public function getIsValidated(): bool
    {
        return $this->is_validated;
    }

    public function setIsValidated(bool $isValidated)
    {
        $this->is_validated = $isValidated;

        return $this;
    }
}
