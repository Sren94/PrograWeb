<?php
include_once '../ORM/ORM.php';
class Usuario extends ORM{
    function __construct(PDO $connection){
        parent:: __construct('id','usuario',$connection);

    }
    function validaLogin($data)
    {
        $sql="SELECT * FROM {$this->table} WHERE ".$data;
        $stm=$this->db->prepare($sql);
        try{
            $stm->execute();

        }catch(PDOException $ex){
            echo $ex->getMessage();

        }
        $var=$stm->fetch();
        return $var;

    }
}
?>