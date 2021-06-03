<?php
  session_start();
  if(isset($_SESSION['cart'])){
  }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>
      Welcome to FlatShop
    </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
    <link href="css/style1.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
</script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js">
</script>
<![endif]-->
  </head>
  <body>
  <?php include ("menu.php");?>
    <div class="wrapper">
      <div class="header">
          <div class="page-index">
          <div class="container">
            <p>
              Home - Shopping Cart
            </p>
            
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container shopping-cart">
          <div class="row">
            <div class="col-md-12">
              <h3 class="title">
                Shopping Cart
              </h3>
              <div class="clearfix">
              </div>
              <table class="shop-table">
                <thead>
                  <tr>
                    <th>
                      Image
                    </th>
                    <th>
                      Details
                    </th>
                    <th>
                      Price
                    </th>
                    <th>
                      Quantity
                    </th>
                    <th>
                      Price
                    </th>
                    <th>
                      Delete
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    if(isset($_SESSION['cart'])){
                    $i = 0;
                    $tongtien=0;
                    foreach($_SESSION['cart'] as $cart_item){
                      $total = $cart_item['price'] * $cart_item['soluong'];
                      $tongtien +=  $total;
                      $i++;
                    ?>
                  <tr>
                    <td>
                      <img src="images/products/small/<?php echo $cart_item['images']?>" alt="">
                    </td>
                    <td>
                      <div class="shop-details">
                        <div class="productname">
                          <?php echo $cart_item['name']?>
                        </div>
                    </td>
                    <td>
                      <h5>
                      <?php echo $cart_item['price']?>
                      </h5>
                    </td>
                    <td>
                    <?php echo $cart_item['soluong']?>
                    </td>
                    <td>
                      <h5>
                        <strong class="red">
                        <?php 
                        if(isset($total)){
                          echo $total;
                        }else{
                          echo "0";
                        }
                        ?>
                        </strong>
                      </h5>
                    </td>
                    <td>
                      <a href="addCart.php?xoa=<?php echo $cart_item['id']?>">
                        <img src="images/remove.png" alt="">
                      </a>
                    </td>
                  </tr>
                  <?php
                    }
                  }else{
                    echo "Hiện tại giỏ hàng trống";
                }
                ?>
                </tbody>
                
                <div class="col-md-4 col-sm-6">
                  <div class="shippingbox">
                    <div class="subtotal">
                      <h5>
                        Total Money
                      </h5>
                      <span>
                      <?php echo $tongtien?>
                      </span>
                    </div>
                    <button>
                      Process To Checkout
                    </button>
                  </div>
                </div>

                <tfoot>
                  <tr>
                    <td colspan="6">
                      <button class="pull-left">
                        Continue Shopping
                      </button>
                      <button class=" pull-right">
                        Update Shopping Cart
                      </button>
                    </td>
                  </tr>
                </tfoot>
              </table>
              <div class="clearfix">
              </div>

                
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
          
          
      <div class="clearfix">
      </div>
      <?php include ("footer.php");?>
     
    <!-- Bootstrap core JavaScript==================================================-->
    <script type="text/javascript" src="js/jquery-1.10.2.min.js">
    </script>
    <script type="text/javascript" src="js/bootstrap.min.js">
    </script>
    <script defer src="js/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js">
    </script>
    <script type="text/javascript" src="js/script.min.js" >
    </script>
  </body>
</html>