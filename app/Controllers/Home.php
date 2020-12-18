<?php namespace App\Controllers;
	use App\Models\categoriasModel;
use App\Models\contactosModel;
use App\Models\Usuarios;
class Home extends BaseController
{
	public function index()
	{
		$mensaje = session('mensaje');
		return view('login', ["mensaje" => $mensaje]);
	}

	public function inicio(){
		return view('inicio');
	}

	public function login(){
		$usuario = $this->request->getPOST('usuario');
		$password = $this->request->getPOST('password');
		$Usuario = new Usuarios();

		$datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);

		if (count($datosUsuario) > 0 && password_verify($password, $datosUsuario[0]['password'])) {

			$data = [
					    "usuario" => $datosUsuario[0]['usuario'],
					    "type" => $datosUsuario[0]['type']
			];     

			$session = session();
			$session->set($data);

			return redirect()->to(base_url('/inicio'))->with('mensaje', '1');

		} else {
			return redirect()->to(base_url('/'))->with('mensaje', '0');
		}
	}
	public function salir(){
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/'));
	}

	

	public function crear(){
		$datos = [
			"categoria" => $_POST['categoria'],
			"descripcion" => $_POST['descripcion']
			
		];
		$Crud = new categoriasModel();
		$respuesta = $Crud->insertar($datos);

		if ($respuesta > 0){
			return redirect()->to(base_url().'/categoria')->with('mensaje','1');
		}else{
			return redirect()->to(base_url().'/categoria')->with('mensaje','0');
		}

	}

	public function categoria(){
		$Crud = new categoriasModel();
		$datos = $Crud->listarCategoria();

		$mensaje = session('mensaje');

		$data = [
					"datos" => $datos,
					"mensaje" => $mensaje
				];
		return view('categoria', $data);
		
	}
	public function actualizar(){
		$datos = [
			"categoria" => $_POST['categoria'],
			"descripcion" => $_POST['descripcion']
			
		];
		$idCategoria =  $_POST['idCategoria'];

		$Crud = new categoriasModel();

		$respuesta = $Crud->actualizar($datos, $idCategoria);

		if ($respuesta){
			return redirect()->to(base_url().'/categoria')->with('mensaje','2');
		}else{
			return redirect()->to(base_url().'/categoria')->with('mensaje','3');
		}
	}
	public function obtenerCategoria($idCategoria){
		$data = ["id_categoria" => $idCategoria];
		$Crud = new categoriasModel();
		$respuesta = $Crud->obtenerCategoria($data);

		$datos = ["datos"=>$respuesta];

		return view('actualizarcat', $datos);
	}
public function eliminar($idCategoria){
		$Crud = new categoriasModel();
		$data = ["id_categoria" => $idCategoria];

		$respuesta = $Crud->eliminar($data);

		if ($respuesta){
			return redirect()->to(base_url().'/categoria')->with('mensaje','4');
		}else{
			return redirect()->to(base_url().'/categoria')->with('mensaje','5');
		}
	}

	public function contactos(){
		$Crud = new contactosModel();
		$datos = $Crud->listarContactos();

		$mensaje = session('mensaje');

		$data = [
			"datos" => $datos,
			"mensaje" => $mensaje
		];
		return view('contactos', $data);
	}
	public function crearcont(){
		$datos = [
			"nombre" => $_POST['nombre'],
			"paterno" => $_POST['paterno'],
			"materno" => $_POST['materno'], 
			"telefono" => $_POST['telefono'],
			"email" => $_POST['email'],
			"id_categoria" => $_POST['id_categoria']
			
		];
		$Crud = new contactosModel();
		$respuesta = $Crud->insertarContacto($datos);

		if ($respuesta > 0){
			return redirect()->to(base_url().'/contactos')->with('mensaje','1');
		}else{
			return redirect()->to(base_url().'/contactos')->with('mensaje','0');
		}

	}

	public function actualizarcont(){
		$datos = [
			"nombre" => $_POST['nombre'],
			"paterno" => $_POST['paterno'],
			"materno" => $_POST['materno'],
			"telefono" => $_POST['telefono'],
			"email" => $_POST['email'],
			"id_categoria" => $_POST['id_categoria']
			
		];
		$idContacto =  $_POST['idContacto'];

		$Crud = new contactosModel();

		$respuesta = $Crud->actualizarContacto($datos, $idContacto);

		if ($respuesta){
			return redirect()->to(base_url().'/contactos')->with('mensaje','2');
		}else{
			return redirect()->to(base_url().'/contactos')->with('mensaje','3');
		}
	}

	public function obtenerContacto($idContacto){
		$data = ["id_contacto" => $idContacto];
		$Crud = new contactosModel();
		$respuesta = $Crud->obtenerContactos($data);

		$datos = ["datos"=>$respuesta];

		return view('actualizarcont', $datos);
	}

	public function eliminarContacto($idContacto){
		$Crud = new contactosModel();
		$data = ["id_contacto" => $idContacto];

		$respuesta = $Crud->eliminarContacto($data);

		if ($respuesta){
			return redirect()->to(base_url().'/contactos')->with('mensaje','4');
		}else{
			return redirect()->to(base_url().'/contactos')->with('mensaje','5');
		}
	}

}
