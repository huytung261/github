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
    <div class="wrapper">
    <?php include ("menu.php");?>
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="special-deal leftbar" style="margin-top:0;">
                <h4 class="title">
                  Special 
                  <strong>
                    Deals
                  </strong>
                </h4>
                <?php if(isset($_SESSION['cart'])){
                      $i = 0;
                      $tongtien=0;
                      foreach($_SESSION['cart'] as $cart_item){
                        $total = $cart_item['price'] * $cart_item['soluong'];
                        $tongtien +=  $total;
                        $i++;
                      ?>
                <div class="special-item">
                  <div class="product-image">
                    <a href="details.html">
                      <img src="images/products/thum/<?php echo $cart_item['images']?>" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      <a href="details.html">
                      <?php echo $cart_item['name']?>
                      </a>
                    </p>
                    <h5 class="price">
                    <?php echo $cart_item['price']?>
                    </h5>
                  </div>
                </div>
                <?php
                    }
                  }else{
                    echo "Hiện tại giỏ hàng trống";
                }
                ?>
              </div>
            </div>
            <div class="col-md-9">
              <div class="checkout-page">
                <ol class="checkout-steps">
                  <li class="steps active">
                    <a href="checkout.html" class="step-title">
                      Billing information
                    </a>
                    <div class="step-description">
                      <form>
                        <div class="row">
                          <div class="col-md-6 col-sm-6">
                            <div class="your-details">
                              <h5>
                                Your Persional Details
                              </h5>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Full Name
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="fullname">
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Email 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="email1">
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Telephone 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="phone">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6">
                            <div class="your-details">
                              <h5>
                                Your Address
                              </h5>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Address 01 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="adr1">
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Address 02
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="adr2">
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  City 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="city">
                              </div>
                              <p class="privacy">
                                <span class="input-radio">
                                  <input type="radio" name="user">
                                </span>
                                <span class="text">
                                  I have read and agree to the 
                                  <a href="#" class="red">
                                    Privacy Policy
                                  </a>
                                </span>
                              </p>
                              <form action="#" method="post">         
                                       <input type='submit' class="button" name="pay" value='Continue'> 
                                    </form>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
      <?php include ("footer.php");?>
    </div>
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