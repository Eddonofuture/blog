<?php

session_start();

class Conectar{

	public static function con(){

		$con = mysql_connect("localhost","nofuture_bloger","Riraito1221");
		mysql_query("SET NAMES 'utf-8'");
		mysql_select_db("nofuture_bbdd_blog");

		return $con;

	}
}

class blog{

	private $menu_bar = array();
	private $post = array();
	private $post_cat = array();
	private $post_unico = array();
	private $categoria = array();
	private $usuario = array();
	private $afiliado = array();
	private $comentarios = array();
	private $versiones = array();


	public function get_menubar(){

		$sql = ("SELECT * FROM pagina");
		$res = mysql_query($sql,Conectar::con());
		while($reg = mysql_fetch_assoc($res)){

			$this->menu_bar[] = $reg;

		}

		return $this->menu_bar;
	}

	public function get_cantidad_version(){

		$sql = ("SELECT MAX(idindicador) as id FROM indicador");
		$res = mysql_query($sql, Conectar::con());
		if($reg = mysql_fetch_array($res)){

			$version = $reg['id'];

		}
		return $version;

	}

	public function get_version($version){

		$sql = ("SELECT * FROM indicador WHERE idindicador = $version");
		$res = mysql_query($sql, Conectar::con());
		if($reg = mysql_fetch_array($res)){

			$version = $reg;

		}

		return $version;

	}

	public function get_versiones(){

		$sql = ("SELECT * FROM indicador");
		$res = mysql_query($sql, Conectar::con());
		while($reg = mysql_fetch_assoc($res)){

			$this->versiones[] = $reg;

		}

		return $this->versiones;

	}

	public function get_post($inicio){

		$sql = ("SELECT * FROM post ORDER BY idpost DESC LIMIT $inicio,5");
		$res = mysql_query($sql, Conectar::con());
		while($reg = mysql_fetch_assoc($res)){

			$this->post[] = $reg;

		}

		return $this->post;

	}

	public function get_post_unico($id){

		$sql = ("SELECT * FROM post WHERE idpost = $id ");
		$res = mysql_query($sql, Conectar::con());
		while($reg = mysql_fetch_assoc($res)){

			$this->post_unico[] = $reg;

		}

		return $this->post_unico;

	}

	public function get_post_cat($inicio, $categoria){

		$sql = ("SELECT * FROM post WHERE categoria = '$categoria' ORDER BY idpost DESC LIMIT $inicio,10");
		$res = mysql_query($sql, Conectar::con());
		while($reg = mysql_fetch_assoc($res)){

			$this->post_cat[] = $reg;

		}

		return $this->post_cat;

	}

	public function get_total_post(){

		$sql = ("SELECT MAX(idpost) as id FROM post");
		$res = mysql_query($sql, Conectar::con());
		if($reg = mysql_fetch_array($res)){

			$cantidad_post = $reg['id'];

		}
		return $cantidad_post;

	}

	public function get_total_comentario(){

		$sql = ("SELECT MAX(idcomentario) as id FROM comentario");
		$res = mysql_query($sql, Conectar::con());
		if($reg = mysql_fetch_array($res)){

			$cantidad_comentario = $reg['id'];

		}
		return $cantidad_comentario;

	}

	public function get_cantidad_comentarios($idpost){

		$sql = ("SELECT COUNT(*) AS cuantos FROM comentario WHERE idpost = $idpost");
		$res = mysql_query($sql,Conectar::con());
		if($reg = mysql_fetch_array($res)){

			$total = $reg["cuantos"];

		}

		return $total;

	}

	public function get_categorias(){

		$sql = ("SELECT * FROM categoria");
		$res = mysql_query($sql, Conectar::con());
		while($reg = mysql_fetch_assoc($res)){

			$this->categoria[] = $reg;

		}

		return $this->categoria;

	}

	public function get_usuario($idusuario){

		$sql = ("SELECT * FROM usuario WHERE idusuario = '$idusuario'");
		$res = mysql_query($sql, Conectar::con());
		while($reg = mysql_fetch_assoc($res)){

			$this->usuario[] = $reg;

		}

		return $this->usuario;

	}

	public function get_afiliados(){

		$sql = ("SELECT * FROM afiliado");
		$res = mysql_query($sql, Conectar::con());
		while($reg = mysql_fetch_assoc($res)){

			$this->afiliado[] = $reg;

		}

		return $this->afiliado;

	}

	public function get_comentario($id){

		$sql = ("SELECT * FROM comentario WHERE idpost = $id");
		$res = mysql_query($sql, Conectar::con());
		while($reg = mysql_fetch_assoc($res)){

			$this->afiliado[] = $reg;

		}

		return $this->afiliado;

	}

	public function set_comentario($nombre,$email,$sitio,$comentario,$id){

		$sql = ("INSERT INTO comentario ( idpost, nombre,fecha,correo,sitio,comentario) VALUES ('$id','$nombre',now(),'$email','$sitio','$comentario')");
		$res = mysql_query($sql, Conectar::con());
	}
}
?>