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
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Cutomer Payments Table</span>
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
                                    <h1>Cutomer Payments<span class="table-project-n"> Data</span> Table</h1>
									<a href="customer_payments_form.php" class="btn btn-primary">Add New</a>
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
      <th>S.No</th>
      <th>Customer</th>
      <th>Payment Amount</th>
      <th>Description</th>
      <th>Payment Date</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
	</thead>
  <tbody>
	<?php
	$sn=1;
include('database.php'); 
$sql="select * from customer_payments cp,customer_details cd where cp.customer_id=cd.customer_id ";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
?>
    <tr>
      <td>&nbsp;<?php echo $sn++;?></td>
      <td>&nbsp;<?php echo $row['customer_name'];?></td>
      <td>&nbsp;<?php echo $row['payment_amount'];?></td>
      <td>&nbsp;<?php echo $row['description'];?></td>
      <td>&nbsp;<?php echo $row['payment_date'];?></td>
      <td>&nbsp;<a href="customer_payments_edit.php?c_id=<?php echo $row['customer_payment_id'];?>"><img src="../../image/edit.png" height="30" width="30"</a></a></td>
      <td>&nbsp;<a href="customer_payments_delete.php?c_id=<?php echo $row['customer_payment_id'];?>"><img src="../../image/delete icon.png" height="30" width="30"</a>Delete</a></td>
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

