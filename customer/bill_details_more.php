<?php include('meta_tag.php'); ?>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
  <?php include('sidebar.php'); ?>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                          
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Customer Details</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div id="printableArea">
        <!-- Static Table Start -->
        <div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                  <h1><span class="table-project-n">Customer  </span> Details</h1>
								<!--   <a href="customer_details_form.php" class="btn btn-primary">Add New</a><hr> -->
                              </div>
                            </div>
							
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">



  <script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=300,height=300');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>
	 
 <?php
	include('database.php');



$bmid=$_REQUEST["bmid"];

$dat=$_REQUEST["dat"];
$cust_id=$_REQUEST["cust_id"];




?>


<table  width="100%" >
						<thead>
    <tr>
      <th width="34">Bill No
        <input name="bmid" type="text" id="bmid" value="<?php echo $bmid; ?>" size="5" readonly=""></th>
      <th width="203">&nbsp;</th>
      <th width="321">&nbsp;</th>
      <th width="491"><div align="right">Date 
            <input name="date" type="text" readonly=""  value="<?php echo $dat; ?>">
      </div></th>
    </tr>
    <tr>
      <td colspan="2"><p>&nbsp;</p>        <p><b>Customer Details</b>
            <?php
		  $sql="select * from customer_details where customer_id='$cust_id'";
		$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
		?>
  </p>
        <p>Customer Name :<br>
                  </p>Customer Phone :<b><?php echo $row["contact_number"] ?></b></td>
      <td width="321"><p>&nbsp;</p>
        <p><b><?php echo $row["customer_name"] ?></b></p>
        </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;  </p>
  <table class="table table-striped">
						<thead>
    <tr>
      <th>Sl NO</th>
      <th>Product Name </th>
      <th>Rate</th>
      <th>Qnt</th>
      <th>Total</th>
    </tr>
	</thead>
	<?php
	$slno=0;
	$tot=0;
	$vat=0;
	$discount=0;
	$total=0;
	$gtotal=0;
	
		$sql3="select * from  sales_details bd, products p where bd.product_id=p.product_id and bd.sales_master_id='$bmid' ";
		$res3=mysqli_query($conn,$sql3);
			while($row3=mysqli_fetch_array($res3))
		{
		$slno=$slno+1;
		$bill_id=$row3["sales_details_id"];
		$pid=$row3["product_id"];
		
		 $qnt=$row3["quantity"];
		 $rate=$row3["rate"];
		 $dic=$row3["discount"];
		 $pname=$row3["product_name"];
		 
		$tot=($rate*$qnt);
		 $discount=$discount+$dic;
		 $total=$total+$tot;
		 $vat=($total*18)/118;
		 $gtotal=($total+$vat)-$discount;	
		?>
    <tr>
      <td>&nbsp;<?php echo $slno; ?></td>
      <td>&nbsp;<?php echo $pname; ?></td>
      <td>&nbsp;<?php echo $rate; ?></td>
      <td>&nbsp;<?php echo $qnt; ?></td>
      <td>&nbsp;<?php echo $tot; ?></td>
     
    </tr>
    
	<?php
	}
	?>
	<tr>
	  <th colspan="4"><div align="right"><b>Total</b></div></th>
	  <th>&nbsp;<b><?php echo $total; ?><b></th>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
	  <td colspan="4"><div align="right"><b>Discount</b></div></td>
	  <td>&nbsp;<b><?php echo $discount; ?></b></td>
	  <td>&nbsp;</td>
	  </tr>
	<tr>
      <td colspan="4"><div align="right"><b>GST</b></div></td>
      <td>&nbsp;<b><?php echo round($vat); ?></b></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th colspan="4"><div align="right"><b>Total Purchase Amount </b></div></th>
      <th>&nbsp;<b><?php echo round($gtotal); ?><b></th>
      <td>&nbsp;</td>
    </tr>

   
</table>
<input type="button" onclick="printDiv('printableArea')" value="print" class="btn btn-primary" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>
        <!-- Static Table End -->
        <?php include('footer.php'); ?>
   
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    

</html>