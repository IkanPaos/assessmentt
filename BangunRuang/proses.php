<?php

class operasi{

    public $bilangan1;
    public $bilangan2;
    
    function __construct($x,$y)
    {
     $this->bilangan1=$x;
     $this->bilangan2=$y;
    }

    function vkubus($x)
    {
        $volume = $x*$x*$x;
        return $volume;
    }
    
    function vbola($x)
    {
        $pecahan = 4/3;
        $pi = 22/7;
        $volume = $pecahan*$pi*$x;
        return $volume;
    }
    
    function vprisma()
    {
        $volume = $this->bilangan1*$this->bilangan2;
        return $volume;
    }
}

?>