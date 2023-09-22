<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=minforma_cms","root","root");
		return $link;

	}

}