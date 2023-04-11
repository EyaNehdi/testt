<?php
class Reclamation
{
    private int $idR;
    private string $typeR;
    private string $descriptionR;

   
    public function __constructor($idR=null ,$typeR= null ,$descriptionR=null)
    {
        $this->idR=$idR;
        $this->typeR=$typeR;
        $this->descriptionR=$descriptionR;
      
    }

    public function __construct(int $i, string $t,string $d)
    {
        $this->idR=$i;
        $this->typeR=$t;
        $this->descriptionR=$d;
        
    }

    //getters
    public function getidR()
    {
        return $this->idR;
    }
    public function gettypeR()
    {
        return $this->typeR;
    }
    public function getdescriptionR()
    {
        return $this->descriptionR;
    }
    //setters
    public function setidR(int $idR)
    {
         $this->idR=$idR;
    }
    public function settypeR(string $typeR)
    {
         $this->typeR=$typeR;
    }
   
    public function setdescriptionR(string $descriptionR)
    {
         $this->descriptionR=$descriptionR;
    }
}
     ?>