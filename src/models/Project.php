<?php

class Project
{
    private $title;
    private $description;
    private $image;
    private $like;
    private $pattern;
    private $id;

    public function __construct($title, $description, $image, $like = 0, $pattern = 0, $id = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->like = $like;
        $this->pattern = $pattern;
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getLike(): int
    {
        return $this->like;
    }

    public function setLike(int $like): void
    {
        $this->like = $like;
    }

    public function getPattern(): int
    {
        return $this->dislike;
    }

    public function setDPattern(int $pattern): void
    {
        $this->pattern = $pattern;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }
}