<?php

namespace App\Entity;

use Core\AbstractEntity;

class Project extends AbstractEntity
{
    protected $id;
    protected $dateUpdated = '';
    protected $chapo = '';
    protected $content = '';
    protected $author = '';
    protected $linkToProject = '';

    /**
     * @return mixed
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateUpdated(): string
    {
        return $this->dateUpdated;
    }

    /**
     * @param mixed $updateDate
     *
     * @return self
     */
    public function setDateUpdated (string $dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getChapo(): string
    {
        return $this->chapo;
    }

    /**
     * @param mixed $chapo
     *
     * @return self
     */
    public function setChapo(string $chapo)
    {
        $this->chapo = $chapo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     *
     * @return self
     */
    public function setContent(string $content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     *
     * @return self
     */
    public function setAuthor(string $author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLinkToProject(): string
    {
        return $this->linkToProject;
    }

    /**
     * @param mixed $linkToProject
     *
     * @return self
     */
    public function setLinkToProject(string $linkToProject)
    {
        $this->linkToProject = $linkToProject;

        return $this;
    }
}
