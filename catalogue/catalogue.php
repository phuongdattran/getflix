<?php include("/home/dusztsuv/public_html/getflix/home/head.php");?> 
<title>N.E.T_P</title>
</head>
<body>
        <?php
        include("/home/dusztsuv/public_html/getflix/scripts/connectdb.php");
        include('/home/dusztsuv/public_html/getflix/home/navbar.php');
        
        ?>
        <div class="container-fluid">
        <div class="row m-5 justify-content-start align-items-center">
            <form action="/getflix/catalogue/catalogue.php" method="get">
                <select class="form-control form-control-sm" id="genre" name="genre"  onchange="this.form.submit();">
                    <option value="all">All</option>
                    <?php        
                    $req = $bdd->query('SELECT DISTINCT genre FROM movies ORDER BY genre');
                    while ($data = $req->fetch()) {
                        if ($data['genre'] == $_GET['genre']) {
                            echo '<option value="'.$data['genre'].'" selected>'.ucfirst($data['genre']).'</option>';
                        } else {
                            echo '<option value="'.$data['genre'].'">'.ucfirst($data['genre']).'</option>';
                        }     
                    }
                        echo '<input type="hidden" id="sort" name="sort" value="year">
                        <input type="hidden" id="order" name="order" value="ASC">';
                    $req->closeCursor();
                    $order = $_GET['order'];
                    if ($order == "ASC") {
                        $order = "DESC";
                    } else {
                        $order = "ASC";
                    }
                    ?>
                </select>
            </form>
                <a href="/getflix/catalogue/catalogue.php?sort=year&order=<?php echo $order ?>&genre=<?php echo $_GET['genre']?>"> &nbsp Year  &nbsp </a>
                <a href="/getflix/catalogue/catalogue.php?sort=rating&order=<?php echo $order ?>&genre=<?php echo $_GET['genre']?>">Rating  &nbsp </a>
                <a href="/getflix/catalogue/catalogue.php?sort=title&order=<?php echo $order ?>&genre=<?php echo $_GET['genre']?>">Title</a>
        </div>
        <div class="row m-2 justify-content-center align-items-center">
        <?php
            $sort = $_GET["sort"];

            if ($_GET['genre']=="all") {
                $sql = 'SELECT id, title FROM movies ORDER BY ' . $sort . ' ' . $order;   
            } else{ 
                $sql = 'SELECT id, title FROM movies WHERE genre = "'. $_GET['genre'] . '" ORDER BY ' . $sort . ' ' . $order;  
            }
            
            $req = $bdd->prepare($sql);
            $req->execute();
            while ($data = $req->fetch()) {
                echo '<a href="/getflix/movies/movies.php?movieId=' . $data['id'] . '" alt="'.$data['title'].'">
                        <img class="m-2 coverCatalogue" src="/getflix/img/cover/'.$data['id'].'.jpg" alt="'.$data['title'].' cover">
                    </a>';
            }
            $req->closeCursor();?>
        </div>
    </div>
    <?php include('/home/dusztsuv/public_html/getflix/home/footer.php');?>
    <!--JS Scripts-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>