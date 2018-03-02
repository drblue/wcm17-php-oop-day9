<?php

namespace App\Models;

class Album extends BaseModel {

	function getReleaseYear() {
		return $this->releaseyear;
	}

	function getArtistId() {
		return $this->artist_id;
	}
}
