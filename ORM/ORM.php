<?php
class ORM{
    protected $id;
    protected $table;
    protected $db;
    public function __construct($id,$table,PDO $conn ) 
    {
        $this->id=$id;
        $this->table=$table;
        $this->db=$conn;
    }
    function getAll()
    {
        $sql="select * from {$this->table}";
        $stm=$this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    function getById($id)
    {
        $sql="select * from {$this->table} where id={$id}";
        $stm=$this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    function deleteById($id)
    {
      $succes=false;
      $sql="delete from {$this->table} where id={$id}";
        $stm=$this->db->prepare($sql);
        $stm->execute();
       if ($stm->rowCount()>0) 
       {
        $succes=true;
       }
       return $succes;
    }
   
    function updateById($id,$data)
    {
        $sql="UPDATE {$this->table} SET ";
        foreach($data as $key=>$value){
            $sql.="{$key} = :{$key}, ";
        }
        echo "<br>";
        echo $sql;
        echo "<br>";
        $fin=strrpos("$sql",",");
        $sql=substr($sql,0,$fin);
        $sql.=" WHERE id = :id";
        echo "<br>";
        echo $sql;
        echo "<br>";

        $data['id']=$id;
        $stm=$this->db->prepare($sql);

        $succes=false;
        try{
            $succes=true;
            $succes=$stm->execute($data);
        }
        catch(PDOException $ex){
            echo $ex->getMessage();
        }
        return $succes;
        
    }

    function insert($data)
    {
       $sql="insert into $this->table (";
       foreach($data as $key=>$value){
        $sql.=" {$key},";
       }
       $fin=strrpos("$sql",",");
       $sql=substr($sql,0,$fin);
       echo '<br>'.$sql;
       $sql.=") values (";
       foreach ($data as $key=>$value){
        $sql.=" :$key ,";
       }
       echo '<br>'.$sql;
       $fin=strrpos("$sql",",");
       $sql=substr($sql,0,$fin);
       $sql.=")";
       $stm=$this->db->prepare($sql);
       $success=false;
       echo '<br>'.$sql;
       echo '<br>'.$success;
       try{
        $stm->execute($data);
        $success=true;
        }catch(PDOException $e)
    {
        echo '<br>'.$e->getMessage();
    }
    return $success;

    }

}
?>