<?php


class Brend {

	private $db;

	public function __construct($db) {
		$this->db = $db;
	}
	
    public function izmeniBrend($id) {


		$data = Array (
			   
				trim($_POST['name']),
				trim($_POST['opis']),
				trim($_POST['zemlja']),
				trim($id)

		);
		$sacuvano = $this->db->rawQuery("Update brend set name = ?, opis= ?, zemlja= ?  where id=?",$data);

			return true;

	}
}
?>
