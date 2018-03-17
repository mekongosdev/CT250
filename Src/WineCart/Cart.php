<script language="javascript">
    function confirmDelete(){
        if(confirm("Are you sure want to delete it?")){
            return true;
        }
        else{
            return false;
        }
    }
</script>
<?php
if (isset($_GET['action'])) {
    if ($_GET['action'] == "del") {
        $id = $_GET["id"];
        unset($_SESSION["cart"][$id]);
        echo "<script>window.location.href='?page=Cart'</script>";
    }
}

if (isset($_POST['btnYes'])) {
    if (isset($_SESSION['username'])) {
        foreach ($_SESSION["cart"] as $key => $row) {
            $_SESSION['cart'][$key]['quantity'] = $_POST['Wine'.$key];
        }
        echo "<script>window.location.href='?page=Checkout'</script>";
    } else {
        echo "<script>alert('Please Login to Checkout');</script>";
    }
}

?>

<!-- breadcrumbs -->
<div class="breadcrumb_dress">
    <div class="container">
        <ul>
            <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
            <li>Cart</li>
        </ul>
    </div>
</div>
<!-- //breadcrumbs -->

<!-- about -->
<div class="about">
    <div class="container"> 
        <form id="form-1" name="form1" method="post" action="">
            <div class="row">
                <div class="col-sm-1"><label>No.</label></div>
                <div class="col-sm-2"><label>Product Names</label></div>
                <div class="col-sm-2"><label>Publisher</label></div>
                <div class="col-sm-2"><label>Price</label></div>
                <div class="col-sm-2"><label>Quantity</label></div>
                <div class="col-sm-2"><label>Total</label></div>
                <div class="col-sm-1"><label>Action</label></div>
            </div>
            <hr/>
            <br/>
            <?php
            if ($_SESSION["cart"] != null) 
            {
              $total = 0;
              $i = 1;
              foreach ($_SESSION["cart"] as $key => $row) 
              {
                ?>
                <div class="row">
                    <div class="col-sm-1"><?php echo $i++; ?></div>
                    <div class="col-sm-2"><?php echo $row['ten'] ?></div>
                    <div class="col-sm-2"><?php echo $row["hang"] ?></div>
                    <div class="col-sm-2"><?php echo $row['gia'] ?></div>
                    <div class="col-sm-2">
                        <div class="input-group bootstrap-touchspin">
                            <input type='text' id="wine-quantity" name='Wine<?php echo $key ?>' value='<?php echo $row["quantity"] ?>' class='form-control text-center'/>      
                        </div>
                    </div>
                    <div class="col-sm-2"><?php echo number_format($row["gia"] * $row["quantity"], 0, ",", ".") ?></div>
                    <div class="col-sm-1"><a onclick='return confirmDelete()' href="./cart/del/<?php echo $key ?>"><span class="fa fa-remove fa-lg"></span></a></div>
                </div><hr>          
                <?php
                $total += $row["gia"] * $row["quantity"];
            }
            echo "<div class='row'>
            <div class='col-sm-2 col-sm-offset-8 text-info text-right'><h3>Total: <span class='badge badge-info font-weight-bold' style='padding: 10px' >
            $".number_format($total, 0, ",", ".") . "</span></h3></div></div><br/>";
            echo '<div class="row">
            <input type="submit" value="Check out" name="btnYes" id="btnXoa" class="btn btn-primary pull-right btn-lg"/>
            </div>';
        } else {
            echo "<div class='row'><div class='col-sm-12'>There are not any wine in cart</div></div>";
        }
        ?>

    </form>
</div>
</div>