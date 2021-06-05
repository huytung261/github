<?php
header('Content-Type: text/html; charset=utf-8');
include ('config.php');
$sql = "SELECT idsp, name, price, images, soluong  FROM product";  

if(isset($_POST['themsp'])){
    $idsp = $_POST['masp'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['hinhanh']['name'];
    $image = time().'_'.$image;
    $image_tmp = $_FILES['hinhanh']['tmp_name'];
    $soluong = $_POST['soluong'];
    $sql_them = "INSERT INTO product (idsp, name, price, images, soluong) VALUES ('$idsp', '$name', '$price', '$image', '$soluong' )";
    mysqli_query($conn,$sql_them);
    move_uploaded_file($image_tmp, 'images/products/small/'.$image);
}
if(isset($_GET['xoaid'])){
    $idsp = $_GET['xoaid'];
    $sql="SELECT * FROM product WHERE idsp = '$idsp' LIMIT 1";
    $query = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($query)){
      unlink('images/products/small/'.$row['images']);
    }
    $sql_xoa = " DELETE FROM product WHERE idsp = '$idsp'";
    mysqli_query($conn,$sql_xoa);
    echo '<script language="javascript">alert("Xóa thành công!"); window.location="qlsanpham.php";</script>';
    // header("location: qlsanpham.php");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-13/css/all.min.css" >
    
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
            <p>Quản lý sản phẩm</p>
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
                Quản lý sản phẩm
              </h3>
            <form action="qlsanpham.php" method="POST" enctype="multipart/form-data">
            <table class="table">
                    <tr>
                        <th>Mã sp</th>
                        <th><input type="input"  required="" name="masp"></th>
                    </tr>
                    <tr>
                        <th>Tên sp</th>
                        <th><input type="input"  required="" name="name"></th>
                        
                    </tr>
                    <tr>
                        <th>Hình ảnh</th>
                        <th><input type="file" name="hinhanh"></th>
                        
                    </tr>
                    <tr>
                        <th>Giá</th>
                        <th><input type="input"  required="" name="price"></th>
                    </tr>
                    <tr>
                        <th>Số lượng</th>
                        <th><input type="input"  required="" name="soluong"></th>
                    </tr>
                    <tr>
                        <td><input type='submit' class="button" name="themsp" value='Thêm sản phẩm'> </td>
                    </tr>
             </table>
             
             </form>



             <p> <h3 class="title">Danh sách sản phẩm</h3></p>
              <div class="clearfix">
              </div>
              <table class="shop-table">
                <thead>
                  <tr>
                  <th>
                      mã sp
                    </th>
                    <th>
                      Tên sản phẩm
                    </th>
                    <th>
                      Hình ảnh
                    </th>
                    <th>
                      Giá
                    </th>
                    <th>
                      Số lượng
                    </th>
                    <th>
                      Ghi chú
                    </th>
                  </tr>
                </thead>
                <?php
                                    if($result = mysqli_query($conn, $sql)){
                                       if(mysqli_num_rows($result) > 0){
                                 
                                           while($row = mysqli_fetch_array($result)){?>
                                             
                <tbody>
                  <tr>
                    <td>
                      <h5><?php echo $row["idsp"]?> </h5>
                    </td>
                    <td>
                      <div class="shop-details">
                        <div class="productname">
                        <?php echo $row["name"]?>
                        </div>
                    </td>
                    <td>
                      <img src="images/products/small/<?php echo $row["images"]?>" alt="">
                    </td>
                    <td>
                      <h5>
                      <?php echo $row["price"]?>
                      </h5>
                    </td>
                    <td><h5> <?php echo $row["soluong"]?></h5></td>
                    
                    <td>
                      <h5><a href="suasp.php?suaid=<?php echo $row["idsp"]?>">Sửa</a></h5></br>
                      <h5><a href="qlsanpham.php?xoaid=<?php echo $row["idsp"]?>">Xóa</a></h5>
                    </td>
                  </tr> 
                </tbody>
                <?php
                        }
                      }
                    }
                  ?>  
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