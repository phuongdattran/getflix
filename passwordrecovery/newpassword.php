<?php
include("/home/dusztsuv/public_html/getflix/home/head.php");
?>
    <title>N.E.T_P</title>
</head>
    <body>
        <div class="container-fluid d-flex flex-column">
            <div class="row m-5 justify-content-start">
                <a href="/getflix/home/home.php" class="navbar-brand netp" alt="N.E.T_P"><h1>N.E.T_P</h1></a>    
            </div>
                
            <div class="row m-5 justify-content-center flex-column align-items-center title">
                <div class="row m-2 justify-content-center">
                    <h2>New Password</h2>  
                </div>                
                <div class="row m-2 justify-content-center">
                    <form action = "/getflix/passwordrecovery/newpasswordscript.php?id=<?php echo $_GET['id']?>" method = "post">
                        
                        <p><label for="name">New Password</label> </p>
                        <p><input class="form-control form-control-sm" type="password" id="password" name="password" required></p>
                        <p><label for="name">Confirm New Password</label> </p>
                        <p><input class="form-control form-control-sm" type="password" id="confirmPassword" name="confirmPassword" required></p>
                        <p><input class="nextButton" type="submit" value="Submit"></p>

                    </form> 
                </div>
            </div>
        </div>
        
        <!--JS Scripts-->
<script src="passwordvalidation.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
