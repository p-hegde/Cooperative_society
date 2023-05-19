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
                                        <div class="breadcome-heading">
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Sales Master Table</span>
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
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Sales Master <span class="table-project-n">Bill</span> Details</h1>
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
									<a href="sales_master_form.php" class="btn btn-primary">Add New Bill</a><hr>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                      
									
									  <thead>
      <tr>
      <th width="145">Sl No</th>
	   <th width="145">Bill No</th>
     
      <th width="89">Bill Date </th>
      <th width="111">Customer Name</th>
     
      <th width="116">&nbsp;</th>
    </tr>
	</thead>
	<body>
	<?php
	include('database.php');
	$slno=0;
$total=0;
$sql="select * from  sales_master sm, customer_details cd where sm.customer_id=cd.customer_id";
   $res=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($res))
  {
 
  $slno=$slno+1;
  $bmid=$row["sales_master_id"];
  $dat=$row["date"];
  $cust_id=$row["customer_id"];
  $cust_name=$row["customer_name"];
 
  ?>
  

    <tr>
	 <td><?php echo $slno; ?></td>
      <td><?php echo $bmid; ?></td>
	   <td><?php echo $dat; ?></td>
	  <td><?php echo $cust_name; ?></td>
	 <td><div align="center"><a href="bill_details_more.php?bmid=<?php echo $bmid; ?>&dat=<?php echo $dat; ?>&cust_id=<?php  echo $cust_id; ?>" class="btn btn-info">More Bill</a><strong></stong></div></td>
    </tr>
	<?php
	}
  ?>
   </body>
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