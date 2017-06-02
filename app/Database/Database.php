<?php 
namespace Database;

class Database {

	private $pdo;
	private $config = [];

	public function __construct($config) {
		$this->config = $config;
	}

	public function getPdo() {
		$host = $this->config['host'];
		$dbname = $this->config['dbname'];
		$user = $this->config['user'];
		$pasword = $this->config['pasword'];
		if ($this->pdo == null) {
			$pdo = new \PDO('mysql:host='.$host.';dbname='.$dbname,$user,$pasword);
			$this->pdo = $pdo;
		}
		return $this->pdo;
		
	}

	public function connceter() {
		return $this->getPdo();
	}

}

?>