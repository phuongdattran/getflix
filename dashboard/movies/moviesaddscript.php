<?php
include("/var/www/html/getflix/scripts/add.php"); 

if (isset($_POST["title"]) AND isset($_POST["director"]) AND isset($_POST["genre"]) AND isset($_POST["year"])  AND isset($_POST["length"]) AND isset($_POST["synopsis"]) AND isset($_POST["rating"]) AND isset($_POST["trailer"]) ) {
    $table = "movies";
    $header = "dashboard/movies/dashboardmovies.php";
    $array = array(
        'title' => $_POST['title'],
        'director' => $_POST['director'],
        'genre' => $_POST['genre'],
        'year'=> $_POST['year'],
        'length' => $_POST['length'],
        'synopsis' => $_POST['synopsis'],
        'rating' => $_POST['rating'],
        'trailer' => $_POST['trailer'],
        );

    add($table, $array, $header); 
} else { echo "Missing informations";}

?>