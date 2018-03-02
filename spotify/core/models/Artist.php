<?php

namespace App\Models;

class Artist extends BaseModel {

	function getBirthdate() {
		return $this->birthdate;
	}
}
