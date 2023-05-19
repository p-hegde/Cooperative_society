<?php include('meta_tag.php'); ?>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

  <?php include('sidebar.php'); ?>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                       
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Customer Order Details</span>
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
        <!-- Static Table Start -->
		
        <div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
				
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<a href="customer_order_details.php" class="btn btn-info">Add New Order	</a><hr>
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Order Details <span class="table-project-n">Data</span> Table</h1>
									
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control">
												<option value="">Export Basic</option>
												<option value="all">Export All</option>
												<option value="selected">Export Selected</option>
											</select>
                                    </div>
									
                                   <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
	 <thead>
	    <tr>
      <th width="86">Order ID </th>
      <th width="107">Customer Name </th>
      <th width="101">Product Name </th>
      <th width="77">Quantity</th>
      <th width="140">Order Date </th>
      <th width="93">Order Status</th>
     <!-- <th width="93">Confirm</th>
	 <th width="93">Not Confirm</th>
      <th width="102">Cancel</th> -->
    </tr>
	</thead>
	<tbody>
	<?php
	include('database.php');
	$uname=$_SESSION['uname'];
	$sql="select * from customer_order_details cod,customer_details cd , products j where cod.customer_id=cd.customer_id and j.product_id=cod.product_id and cd.email='$uname'";
	$res=(mysqli_query($conn,$sql));
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $row['order_id'];?></td>
      <td>&nbsp;<?php echo $row['customer_name'];?></td>
      <td>&nbsp;<?php echo $row['product_name'];?></td>
      <td>&nbsp;<?php echo $row['quantity'];?></td>
      <td>&nbsp;<?php echo $row['order_date'];?></td>
      <td>&nbsp;<a href="#"  <?php if($row['status']=='Pending') {?> class="btn btn-warning" <?php } ?> 
	  <?php if($row['status']=='Confirmed') {?> class="btn btn-success" <?php } ?>
	  
	  <?php if($row['status']=='No Stock') {?> class="btn btn-danger" <?php } ?>
	  >
	 
	  <?php echo $row['status'];?></a></td>
      <!-- td><a href="customer_order_details_confirm.php?id=<?php echo $row['order_id'];?>&qnt=<?php echo $row['quantity'];?>&contact_no=<?php echo $row['contact_number']; ?>&jaggery_stock=<?php echo $row['jaggery_stock']; ?>&jaggery_id=<?php echo $row['jaggery_id']; ?>" onClick="return confirm('Are you sure to confirm?')" class="btn btn-primary">Confirm</a>&nbsp;</td> 
	   <td><a href="customer_order_details_nostock.php?id=<?php echo $row['order_id'];?>" onClick="return confirm('Are you sure to No Stock?')" class="btn btn-primary">No&nbsp;Stock</a>&nbsp;</td> 
      <td><a href="customer_order_details_delete.php?id=<?php echo $row['order_id'];?>" onClick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>&nbsp;</td> -->
    </tr>
	<?php
	
	}
	?>
	</tbody>
										</table>
									          </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
