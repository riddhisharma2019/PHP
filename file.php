
<html>
<head>

    <title>Website template</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
</head>
<body>
    
    <div class="container">
        <div class="login-box">
       <div class="row">
           <div class="col-md-6 login-left">
               <h2 color="white">Login Here</h2>
               <form action="validation.php" method="post">
                   <div class="form-group">
                       <label>Username</label>
                       
                       <input type="text" name="user" class="form-control" required>    
                   </div>
                       
                        <div class="form-group">
                       <label>Password</label>
                       
                       <input type="password" name="password" class="form-control" required>  
                        </div>
                       <button type="submit" class="btn btn-primary">Login</button>
                   
                       
                   
               </form>
           </div>
           
           
           <div class="col-md-6 login-right">
               <h2 color="#fff">Register Here</h2>
               <form action="registration.php" method="post">
                   <div class="form-group">
                       <label>Username</label>
                       
                       <input type="text" name="user" class="form-control" required>    
                   </div>
                       
                        <div class="form-group">
                       <label>Password</label>
                       
                       <input type="password" name="password" class="form-control" required>  
                        </div>
                       <button type="submit" class="btn btn-primary">Register</button>
                   
                       
                   
               </form>
           </div>
           
           
           
           
           
           
           
       </div> 
       </div>
    </div>
</body>
</html>