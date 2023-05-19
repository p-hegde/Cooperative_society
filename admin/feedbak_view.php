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
                                            <li><span class="bread-blod">Rating Details </span>
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
					<!-- <a class="btn btn-info" href="feedbak_form.php" >Add</a><hr> -->
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>jaggery <span class="table-project-n">Rating</span> Details</h1>
									
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                 <!--    <div id="toolbar">
                                        <select class="form-control">
												<option value="">Export Basic</option>
												<option value="all">Export All</option>
												<option value="selected">Export Selected</option>
											</select>
                                    </div> -->
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">                                            <tr>
											
      <th><strong>Sl.No</strong></th>
       <th><strong> Customer Name </strong></th>
	   <th><strong> Jaggery Name </strong></th>
      <th><strong> Title</strong></th>
      <th><strong> Discription</strong></th>
      <th><strong> Date</strong></th>
      <!-- <th>Course</th> -->
      <th>Rating</th>
      <!--   <th><strong> Status</strong></th> -->
   <!--    <th><strong>Delete</strong></th>
      <th><strong>Edit</strong></th> -->
    </tr>
	</thead>
	</tbody>
	<?php
	include('database.php');
	$sl=1;
	//$uname=$_SESSION['uname'];
	// $sql="select * from feedback fb,student_details sd,course_details cd,facalaty_details fd where fb.student_id=sd.student_id  and sd.couse_id=cd.course_id and fb.facalaty_id=fd.facalaty_id and sd.student_reg_no='$uname'";
	
	 $sql="select * from  feedback f, customer_details cd, jaggery j where f.customer_id=cd.customer_id and j.jaggery_id=f.jaggery_id ";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $sl++; ?></td>
      <td>&nbsp;<?php echo $row['customer_name']; ?></td>
      <td>&nbsp;<?php echo $row['jaggery_name']; ?></td>
      <td>&nbsp;<?php echo $row['feedback_title']; ?></td>
		  <td>&nbsp;<?php echo $row['feedback_discription']; ?></td>
      <td>&nbsp;<?php echo $row['feedback_date']; ?></td>
      <td>&nbsp;
	  <?php
$starNumber=$row['feedback_reating'];
for($x=1;$x<=$starNumber;$x++) {
echo '<img src="../web/reting/h.png" width="30px" height="30px"  />';
}
if (strpos($starNumber,'.')) {
echo '<img src="../web/reting/empty.svg.png" width="30px" height="30px" />';
$x++;
}
while ($x<=5) {
echo '<img src="../web/reting/empty.svg.png" width="30px" height="30px" />';
$x++;
}
?>
  
	  </td>
      <!--  <td>&nbsp;<?php echo $row['feedback_status']; ?></td> -->
     <!--  <td><a href="feedback_delete.php?feedback_id=<?php echo $row['feedback_id']; ?> "title="Delete"onclick="return confirm('YOU WNAT TO DELETE')"><img src="img/file_delete.png" width="30px" height="30px"></td>
      <td><a href="feedback_edit.php?feedback_id=<?php echo $row['feedback_id']; ?>" title="Edit"><img src="img/file_edit.png" width="30px" height="30px"></a></td> -->
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
