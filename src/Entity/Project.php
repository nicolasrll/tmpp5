<?php

namespace App\Entity;

use Core\AbstractEntity;

class Project extends AbstractEntity
{
    protected $id;
    protected $admin_id;
    protected $title;
    protected $chapo = '';
    protected $content = '';
    protected $author = '';
    protected $date_updated = '';
    protected $link_to_project = '';

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    public function getDateUpdated(): string
    {
        return $this->dateUpdated;
    }

    public function setDateUpdated (string $dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }

    public function getChapo(): string
    {
        return $this->chapo;
    }

    public function setChapo(string $chapo)
    {
        $this->chapo = $chapo;

        return $this;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content)
    {
        $this->content = $content;

        return $this;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author)
    {
        $this->author = $author;

        return $this;
    }

    public function getLinkToProject(): string
    {
        return $this->linkToProject;
    }

    public function setLinkToProject(string $linkToProject)
    {
        $this->linkToProject = $linkToProject;

        return $this;
    }
}
