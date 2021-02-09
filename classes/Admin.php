<?php
class Admin extends User {
    protected const TEST = "colere";

    private array $banUser = [];
    public string $cde;

    public function generateCode(): string{
        return str_replace('user','admin',parent::generateCode());
        //OU
        //$this->code = uniqid('admin')."-".time();
        //return $this->code;
    }

    public function display(){
        echo "<p>".self::TEST . "</p>";
        echo "<p>".Admin::TEST."</p>";
    }

    public function getPseudo(): string {
        return "UnTruc " . parent::getPseudo();
    }


}