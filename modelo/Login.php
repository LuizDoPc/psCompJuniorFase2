<?php
require_once 'Crud.php';

class Estado extends Crud{

    protected $table = 'Login';
    private $id;
    private $Email;
    private $Senha;

    public function login($email, $senha){
        $query = 'SELECT Senha FROM Login
                    WHERE Email = :e;';

        if($stmt = DB::prepare($query)){
            $stmt->bindParam(':e', $email);
            $stmt->execute();
            $result = $stmt->fetch();

            if(crypt($senha, $result->Senha) == $result->Senha){
                return true;
            }else{
                return false;
            }
            
        }

    }

    public function insert()
    {
        $query = 'INSERT INTO Login(Email, Senha) VALUES(:e, :s);';

        if($stmt = DB::prepare($query)){
            $stmt->bindParam(':e', $this->Email);
            $stmt->bindParam(':s', $this->Senha);
            $stmt->execute();
        }
    }



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getEmail(){
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email){
        $this->Email = $Email;
    }

    /**
     * @return mixed
     */
    public function getSenha(){
        return $this->Senha;
    }

    /**
     * @param mixed $Senha
     */
    public function setSenha($Senha){
        $this->Senha = $Senha;
    }
}