<?php

namespace App\Controllers;

use \PDO;

class AlbumController extends BaseController {
	protected $model = "App\Models\Album";
	protected $table = "albums";
}
