<?php

class ChatUser extends ChatBase{
	
	protected $name = '', $gravatar = '', $imagen_user = '';
	
	public function save(){
		
		DB::query("
			INSERT INTO webchat_users (name, gravatar)
			VALUES (
				'".DB::esc($this->name)."',
				'".DB::esc($this->gravatar)."'
				'".DB::esc($this->imagen_user)."'
		)");
		
		return DB::getMySQLiObject();
	}
	
	public function update(){
		DB::query("
			INSERT INTO webchat_users (name, gravatar)
			VALUES (
				'".DB::esc($this->name)."',
				'".DB::esc($this->gravatar)."'
				'".DB::esc($this->imagen_user)."'
			) ON DUPLICATE KEY UPDATE last_activity = NOW()");
	}
}

?>