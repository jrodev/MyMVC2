<?php

class IndexController {
    
    private $mysql;
            
    function __construct($a,$c)
    {
        $_SESSION['session'] = key_exists('session', $_SESSION)?
                               $_SESSION['session']:FALSE;

        if(!$_SESSION['session'] && !($a=='index' && $c=='index')){
            header("Location: ".BASE_URL."?ctrll=index&acti=index");
        }
        $this->mysql = new MySql();
    }
    
    function asistlist(){
        if(key_exists('del', $_GET)){
            $this->mysql->delRow('asistente',(int)$_GET['del']);
        }
        $rows = $this->mysql->getRows('asistente');
        return array('rows'=>$rows);
    }
 
    function userupd(){
        $rows = $this->mysql->getRows('usuario',array('u_id',$_GET['edit']));
        return array('row'=>$rows[0]);
    }
    
    function userreg(){

        $params = array();
        if(isPost()){ // es Post
            $empty = FALSE;
            foreach ($_POST as $val){
                if(trim($val)==''){
                    $params['rpt'] = 'Todos los campos son obligatorios';
                    $empty=TRUE; break;
                }
            }
            
            if($empty){ return $params; }
            else{
                $id = $this->mysql->updRow('usuario', $_POST);
                if($id){ $params['rpt']='Usuario Actualizado'; }
                else $params['rpt']='no se pudo Actualizar!!';
            }            
        }
        return $params;
    }
    
    function userlist(){
        if(key_exists('del', $_GET)){
            $this->mysql->delRow('usuario',(int)$_GET['del']);
        }
        $rows = $this->mysql->getRows('usuario');
        return array('rows'=>$rows);
    }
            
    function logout()
    {
        $_SESSION['session'] = FALSE;
        session_destroy();
        header("Location: ".BASE_URL."?ctrll=index&a=index");
    }
    
    
    function asistreg(){

        $params = array();
        if(isPost()){ // es Post
            $empty = FALSE;
            foreach ($_POST as $val){
                if(trim($val)==''){
                    $params['rpt'] = 'Todos los campos son obligatorios';
                    $empty=TRUE; break;
                }
            }
            if($empty){ return $params; }
            else{
                $id = $this->mysql->insRow('asistente', $_POST);
                if($id){ $params['rpt']='Asistencia registrado'; }
                else $params['rpt']='no se pudo registrar!!';
            }            
        }
        return $params;
    }
    
    function index(){
        if (key_exists('session', $_SESSION) && $_SESSION['session']){
            header("Location: " . BASE_URL . "?ctrll=index&acti=userlist");
        } else {
            if (isPost()){
                $whr = array("u_usuario='" . $_POST['u_usuario'] . "'", "u_clave='" . $_POST['u_clave'] . "'");
                $usu = $this->mysql->getRows('usuario', $whr);

                if (count($usu)){
                    $usu = $usu[0];
                    $_SESSION['session'] = TRUE;
                    $_SESSION['usu'] = $usu['u_usuario'];
                    header("Location: " . BASE_URL . "?ctrll=index&acti=userlist");
                }else{
                    $_SESSION['OK'] = FALSE;
                    return array('rpt' => 'Usuario Erroneo!!');
                };
            }
        }
        return array();
    }

}
