<?php
require_once __DIR__ . '/DAO.php';

class UserDAO extends DAO {

	public function selectAll(){
		$sql = "SELECT * FROM `con_users`";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function selectById($id){
		$sql = "SELECT * FROM `con_users` WHERE `id` = :id";
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindValue(':id', $id);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function selectByEmail($email){
		$sql = "SELECT * FROM `sdam_users` WHERE `email` = :email";
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindValue(':email', $email);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function insert($data){
			$sql = "INSERT INTO `sdam_users` (`username` , `email`, `telephone`, `points`, `password`, `role`) VALUES (:username, :email, :telephone, :points, :password, :role)";
			$stmt = $this->pdo->prepare($sql);
			$stmt->bindValue(':username', $data['username']);
			$stmt->bindValue(':email', $data['email']);
      $stmt->bindValue(':telephone', $data['telefoon']);
      $stmt->bindValue(':points', $data['punten']);
      $stmt->bindValue(':password', $data['wachtwoord']);
      $stmt->bindValue(':role', 0);

			return $stmt->execute();
	}


	public function getValidationErrors($data) {
		$errors = array();
		if(empty($data['email'])) {
			$errors['email'] = 'Please enter a email';
		}
		if(empty($data['password'])) {
			$errors['password'] = 'Please enter a password';
		}

		return $errors;
	}

}
