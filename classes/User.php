<?php
class User {
    protected const TEST = "Colere";
    //USER
    private string $pseudo;
    //CODE
    private string $code;

    // CONSTRUCTEUR
    public function __construct(string $pseudo){
        $this->setPseudo($pseudo);
    }

    //USER
    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): void
    {
        $this->pseudo = $pseudo;
    }

    //CODE
    public function generateCode(): string {
        $this->code = uniqid('user')."-".time();
        return $this->code;
    }

}