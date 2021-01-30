<?php


namespace App\classes;


class House
{
    private $name;
    private $sigil;
    private $words;

    /**
     * House constructor.
     * @param $name
     * @param $sigil
     * @param $words
     */
    public function __construct($name, $sigil, $words)
    {
        $this->name = $name;
        $this->sigil = $sigil;
        $this->words = $words;
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
    public function getSigil()
    {
        return $this->sigil;
    }

    /**
     * @param mixed $sigil
     */
    public function setSigil($sigil): void
    {
        $this->sigil = $sigil;
    }

    /**
     * @return mixed
     */
    public function getWords()
    {
        return $this->words;
    }

    /**
     * @param mixed $words
     */
    public function setWords($words): void
    {
        $this->words = $words;
    }
}
