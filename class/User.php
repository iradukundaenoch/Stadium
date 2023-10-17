<?php
require_once('../interface/iUser.php');
require_once('../database/Database.php');
class User extends Database implements iUser
{

	public function loginUser($un, $pwd)
	{
		$sql = "SELECT *
				FROM user 
				WHERE user_account = ?
				AND user_password = ?;
		";
		return $this->getRow($sql, [$un, $pwd]);
	} //end loginUser

	public function register($un, $pwd)
	{
		$sql = "INSERT INTO user (user_account, user_password) VALUES (?, ?)";
		return $this->insertRow($sql, [$un, $pwd]);
	}
} //end class User

$user = new User();//instance
/* End of file User.php */
/* Location: .//D/xampp/htdocs/medallion/class/User.php */