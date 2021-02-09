<?php
class Admin extends User {
    private static int $instanceCount = 0;
    protected const TEST = "colere";

    private array $banUser = [];
    public string $cde;

    public function __construct(string $nom){
        parent::__construct($nom);
        self::InstancePlus();
    }

    public function generateCode(): string{
        return str_replace('user','admin',parent::generateCode());
        //OU $this->code = uniqid('admin')."-".time();
        //return $this->code;
    }

    // Add 1 INSTANCE
    public static function InstancePlus(){
        self::$instanceCount++;
    }
    // Return INSTANCE
    public static function getInstanceCount(){
        return self::$instanceCount;
    }

    /*
    public function display(){
        echo "<p>".self::TEST . "</p>";
        echo "<p>".Admin::TEST."</p>";
    }*/

    public function getPseudo(): string {
        return "UnTruc " . parent::getPseudo();
    }


}