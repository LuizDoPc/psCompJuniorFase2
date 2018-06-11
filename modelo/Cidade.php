<?php
require_once 'Crud.php';

class Cidade extends Crud{

    protected $table = 'Cidade';

    private $idCidade;
    private $Nome;
    private $Estado_idEstado;

    /**
     * Cidade constructor.
     */
    public function __construct(...$id){
        if(count($id)==1){
            $res = $this->find($id[0]);
            $this->idCidade = $res->idCidade;
            $this->Nome = $res->Nome;
            $this->Estado_idEstado = new Estado($res->Estado_idEstado);
        }
    }


    public function find($id){
        $query = 'SELECT * FROM Cidade WHERE idCidade= :id';
        $stmt = DB::prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function findEst($idEst){
        $query = 'SELECT * FROM Cidade WHERE Estado_idEstado= :idEst;';
        $stmt = DB::prepare($query);
        $stmt->bindParam(':idEst', $idEst);
        $stmt->execute();
        return $stmt->fetchAll();
    }



    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
    public function update($id)
    {
        // TODO: Implement update() method.
    }
    public function insert()
    {
        // TODO: Implement insert() method.
    }



    /**
     * @return mixed
     */
    public function getIdCidade()
    {
        return $this->idCidade;
    }

    /**
     * @param mixed $idCidade
     */
    public function setIdCidade($idCidade)
    {
        $this->idCidade = $idCidade;
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
    public function getEstadoIdEstado()
    {
        return $this->Estado_idEstado;
    }

    /**
     * @param mixed $Estado_idEstado
     */
    public function setEstadoIdEstado($Estado_idEstado)
    {
        $this->Estado_idEstado = $Estado_idEstado;
    }



}