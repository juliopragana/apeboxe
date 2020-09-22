<?php
namespace Sistema\Model;

date_default_timezone_set('America/Cayenne');

use \Sistema\DB\Sql;
use \Sistema\Model;    


class User extends Model{

    const SESSION = "User";
    const ERROR = "UserError";
    const SUCCESS = "UserSucesss";
    const SUCCESSALT = "UserAlt";
     


    ########################### LOGIN ############################

#################### LOGIN

public static function login($login, $senha){

    $sql = new Sql();

    $results = $sql->select("SELECT * FROM tb_usuario WHERE usuario = :LOGIN", array(
        ":LOGIN"=>$login
    ));

    if (count($results) === 0){
        
        throw new \Exception("Usuário inválido");
        
    }

    $data = $results[0];

    if(password_verify($senha, $data["senha"]) === true){
    
        $user = new User();

        $user->setData($data);

        $_SESSION[User::SESSION] = $user->getValues();

        return $user;

    } else {
        throw new \Exception("Senha inválida");
            
    }

}

#################### CRUD ######################################

################## LISTAR

public static function listAll(){
    
    $sql = new Sql();

    return $sql->select("SELECT * FROM tb_usuario ORDER BY usuario ASC");
}

################ SALVAR 

public function save(){
    $sql = new Sql();

    $results = $sql->select("CALL sp_usuario_adm_save(:nome, :usuario, :email, :senha, :image, :status_usuario)", array(
            ":nome"=>$this->getnome(),
            ":usuario"=>$this->getusuario(),
            ":email"=>$this->getemail(),
            ":senha"=>$this->getsenha(),
            ":image"=>$this->getimage(),
            ":status_usuario"=>$this->getstatus_usuario()
           
    ));
    
    if($results === 0) return $error = User::setError();

    $this->setData($results[0]);
       
}
######################### SESSÃO ########################

#################### VERIFICA SE O USUÁRIO ESTÁ LOGADO

public static function verificaLogin()
	{
		if(

			!isset($_SESSION[User::SESSION])
			|| 
			!$_SESSION[User::SESSION]
			|| 
			!(int)$_SESSION[User::SESSION]["id_usuario"] > 0
			
		){
			header("Location: /painel-curso/login");
			exit;
		} 
	}


#################### VERIFICA SE EXISTE SESSÃO

public static function verificaSessao(){
    if(isset($_SESSION[User::SESSION])){
        header("Location: /painel-curso-curso");
        exit;
    }
}



#################### FAZ LOGOF

public static function logout(){
    $_SESSION[User::SESSION] = NULL;
}


public static function checarUsuario($usuario){
        
    $sql = new Sql();
    $results = $sql->select("SELECT * FROM tb_usuario WHERE usuario = :usuario", array(
        ":usuario"=>$usuario
    ));

    if($results != NULL) {
        echo 'false';
     }else{
        echo 'true';
    } 

}




######################################### ERROS ###################################################

public static function setError($msg){
       
    $_SESSION[User::ERROR] = $msg;
}

public static function getError(){
    
    $msg = (isset($_SESSION[User::ERROR]) && $_SESSION[User::ERROR]) ? $_SESSION[User::ERROR] : '';

    user::clearError();

    return $msg;

}

public static function clearError(){
    
    $_SESSION[User::ERROR] = NULL;
}

######################################## SUCCESS ####################################################
public static function setSuccess($msg = array()){
   
    $_SESSION[User::SUCCESS] = $msg;
}

public static function getSuccess(){
    
    $msg = (isset($_SESSION[User::SUCCESS]) && $_SESSION[User::SUCCESS]) ? $_SESSION[User::SUCCESS] : '';

    user::clearError();

    return $msg;

}

public static function clearSuccess(){
    
    $_SESSION[User::SUCCESS] = NULL;
}

}





?>