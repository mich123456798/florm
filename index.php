<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);

include("florm.php");

class Users extends Model{
	protected $name = 'users';
	protected $rec_name = 'name';
	
	public function fields(){
		echo $this->get_model_name();
	}
	
}
new Users();

?>
