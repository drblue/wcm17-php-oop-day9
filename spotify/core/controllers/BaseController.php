<?php

namespace App\Controllers;

use \PDO;

abstract class BaseController {
	protected $dbh;
	protected $model;
	protected $table;

	function __construct($dbh) {
		$this->dbh = $dbh;
	}

	function getAll() {
		// SELECT * FROM $this->table
		$query = $this->dbh->prepare("SELECT * FROM {$this->table}");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_CLASS, $this->model);
	}

	function getAllWhere($column, $val) {
		// SELECT * FROM $this->table WHERE $column = $val
		$query = $this->dbh->prepare("SELECT * FROM {$this->table} WHERE {$column}=:val");
		$query->execute(['val' => $val]);
		return $query->fetchAll(PDO::FETCH_CLASS, $this->model);
	}
}
