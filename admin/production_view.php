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
                                            <li><span class="bread-blod">production Table</span>
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
                                    <h1>Production<span class="table-project-n"> Details</span> </h1>
									<a href="production_form.php" class="btn btn-primary">Add New</a><hr>
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
    <th>Production Id</th>
    <th>Product Name</th>
    <th>Crop Name</th>
    <th>Quantity</th>
    <th>Description</th>
    <th>Production Date</th>
    <th>Total Production</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
    </thead>
  <tbody>
  <?php
   $sl=1;
include('database.php');
$sql="select * from production pn,products pd,crops rm where pn.product_id=pd.product_id and pn.crop_id=rm.crop_id  ";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{
?>

  <tr>
    <td>&nbsp;<?php echo $sl++;?></td>
    <td>&nbsp;<?php echo $row['product_name'];?></td>
    <td>&nbsp;<?php echo $row['crop_name'];?></td>
    <td>&nbsp;<?php echo $row['quantity'];?></td>
	<td>&nbsp;<?php echo $row['description'];?></td>
    <td>&nbsp;<?php echo $row['production_date'];?></td>
    <td>&nbsp;<?php echo $row['total_production'];?></td>
    <td>&nbsp;<a href="production_edit.php?p_id=<?php echo $row['production_id'];?>"><img src="../images/edit.png" height="30" width="30"></a></td>
    <td>&nbsp;<a href="production_delete.php?p_id=<?php echo $row['production_id'];?>"><img src="../images/delete.png" height="30" width="30"></a></td>
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
