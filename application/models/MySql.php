<?php

class MySql {

    function __construct()
    {
        $link = mysql_connect(HOST,USER,PASS);
        if($link) mysql_select_db(SCHM);
        return $link;
        
        if(!$link) {
            echo "<br>Error de conexion"; exit;
        }else { echo "<br>Conectado!"; }
        mysql_query("SET NAMES 'utf8'");
    }
    
    public function delRow($tbl='usuario', $id=0){
        $whr = ($tbl=='usuario')?"u_id=$id":"a_id=$id";
        $sql = "DELETE FROM $tbl WHERE $whr";
        return mysql_query($sql);
    }
    

    public function getRows($tbl='usuario', $where=FALSE)
    {
        $whr = $where?'WHERE '.implode(' AND ', $where):'';
        $sql = "SELECT * FROM $tbl $whr";
        $resultado = mysql_query($sql);
        $rows = array();
        while($r = mysql_fetch_array($resultado)) $rows[] = $r;
        return $rows;
    }
    
    public function insRow($tbl, $inps)
    {
        if(!$tbl || !is_array($inps)){        
            echo '<br>Ingese tabla y inputs'; exit;
        }
        $f=array(); $v=array();
        foreach ($inps as $i=>$r){
            $f[]=$i; $v[]="'$r'";
        }
        
        $sql = "INSERT INTO $tbl (".implode(',',$f).") VALUES (".implode(',',$v).")";

        if(!mysql_query($sql)){ echo "<br>Error mysql:".mysql_error(); exit; }
        return mysql_insert_id();
    }
    
    public function updRow($tbl, $inps){
        if(!$tbl || !is_array($inps)){        
            echo '<br>Ingese tabla y inputs'; exit;
        }
        $fv=array(); $whr=' WHERE 1=0';
        foreach ($inps as $i=>$r){
            if(strpos($i,'_id')===FALSE)$fv[]="$i='$r'";
            else $whr=" WHERE $i=$r";
        }
        
        $sql = "UPDATE $tbl SET ".implode(',',$fv)." $whr";
        var_dump($sql);
        if(!mysql_query($sql)){ echo "<br>Error mysql:".mysql_error(); exit; }
        return TRUE;
    }


}
