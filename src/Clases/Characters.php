<?php


namespace App\classes;


class Character
{
    private $name;
    private $image;
    private $gender;
    private $alive;
    private $house;
    private $actor;

    /**
     * Character constructor.
     * @param $name
     * @param $image
     * @param $gender
     * @param $alive
     * @param $house
     * @param $actor
     */
    public function __construct($name, $image, $gender, $alive, $house, $actor)
    {
        $this->name = $name;
        $this->image = $image;
        $this->gender = $gender;
        $this->alive = $alive;
        $this->house = $house;
        $this->actor = $actor;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getAlive()
    {
        return $this->alive;
    }

    /**
     * @param mixed $alive
     */
    public function setAlive($alive): void
    {
        $this->alive = $alive;
    }

    /**
     * @return mixed
     */
    public function getHouse()
    {
        return $this->house;
    }

    /**
     * @param mixed $house
     */
    public function setHouse($house): void
    {
        $this->house = $house;
    }

    /**
     * @return mixed
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param mixed $actor
     */
    public function setActor($actor): void
    {
        $this->actor = $actor;
    }
}