<?php

declare(strict_types=1);

namespace app\Model;

class ContactManager extends DatabaseManager {

	const
			TABLE_NAME = "contact",
			COLUMN_ID = "id";



	public function getContact(){
		return $this->database->table(self::TABLE_NAME)->fetch();
	}

	public function getContactById(int $id, $columns = null){
		return $this->database->table(self::TABLE_NAME)
				->select($columns ? $columns : "*")
				->where(self::COLUMN_ID, $id)
				->fetch();
	}


	public function saveContact(array $contact){
		$this->database->table(self::TABLE_NAME)->where(self::COLUMN_ID, $contact[self::COLUMN_ID])->update($contact);
	}

}
