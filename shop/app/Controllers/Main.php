<?php namespace App\Controllers;

use App\Models\ProdutosModel;
use App\Models\usuariosModel;

class Main extends BaseController
{
	public function index()
	{
		
		echo view('menu');
		return view('index');
	}

	public function account()
	{
		session_start();
    	if($_SESSION['logado'] == false) {
			echo view('menu');
			return view('account');
		}else{
			echo view('menu');
			return view('perfil');
		}
	}

	public function criarConta()
	{
		echo view('menu');
		return view('criarConta');
	}

	public function editarPerfil()
	{
		session_start();
    	if($_SESSION['logado'] == false) {
			echo view('menu');
			return view('account');
		}else{
			echo view('menu');
			return view('editarPerfil');
		}
	}

	public function menu() {
		return view('pagar');
	}
}

