<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
if (isset($_POST['btnUpdate'])) 
{
    //Check if value is null
  if($_POST['txtDeliverAddress'] != "" && $_POST['txtDeliverDate'] != "" && $_POST['slPaymentMethod'] != "0")
  {
        //Get Value
    $CreateDate = date("Y-m-d H:i:s");
    $DeliverDate = $_POST['txtDeliverDate'];
    $DeliverAddress = $_POST['txtDeliverAddress'];
    $PaymentMethod = $_POST['slPaymentMethod'];
    $Username = $_SESSION['username'];
        //Create query
    $query = "INSERT INTO `order`(`OrderCreateDate`, `OrderDeliverDate`, `OrderDeliverPlace`, `OrderStatus`, `Username`, `PaymentMethodId`)
    VALUES ('".$CreateDate."','".$DeliverDate."','".$DeliverAddress."',0,'".$Username."','".$PaymentMethod."')";
    mysql_query($query) or die(mysql_error());
        //Lấy mã tự tăng của đơn đặt hàng
    $order_id = mysql_insert_id();
        //Lấy từng sản phẩm trong giỏ hàng lưu vào CSDL
    foreach ($_SESSION["cart"] as $key => $row) 
    {
      $quantity = $_SESSION['cart'][$key]['quantity'];
      $price = $_SESSION['cart'][$key]['gia'];
      $ori_price = $_SESSION['cart'][$key]['gia'];
      $query = "INSERT INTO `orderwinedetails`(`WineOrderId`, `OrderId`, `WineOrderQuantity`, `WineSoldPrice`, `WineOriginalPrice`)
      VALUES (".$key.",".$order_id.",".$quantity.",'".$price."','". $ori_price."')";
      echo $query;
      mysql_query($query) or die(mysql_error());
      $query_update_stock = "UPDATE wine 
      SET WineQuantity = WineQuantity - ".$row['quantity'].
      ", WineSold = WineSold + ".$row['quantity']." WHERE WineId=".$key;
      mysql_query($query_update_stock);
    }  
        //Xóa giỏ hàng sau khi thêm
    unset($_SESSION["cart"]);
        //Thông báo thêm giỏ hàng thành công
    echo "<script>alert('Your order are recorded.');</script>";
    echo "<script>window.location='?page=homepage.php';</script>";
  } 
  else
  {
    echo "Please fill all required field.";
  }
}

function bindHTTTList() 
{
     // include 'database.php';
  $query = "SELECT PaymentMethodId, PaymentMethodName from PaymentMethod";
  $result = mysql_query($query);
  echo "<select name='slPaymentMethod'>
  <option value='0'>Chọn hình thức thanh toán</option>";
  while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
  {
    echo "<option value='".$row['PaymentMethodId']."'>".$row['PaymentMethodName']."</option>";
  }
  echo "</select>";
}
?>

<div class="container">
  <h1>Checkout products</h1>
  <form id="form1" class="form-horizontal" name="form1" method="POST" action="">

    <div class="form-group">                            
      <label for="lblNoiGiaoHang" class="col-sm-2 control-label">Deliver Address:(*):  </label>
      <div class="col-sm-10">
        <input type="text" name="txtDeliverAddress" id="txtDeliverAddress" class="form-control" placeholder="Nơi giao hàng" value=""/>
      </div>
    </div>     

    <div class="form-group">     
      <label for="lblDeliverDate" class="col-sm-2 control-label">Deliver Date(*):  </label>
      <div class="col-sm-10">       
        <input name="txtDeliverDate" id="txtDeliverDate" type='date' class="form-control" />   
      </div>
    </div>

    <div class="form-group">           
      <label for="lblPaymentMethod" class="col-sm-2 control-label">Payment method(*):  </label>
      <div class="col-sm-10">
        <?php bindHTTTList() ?>
      </div>
    </div>     

    <div class="form-group">      
     <div class="col-sm-2"></div>
     <div class="col-sm-10">
      <input type="submit" name="btnUpdate"  class="btn btn-primary" id="btnUpdate" value="Send"/>
      <input name="btnCancel" type="button" class="btn btn-primary" id="btnCancel" value="Bỏ qua" onclick="window.location='../../Index.php'" />
    </div>
  </div>   
</form>
</div>

