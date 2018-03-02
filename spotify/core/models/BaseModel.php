<?php

namespace App\Models;

abstract class BaseModel extends \Illuminate\Database\Eloquent\Model {

	function getId() {
		return $this->id;
	}

	function getName() {
		return $this->name;
	}
}
