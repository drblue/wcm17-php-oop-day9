<?php

require("core/init.php");

use App\Models\Account;
use App\Models\User;

$users = User::get();

foreach ($users as $user) {
	echo "<h1>{$user->name}, {$user->email}</h1>";

	$accounts = Account::where('user_id', $user->id)->get();
	foreach ($accounts as $account) {
		echo "Account Number: {$account->accountNumber}, Balance: {$account->balance}<br>";
	}

}
