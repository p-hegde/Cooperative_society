<?php include('metatag.php'); ?>

<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

                   <!--/span-->
                <div class="span9" id="content">
                      <!-- morris stacked chart -->
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Customer Order Details</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">

<body>

<form name="formID" ID="formID"method="post" action="customer_order_details_insert.php">
  <table width="410" border="0">
    <tr>
      <td colspan="2"><div align="center"><em><strong>Customer Order Details </strong></em></div></td>
    </tr>
    <tr>
      <td width="177">Customer Name </td>
      <td width="217"><select name="customer_id" id="customer_id" class="validate[required]">
        <option value>Select</option>
        <?php
		  include('dbconnect.php');
		  $sql="select * from customer_details";
		  $res=mysqli_query($conn,$sql);
	      while($row=mysqli_fetch_array($res))
	      {
	  
	      ?>
        <option value="<?php echo $row['customer_id'];?>"><?php echo $row['customer_name'];?></option>
        <?php
		  
		  }
		  ?>
      </select></td>
    </tr>
    <tr>
      <td>Product Name / Type</td>
      <td><select name="product_id" id="product_id" class="validate[required]">
        <option value>Select</option>
        <?php
	  include('dbconnect.php');
	  $sql="select * from product_details";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  
	  ?>
        <option value="<?php echo $row['product_id'];?>"><?php echo $row['product_name'];?> / <?php echo $row['product_type'];?></option>
        <?php
	  }
	  ?>
      </select>
      </select></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><input name="quantity" type="text" id="quantity" class="form-control validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Order Date </td>
      <td><input name="order_date" type="date" id="order_date" class="form-control validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><input name="status" type="text" id="status" class="form-control validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td height="55" colspan="2"><input type="submit" name="Submit" value="Submit" class="btn btn-primary">
      <input type="reset" name="Reset" value="Reset" class="btn btn-danger"></td>
    </tr>
  </table>
</form>
<!-- END FORM-->
				</div>
			    </div>
			</div>
                     	<!-- /block -->
		    </div>
                     <!-- /validation -->


                </div>
            </div>
            <hr>
           <?php include('footer.php'); ?>
<?php
include("val.php");
?>