<?php 
namespace Auth\Database;
use Database\Database;

class Auth {

	private $db;

	public function __construct(Database $db) {
		$this->db = $db;
	}

	public function isConncetd($user, $password) {
		if ( $this->userExist($user, $password) ) {
			if (isset($_SESSION['user'])) {
				if (sha1($password) == $_SESSION['user']) return true;
				return false;
			} else {
				return false;				
			}
		} else {
			return false;
		}
	}

	private function userExist($user, $password) {
		$data = array(
			"fields" => "name",
			"critereField" => "name",
			"critereValue" => $user,
			"table" => "user",
		);
		$user = $this->db->queryWhere($data);
		if (count($user) >= 1) {
			if ( $user[0]->password == sha1($password) ) return true;
			return false;
		} else {
			return false;
		}
	}	

}

?>