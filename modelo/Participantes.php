<?php
require_once 'Crud.php';

class Participantes extends Crud {

    protected $table = 'Participantes';

    private $Nome;
    private $CPF;
    private $RG;
    private $ufRG;
    private $Telefone;
    private $Email;
    private $Logradouro;
    private $Numero;
    private $Bairro;
    private $CEP;
    private $Complemento;
    private $Nascimento;
    private $Inscrito;
    private $Estado_idEstado;
    private $Cidade_idCidade;

    /**
     * Participantes constructor.
     */
    public function __construct(...$cpf){
        if(count($cpf) == 1 and $cpf[0] != null){
            $res = $this->find($cpf[0]);
            $this->Nome = $res->Nome;
            $this->CPF = $res->CPF;
            $this->RG = $res->RG;
            $this->ufRG = $res->ufRG;
            $this->Telefone= $res->Telefone;
            $this->Email = $res->Email;
            $this->Logradouro = $res->Logradouro;
            $this->Numero = $res->Numero;
            $this->Bairro = $res->Bairro;
            $this->CEP = $res->CEP;
            $this->Complemento = $res->Complemento;
            $this->Nascimento = $res->Nascimento;
            $this->Inscrito = $res->Inscrito;
            $this->Estado_idEstado = new Estado($res->Estado_idEstado);
            $this->Cidade_idCidade = new Cidade($res->Cidade_idCidade);
        }
    }


    public function insert(){
        $query = 'INSERT INTO Participantes(
                        Nome, 
                        CPF,
                        ufRG,
                        RG, 
                        Telefone, 
                        Email, 
                        Logradouro, 
                        Numero, 
                        Bairro, 
                        CEP, 
                        Complemento,
                        Nascimento,
                        Inscrito,
                        Estado_idEstado, 
                        Cidade_idCidade) 
                  VALUES (:nome, :cpf, :rg, :ufrg, :tel, :email, :logradouro, :numero, :bairro, :cep, :complemento, :nasc, :insc, :idEstado, :idCidade);';
        if($stmt = DB::prepare($query)){
            $idestado = $this->Estado_idEstado->getIdEstado();
            $idcidade = $this->Cidade_idCidade->getIdCidade();

            $stmt->bindParam(':nome', $this->Nome);
            $stmt->bindParam(':cpf', $this->CPF);
            $stmt->bindParam(':ufrg', $this->ufRG);
            $stmt->bindParam(':rg', $this->RG);
            $stmt->bindParam(':tel', $this->Telefone);
            $stmt->bindParam(':email', $this->Email);
            $stmt->bindParam(':logradouro', $this->Logradouro);
            $stmt->bindParam(':numero', $this->Numero);
            $stmt->bindParam(':bairro', $this->Bairro);
            $stmt->bindParam(':cep', $this->CEP);
            $stmt->bindParam(':complemento', $this->Complemento);
            $stmt->bindParam(':nasc', $this->Nascimento);
            $stmt->bindParam(':insc', $this->Inscrito);
            $stmt->bindParam(':idEstado', $idestado);
            $stmt->bindParam(':idCidade', $idcidade);
            $stmt->execute();
        }

    }
    public function delete($cpf){
        $query = 'DELETE FROM Participantes WHERE CPF = :cpf';

        if($stmt = DB::prepare($query)) {
            $stmt->bindParam(':cpf', $cpf);
            return $stmt->execute();
        }
        else return false;
    }
    public function update($cpf){
        $query = 'UPDATE Participantes SET
                        Nome=:nome,
                        ufRG=:ufrg,
                        RG=:rg,
                        Telefone=:tel,
                        Email=:email,
                        Logradouro=:logradouro,
                        Numero=:numero,
                        Bairro=:bairro,
                        CEP=:cep,
                        Complemento=:complemento,
                        Nascimento=:nasc,
                        Inscrito=:insc,
                        Estado_idEstado=:idEstado,
                        Cidade_idCidade=:idCidade
                  WHERE CPF=:cpf';

        if($stmt = DB::prepare($query)){
            $idestado = $this->Estado_idEstado->getIdEstado();
            $idcidade = $this->Cidade_idCidade->getIdCidade();

            $stmt->bindParam(':nome', $this->Nome);
            $stmt->bindParam(':cpf', $this->CPF);
            $stmt->bindParam(':ufrg', $this->ufRG);
            $stmt->bindParam(':rg', $this->RG);
            $stmt->bindParam(':tel', $this->Telefone);
            $stmt->bindParam(':email', $this->Email);
            $stmt->bindParam(':logradouro', $this->Logradouro);
            $stmt->bindParam(':numero', $this->Numero);
            $stmt->bindParam(':bairro', $this->Bairro);
            $stmt->bindParam(':cep', $this->CEP);
            $stmt->bindParam(':complemento', $this->Complemento);
            $stmt->bindParam(':nasc', $this->Nascimento);
            $stmt->bindParam(':insc', $this->Inscrito);
            $stmt->bindParam(':idEstado', $idestado);
            $stmt->bindParam(':idCidade', $idcidade);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->execute();
        }
    }
    public function find($cpf){
        $query = 'SELECT * FROM Participantes WHERE CPF = :cpf';
        $stmt = DB::prepare($query);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function findCPF($cpf, $ob, $cd){
        if(($ob == 'Nome' || $ob == 'CPF' || $ob == 'TelefoneFixo' || $ob == 'TelefoneCelular') && ($cd == 'ASC' || $cd == 'DESC'))
            $query = 'SELECT * FROM Participantes WHERE Participantes.CPF like :cpf ORDER BY :ob :cd';
        else
            $query = 'SELECT * FROM Participantes WHERE Participantes.CPF like :cpf';
        $stmt = DB::prepare($query);
        $cpf = "%".$cpf."%";
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':ob', $ob);
        $stmt->bindParam(':cd', $cd);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function findNome($nome, $ob, $cd){
        if(($ob == 'Nome' || $ob == 'CPF' || $ob == 'TelefoneFixo' || $ob == 'TelefoneCelular') && ($cd == 'ASC' || $cd == 'DESC'))
            $query = 'SELECT * FROM Participantes WHERE Participantes.Nome like :nome ORDER BY '.$ob.' '.$cd;
        else
            $query = 'SELECT * FROM Participantes WHERE Participantes.Nome like :nome';

        $stmt = DB::prepare($query);
        $nome = "%".$nome."%";
        $stmt->bindParam(':nome', $nome);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->Nome;
    }

    /**
     * @param mixed $Nome
     */
    public function setNome($Nome)
    {
        $this->Nome = $Nome;
    }

    /**
     * @return mixed
     */
    public function getCPF()
    {
        return $this->CPF;
    }

    /**
     * @param mixed $CPF
     */
    public function setCPF($CPF)
    {
        $this->CPF = $CPF;
    }

    /**
     * @return mixed
     */
    public function getRG()
    {
        return $this->RG;
    }

    /**
     * @param mixed $RG
     */
    public function setRG($RG)
    {
        $this->RG = $RG;
    }

    /**
     * @return mixed
     */
    public function getUfRG()
    {
        return $this->ufRG;
    }

    /**
     * @param mixed $ufRG
     */
    public function setUfRG($ufRG)
    {
        $this->ufRG = $ufRG;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->Telefone;
    }

    /**
     * @param mixed $Telefone
     */
    public function setTelefone($Telefone)
    {
        $this->Telefone = $Telefone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    /**
     * @return mixed
     */
    public function getLogradouro()
    {
        return $this->Logradouro;
    }

    /**
     * @param mixed $Logradouro
     */
    public function setLogradouro($Logradouro)
    {
        $this->Logradouro = $Logradouro;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->Numero;
    }

    /**
     * @param mixed $Numero
     */
    public function setNumero($Numero)
    {
        $this->Numero = $Numero;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->Bairro;
    }

    /**
     * @param mixed $Bairro
     */
    public function setBairro($Bairro)
    {
        $this->Bairro = $Bairro;
    }

    /**
     * @return mixed
     */
    public function getCEP()
    {
        return $this->CEP;
    }

    /**
     * @param mixed $CEP
     */
    public function setCEP($CEP)
    {
        $this->CEP = $CEP;
    }

    /**
     * @return mixed
     */
    public function getComplemento()
    {
        return $this->Complemento;
    }

    /**
     * @param mixed $Complemento
     */
    public function setComplemento($Complemento)
    {
        $this->Complemento = $Complemento;
    }

    /**
     * @return mixed
     */
    public function getNascimento()
    {
        return $this->Nascimento;
    }

    /**
     * @param mixed $Nascimento
     */
    public function setNascimento($Nascimento)
    {
        $this->Nascimento = $Nascimento;
    }

    /**
     * @return mixed
     */
    public function getInscrito()
    {
        return $this->Inscrito;
    }

    /**
     * @param mixed $Inscrito
     */
    public function setInscrito($Inscrito)
    {
        $this->Inscrito = $Inscrito;
    }

    /**
     * @return Estado
     */
    public function getEstadoIdEstado()
    {
        return $this->Estado_idEstado;
    }

    /**
     * @param Estado $Estado_idEstado
     */
    public function setEstadoIdEstado($Estado_idEstado)
    {
        $this->Estado_idEstado = $Estado_idEstado;
    }

    /**
     * @return Cidade
     */
    public function getCidadeIdCidade()
    {
        return $this->Cidade_idCidade;
    }

    /**
     * @param Cidade $Cidade_idCidade
     */
    public function setCidadeIdCidade($Cidade_idCidade)
    {
        $this->Cidade_idCidade = $Cidade_idCidade;
    }
}