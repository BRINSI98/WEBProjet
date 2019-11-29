<?php

class event
{
    private $id_event;
    private $title;
    private $periode;
    private $description;
    private $adresse;
    
    
    function __construct($id_event,$title,$periode,$description,$adresse)
    {
        $this->id_event=$id_event;
        $this->title=$title;
        $this->periode=$periode;
        $this->description=$description;
        $this->adresse=$adresse;
        
    }

    function getid_event() {return $this->id_event ;}
    function gettitle() {return $this->title ;}
    function getperiode() {return $this->periode ;}
    function getdescription() {return $this->description ;}
    function getadresse() {return $this->adresse ;}
   
    function setid_event($id_event){
        $this->id_event=$id_event;
    }
    function settitle($title){
        $this->title=$title;
    }
    function setperiode($periode){
        $this->période=$période;
    }
    function setdescription($description){
        $this->description=$description;
    }
    function setadresse($adresse){
        $this->adresse=$adresse;
    }
}

?>