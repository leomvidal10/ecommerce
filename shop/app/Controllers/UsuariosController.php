<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\usuariosModel;

class UsuariosController extends Controller
{
    public function inserir() {
        $model = new usuariosModel();

        $data = [
            'nome' => $this->request->getPost('nome'),
            'email'  => $this->request->getPost('email'),
            'senha'  => $this->request->getPost('password'),
            'estado'  => $this->request->getPost('estado'),
            'cidade'  => $this->request->getPost('cidade'),
            'rua'  => $this->request->getPost('rua'),
            'numero'  => $this->request->getPost('numero'),
            'cep'  => $this->request->getPost('cep'),
            'telefone'  => $this->request->getPost('telefone'),
        ];

        if(isset($_POST['btn-entrar'])) {
            $error = array();
            $pass = $_POST['password'];
            $conpass = $_POST['confirmpassword'];

            if($pass == $conpass) {
                $model->save($data);
                $sucess = array();
                $sucess['sucesso'] = "<li id='sucesso'>Conta criado com sucesso!</li>";
                return view("account", $sucess);
            }else{
                $error['erros'] = "<li id='erro'>*As senhas não coincidem!</li>";
				return view('criarConta', $error);
            }
        }
    }

    public function editar($id) {
        $db = \Config\Database::connect();

        $sucess = array();

        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $cep = $_POST['cep'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $nome = $_POST['nome'];

        $data = [
            'estado' => $estado,
            'cidade' => $cidade,
            'rua' => $rua,
            'numero' => $numero,
            'cep' => $cep,
            'telefone' => $telefone,
            'email' => $email,
            'nome' => $nome
        ];

        $db->table('user')->where('uuid', $id)->update($data);
        session_start();
		session_unset();
        session_destroy();
        $sucess['sucesso'] = "<li id='sucesso'>Dados Alterados! Faça login novamente.</li>";
        return view('account', $sucess);
    }
}