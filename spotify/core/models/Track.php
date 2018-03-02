<?php

namespace App\Models;

class Track extends BaseModel {

	// @todo: improve to return minutes:seconds instead of just seconds
	function getTrackLength() {
		return $this->trackLength;
	}

	function getAlbumId() {
		return $this->album_id;
	}
}
