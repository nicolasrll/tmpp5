<?php

namespace App\Entity;

use Core\AbstractEntity;

class Comment extends AbstractEntity
{
    protected $id;
    protected $articleId;
    protected $pseudo='';
    protected $comment = '';
    protected $dateCreated = '';
    protected $dateUpdated = '';
    protected $isValidated = false;

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
    public function getArticleId(): int
    {
        return $this->articleId;
    }

    /**
     * @param mixed $articleId
     *
     * @return self
     */
    public function setArticleId(int $articleId)
    {
        $this->articleId = $articleId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    /**
     * @param mixed $pseudo
     *
     * @return self
     */
    public function setPseudo(string $pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     *
     * @return self
     */
    public function setComment(string $comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateCreated(): string
    {
        return $this->dateCreated;
    }

    /**
     * @param mixed $dateCreated
     *
     * @return self
     */
    public function setDateCreated(string $dateCreated)
    {
        $this->dateCreated = $dateCreated;

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
     * @param mixed $dateCreated
     *
     * @return self
     */
    public function setDateUpdated(string $dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsValidated()
    {
        return $this->isValidated;
    }

    /**
     * @param mixed $isValidated
     *
     * @return self
     */
    public function setIsValidated($isValidated)
    {
        $this->isValidated = $isValidated;

        return $this;
    }
}
