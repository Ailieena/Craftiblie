<?php


class Pattern
{
    private $title;
    private $description;
    private $image;
    private $pattern_file;
    private $like;
    private $id;
    private $person_id;
    private $type;
    private $category;


    public function __construct($title, $description, $image, $type, $pattern_file, $category, $id = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->pattern_file = $pattern_file;
        $this->person_id = $person_id;
        $this->type = $type;
        $this->category = $category;
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

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }
}