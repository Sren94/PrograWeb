<?php
include_once 'ORM.php';
class Noticia extends ORM{
    function __construct(PDO $connection){
        parent:: __construct('id','noticia',$connection);
    }
}
?>