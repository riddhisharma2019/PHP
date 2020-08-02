<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:file.php');
}

?>
<html>
    <head>
        <title>Home page</title>
        <style>
        a{
    color: #fff !important;
    margin-top: -200px !important;
}
h1{
    color: #fff !important;
    margin-top: 200px !important;
    text-align: center;
    text-transform: uppercase;
}

</style>
         <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
        
        
        
        
        
        
        
    </head>
    <body>
        <div class="container">
            <a class="float-right" href="logout.php">Logout</a>
        <h1> Welcome <?php echo $_SESSION['username']; ?> </h1>
        </div>
    </body>
</html>