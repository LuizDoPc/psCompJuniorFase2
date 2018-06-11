<?php
require_once 'Crud.php';

class Estado extends Crud{

    protected $table = 'Estado';
    private $idEstado;
    private $Nome;
    private $UF;

    /**
     * Estado constructor.
     * @param $Nome
     */
    public function __construct(...$id){
        if(count($id) == 1) {
            $res = $this->find($id[0]);
            $this->idEstado = $res->idEstado;
            $this->Nome = $res->Nome;
            $this->UF = $res->UF;
        }
    }



    public function find($id){
        $query = 'SELECT * FROM Estado WHERE idEstado= :id';
        $stmt = DB::prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();

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
    public function getIdEstado()
    {
        return $this->idEstado;
    }

    /**
     * @param mixed $idEstado
     */
    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;
    }

    /**
     * @return mixed
     */
    public function getNome(){
        return $this->Nome;
    }

    /**
     * @param mixed $Nome
     */
    public function setNome($Nome){
        $this->Nome = $Nome;
    }

    /**
     * @return mixed
     */
    public function getUF(){
        return $this->UF;
    }

    /**
     * @param mixed $UF
     */
    public function setUF($UF){
        $this->UF = $UF;
    }
}