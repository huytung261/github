<?php
  session_start();
  include ('config.php');
  //them so luong 
    if(isset($_GET['cong'])){
       $id = $_GET['cong']; 
       foreach($_SESSION['cart']as $cart_item){
         if($cart_item['id']!=$id){
          $product[]= array('name'=>$cart_item['name'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'], 'price'=>$cart_item['price'], 'images'=>$cart_item['images'], 'idsp'=>$cart_item['idsp']);
          $_SESSION['cart'] = $product;
        }else{
          
          if($cart_item['soluong']<=9){
            $tangsoluong = $cart_item['soluong'] +1;
            $product[]= array('name'=>$cart_item['name'], 'id'=>$cart_item['id'], 'soluong'=>$tangsoluong, 'price'=>$cart_item['price'], 'images'=>$cart_item['images'], 'idsp'=>$cart_item['idsp']);
          }else{
            $product[]= array('name'=>$cart_item['name'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'], 'price'=>$cart_item['price'], 'images'=>$cart_item['images'], 'idsp'=>$cart_item['idsp']);
          }
          $_SESSION['cart'] = $product;
        }   
       }
       header('location:cart.php');
    }
     //giam so luong 
     if(isset($_GET['tru'])){
      $id = $_GET['tru']; 
      foreach($_SESSION['cart']as $cart_item){
        if($cart_item['id']!=$id){
         $product[]= array('name'=>$cart_item['name'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'], 'price'=>$cart_item['price'], 'images'=>$cart_item['images'], 'idsp'=>$cart_item['idsp']);
         $_SESSION['cart'] = $product;
       }else{
        $tangsoluong = $cart_item['soluong'] -1;
         if($cart_item['soluong']>1){
           
           $product[]= array('name'=>$cart_item['name'], 'id'=>$cart_item['id'], 'soluong'=>$tangsoluong, 'price'=>$cart_item['price'], 'images'=>$cart_item['images'], 'idsp'=>$cart_item['idsp']);
         }else{
           $product[]= array('name'=>$cart_item['name'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'], 'price'=>$cart_item['price'], 'images'=>$cart_item['images'], 'idsp'=>$cart_item['idsp']);
         }
         $_SESSION['cart'] = $product;
       }   
      }
      header('location:cart.php');
   }
    //xoa sp
    if(isset($_SESSION['cart'])&&isset($_GET['xoa'])){
        $id = $_GET['xoa'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){
                $product[]= array('name'=>$cart_item['name'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'], 'price'=>$cart_item['price'], 'images'=>$cart_item['images'], 'idsp'=>$cart_item['idsp']);
            }
            $_SESSION['cart'] = $product;
            header('location:cart.php');
        }
    }


  if(isset($_POST['addCart'])){
    //   session_destroy();
  $id=$_GET['idsp'];
  $soluong = 1;
  $sql = "SELECT * FROM product WHERE idsp ='".$id."' LIMIT 1";
  $query = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($query);
  if($row){
    $new_product = array(array('name'=>$row['name'], 'id'=>$id, 'soluong'=>$soluong, 'price'=>$row['price'], 'images'=>$row['images'], 'idsp'=>$row['idsp']));
    if(isset($_SESSION['cart'])){
      $found = false;
      foreach($_SESSION['cart'] as $cart_item){
        if($cart_item['id']==$id){
          $product[]= array('name'=>$cart_item['name'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong']+1, 'price'=>$cart_item['price'], 'images'=>$cart_item['images'], 'idsp'=>$cart_item['idsp']);
          $found = true;
        }else{
          $product[]= array('name'=>$cart_item['name'], 'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'], 'price'=>$cart_item['price'], 'images'=>$cart_item['images'], 'idsp'=>$cart_item['idsp']);
        }
      }
      if($found == false){
        $_SESSION['cart'] = array_merge($product, $new_product);
      }else{
        $_SESSION['cart'] = $product;
      }
    }else{
      $_SESSION['cart'] = $new_product;
    } 
  }
  header('location:cart.php');
}                
                  
?>