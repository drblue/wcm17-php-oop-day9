<?php

require("core/init.php");
require("templates/header.php");

use App\Models\Album;
use App\Models\Artist;
use App\Models\Track;

$artists = Artist::get();

?>
<h1>Artists</h1>

<?php
	foreach ($artists as $artist) {
		echo "<h2>{$artist->getName()}</h2>";
		$albums = Album::where('artist_id', $artist->getId())->get();
		
		foreach ($albums as $album) {
			echo "<h3>{$album->getName()} ({$album->getReleaseYear()})</h3>";

			$tracks = Track::where('album_id', $album->getId())->get();
			foreach ($tracks as $track) {
				echo "Låt: {$track->getName()}<br>";
			}
		}
	}
?>

<?php
require("templates/footer.php");
