<?php

class bank_variables extends CI_Model{
    var $id;
    var $bname;
    var $branch;
    var $acnumber;

    public function getId()
    {
        return $this->id;
    }

    public function getBankName()
    {
        return $this->bname;
    }

    public function getBranch()
    {
        return $this->branch;
    }

    public function getAccNo()
    {
        return $this->acnumber;
    }

    // Setters
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setBankName($bname)
    {
        $this->bname = $bname;
    }

    public function setBranch($branch)
    {
        $this->branch = $branch;
    }

    public function setAccNo($acnumber)
    {
        $this->acnumber= $acnumber;
    }



}