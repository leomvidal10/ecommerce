<?php namespace App\Controllers;

use App\Models\usuariosModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function verify() {
		$db = \Config\Database::connect();
	    $query = $db->query('SELECT * FROM user');
		$row = $query->getRowArray();
	
	    session_start();

	    if(isset($_POST['btn-entrar'])) {
            $error = array();
		    $login = $_POST['email'];
		    $password = $_POST['password'];
			$passwordBd = $password;
		    $sql = "SELECT * FROM user where email = '$login' AND senha = '$passwordBd'";
			$resultado = $db->simpleQuery($sql);

		    if(empty($login) or empty($password)) {
                $error['erros'] = "<li id='erro'>*Preencha todos os campos!</li>";
				return view('account', $error);
			}else{
			    if(mysqli_num_rows($resultado) == 1) {
					$pesquisa = $db->query("SELECT uuid, nome, estado, cidade, rua, numero, cep, telefone, email FROM user WHERE email = '$login'");
					$rowss = $pesquisa->getRowArray();
					$nome = $rowss['nome'];
					$estado = $rowss['estado'];
					$cidade = $rowss['cidade'];
					$rua = $rowss['rua'];
					$numero = $rowss['numero'];
					$cep = $rowss['cep'];
					$telefone = $rowss['telefone'];
					$email = $rowss['email'];
					$id = $rowss['uuid'];

					$_SESSION['logado'] = true;
					$_SESSION["nome_usuario"] = $nome;
					$_SESSION["estado"] = $estado;
					$_SESSION["cidade"] = $cidade;
					$_SESSION["rua"] = $rua;
					$_SESSION["numero"] = $numero;
					$_SESSION["cep"] = $cep;
					$_SESSION["telefone"] = $telefone;
					$_SESSION["email"] = $email;
					$_SESSION["uuid"] = $id;
                    return redirect()->to(base_url()."/perfil");
			    }else{
					$error['erros'] = "<li id='erro'>*Usuário ou senha incorreto!</li>";
                    return view('account', $error);
			    }
		    }
	    }
	}
	
	public function logout() {
		session_start();
		session_unset();
		session_destroy();
		return redirect()->to(base_url()."/account");
	}
}