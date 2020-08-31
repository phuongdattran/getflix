<?php 
include("/var/www/html/getflix/scripts/connectdb.php");
?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">  
    </head>
    <body>
 
        <h2>Add a movie</h2>
    <form action = "/getflix/dashboard/movies/moviesaddscript.php" method = "post" enctype="multipart/form-data">
            
            <p><label for="title">Title</label> </p>
            <p><input type="text" id="title" name="title"  required></p>

            <p><label for="director">Director</label> </p>
            <p><input type="text" id="director" name="director"  required></p>

            <p><label for="genre">Genre</label> </p>
            <p><input type="text" id="genre" name="genre"  required></p>

            <p><label for="year">Year</label> </p>
            <p><input type="text" id="year" name="year"  required></p>

            <p><label for="length">Length</label> </p>
            <p><input type="text" id="length" name="length"  required></p>

            <p><label for="synopsis">Synopsis</label> </p>
            <p><textarea rows="15" cols="40" id="synopsis" name="synopsis"  required></textarea></p>

            <p><label for="rating">Rating</label> </p>
            <p><select id="rating" name="rating">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select></p>

            <p><label for="cover">Select image to upload</label> </p>
            <input type="file" name="cover" id="cover">

            <p><label for="trailer">Trailer</label> </p>
            <p><input type="text" id="trailer" name="trailer"  required></p>
            <p><input type="submit" value="Submit"></p>
        </form>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>

