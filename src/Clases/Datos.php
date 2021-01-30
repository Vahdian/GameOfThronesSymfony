<?php

namespace App\Clases;

use App\classes\Character;
use App\classes\House;

class Datos {
    private $characters = [];
    private $houses = [];

    public function __construct()
    {
       $json = file_get_contents('../src/Clases/got.json');
       $json = json_decode($json);
       
    foreach ($json->characters as $character) {
        $ch = new Character(

            $character->name,
            $character->image,
            $character->gender,
            $character->alive,
            $character->house,
            $character->actor
            
            
        );

        array_push($this->characters, $ch);
    }
    foreach ($json->houses as $house) {
        $hs = new House(

            $house->name,
            $house->sigil,
            $house->words,
        );

        array_push($this->houses, $hs);
    }

    }
    public function getCharacters()
    {
        return $this->characters;
    }

    /**
     * Get the value of houses
     */
    public function getHouses()
    {
        return $this->houses;
    }
}