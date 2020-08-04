<html>
<head>

    <title></title>
    
    <link rel="stylesheet" href="style10.css">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body class="container">
    <h1 class="text-center text-info mb-5"
        style="font-family: 'Abril Fatface',cursive;">Online shopping cart PHP and MYSQLI</h1>
        
        <div class="row">   
        
  <?php
  
  $con= mysqli_connect('localhost:3308','root');
  mysqli_select_db($con,'ytshoppingcart');
  
       $query="SELECT `name`, `image`, `price`, `discount` FROM `ytshoppingcart` order by id ASC";
       $queryfire = mysqli_query($con,$query);
       $num = mysqli_num_rows($queryfire);
       
       if ($num>0){
           while($product= mysqli_fetch_array($queryfire)){
       
         ?> 
            <div class="col-lg-3 col-md-3 col-sm-12">
                <form>
                    <div class="card">
                        <h6 class="card-title bg-success text-white p-2 text-upper-case"><?php echo $product['name']; ?>  </h6>
                        <div class="card-body">
                            <img src="<?php echo $product['image']; ?>" alt="phone" class="img-fluid mb-2">
                            <h6> &#8377; <?php echo $product['price']; ?><span> (<?php echo $product['discount']; ?> %off)</span>  </h6>
                            <h6 class="badge badge-success">  4.4<i class="fa fa-star"> </i> </h6>
                            
                            <input type="text" name="" class="form-control" placeholder="Quantity">
                            
                            </div>
                      
                        
                        <div class="btn-group d-flex">
                            <button class="brn btn-danger flex-fill">Add to cart</button><button class="btn btn-warning flex-fill text-white">Buy Now</button>
                     
                        
                     </div>
                    </div>
               
                </form>
            
            </div>
            
       <?php
           }
       }
       ?>
        
           
</body>
</html>
      