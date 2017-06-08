<?php 
namespace Database;
use \PDO;

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
			$pdo = new PDO('mysql:host='.$host.';dbname='.$dbname,$user,$pasword);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->pdo = $pdo;
		}
		return $this->pdo;
		
	}

	public function connceter() {
		return $this->getPdo();
	}

	/*
	 * Requete avec critere
	 * param $data tableau ['fields', 'critere', 'table']
	 * return objet;
	 */
	public function queryWhere(array $data) {
		$fields = '';
		if ( count($data['fields']) > 1 ) {
			foreach ($data['fields'] as $key) {
				$fields .= $key . ',';
			}
		} else {
			$fields = $data['fields'];
		}
		$critereField = $data['critereField'];
		$critereValue = $data['critereValue'];
		$table = $data['table'];

		$req = $this->getPdo()->prepare('SELECT * FROM '.$table.' WHERE '.$critereField.' = ? ');
		$req->setFetchMode(PDO::FETCH_OBJ);
		$req->execute(array($critereValue));
		$data = $req->fetchAll();
		return $data;
	}

}

?>