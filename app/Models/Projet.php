<?php namespace App\Models;
class Projet{
    private $id;
    private $title;
    private $prix;
    private $descr;
    private $delai;

    public function __construct($id,$title,$prix,$descr,$delai){
        $this->id=$id;
        $this->title=$title;
        $this->prix=$prix;
        $this->descr=$descr;
        $this->delai=$delai;
    }
    public function getId(){return $this->id;}
    public function setId($id){$this->id=$id;}

    public function getTitle(){return $this->title;}
    public function setTitle($title){$this->title=$title;}

    public function getPrix(){return $this->prix;}
    public function setPrix($prix){$this->prix=$prix;}

    public function getDescr(){return $this->descr;}
    public function setDescr($descr){$this->descr=$descr;}

    public function getDelai(){return $this->delai;}
    public function setDelai($delai){$this->delai=$delai;}
}?>