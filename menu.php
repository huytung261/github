<?php
   if(isset($_GET['action'])=='dangxuat'){
      unset($_SESSION['dangnhap']);
      header('location:login.php');
   }
?>

<div class="wrapper">
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-2 col-sm-2">
                     <div class="logo"><a href="index.php"><img src="images/logo.png" alt="FlatShop"></a></div>
                  </div>
                  <div class="col-md-10 col-sm-10">
                     <div class="header_top">
                        <div class="row">
                           
                           <div class="col-md-6">
                              <ul class="topmenu">
                                 <li><a href="#">About Us</a></li>
                                 <li><a href="#">News</a></li>
                                 <li><a href="#">Service</a></li>
                                 <li><a href="#">Recruiment</a></li>
                                 <li><a href="#">Media</a></li>
                                 <li><a href="#">Support</a></li>
                              </ul>
                           </div>
                           <div class="col-md-3">
                              <ul class="usermenu">
                                 <li><a href="login.php" class="log">Login</a></li>
                                 <li><a href="index.php?action=dangxuat" >Logout : <?php if(isset($_SESSION['dangnhap'])) 
                                                                                    echo $_SESSION['dangnhap'];
                                                                                    ?> 
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="header_bottom">
                        <ul class="option">
                           <li id="search" class="search">
                              <form><input class="search-submit" type="submit" value=""><input class="search-input" placeholder="Enter your search term..." type="text" value="" name="search"></form>
                           </li>
                           <li class="option-cart">
                              <a href="cart.php" class="cart-icon">cart <span class="cart_no"></span></a>
                              
                           </li>
                        </ul>
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                           <ul class="nav navbar-nav">
                              <li class="active dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                                 <div class="dropdown-menu">
                                    <ul class="mega-menu-links">
                                       <li><a href="index.php">home</a></li>
                                       <li><a href="#">home2</a></li>
                                       <li><a href="#">home3</a></li>
                                       <li><a href="#">Productlitst</a></li>
                                       <li><a href="#">Productgird</a></li>
                                       <li><a href="#">Details</a></li>
                                       <li><a href="cart.php">Cart</a></li>
                                       <li><a href="#">CheckOut</a></li>
                                       <li><a href="checkout2.php">CheckOut2</a></li>
                                       <li><a href="#">contact</a></li>
                                    </ul>
                                 </div>
                              </li>
                              <li><a href="#">men</a></li>
                              <li><a href="#">women</a></li>
                              <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fashion</a>
                                 <div class="dropdown-menu mega-menu">
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                             <li><a href="#">New Collection</a></li>
                                             <li><a href="#">Shirts & tops</a></li>
                                             <li><a href="#">Laptop & Brie</a></li>
                                             <li><a href="#">Dresses</a></li>
                                             <li><a href="#">Blazers & Jackets</a></li>
                                             <li><a href="#">Shoulder Bags</a></li>
                                          </ul>
                                       </div>
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                          <li><a href="#">New Collection</a></li>
                                             <li><a href="#">Shirts & tops</a></li>
                                             <li><a href="#">Laptop & Brie</a></li>
                                             <li><a href="#">Dresses</a></li>
                                             <li><a href="#">Blazers & Jackets</a></li>
                                             <li><a href="#">Shoulder Bags</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li><a href="#">gift</a></li>
                              <li><a href="#">kids</a></li>
                              <li><a href="#">blog</a></li>
                              <li><a href="#">jewelry</a></li>
                              <li><a href="qlsanpham.php">Quản lý SP</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>