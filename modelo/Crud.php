<?php
require_once 'DB.php';

abstract class Crud extends DB {

    protected $table;

    abstract public function insert();
    abstract public function update($id);
    abstract public function find($id);
    abstract public function delete($id);

    public function findAll(){
        $sql  = "SELECT * FROM $this->table";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}