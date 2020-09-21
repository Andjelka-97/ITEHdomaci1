<?php

class Korisnik {

	private $db;

	public function __construct($db) {
		$this->db = $db;
	}
	

	public function unesiKorisnika() {
		if(!isset($_POST['username']) || 
		!isset($_POST['email']) || !isset($_POST['password'])){
			return false;

		}
		if( $_POST['username']=='' || $_POST['email']=='' || $_POST['password']=='' ){
			return false;echo "Unesite sve";


		}

         

			$data = Array (
				
					"username" => trim($_POST['username']),
					"email" => trim($_POST['email']),
					"password" => trim($_POST['password']),
					
			);
			
			
		

			$sacuvano = $this->db->insert('users', $data);

			if($sacuvano) {
					return true;

			}
			else {
				    return false;
			}



	}


}

?>
