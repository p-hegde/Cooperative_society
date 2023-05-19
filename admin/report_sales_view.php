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
                                            <li><span class="bread-blod">customer_details Details</span>
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
                                  <h1><span class="table-project-n">Sales Report </span> Details</h1>
								  <!-- <a href="customer_details_details_form.php" class="btn btn-primary">Add New</a><hr> -->
                              </div>
                            </div>
							
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                   
									
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
    <th>Sl No </th>
    <th>Product Name </th>
	<th>Total Sales Rate </th>
   	<th>Product Quantity Sales </th>
       </tr>
    </thead>
  <tbody>
  
<?php include('database.php'); ?>

<?php	
$sl=1;
$tot=0;
$php_data_array = Array();
$sql="select p.product_name, sum(b.quantity) as cnt,sum(b.rate) as rate  from sales_details b LEFT JOIN products p ON p.product_id=b.product_id , sales_master bm,customer_details c where b.sales_master_id=bm.sales_master_id and bm.customer_id=c.customer_id  GROUP BY b.product_id ORDER by  cnt desc";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
//sl=$sl+1;

$cnt=$row["cnt"];
$rate=$row["rate"];
$tot=$rate * $cnt;

$php_data_array[] = $row;
?>
  <tr>
    <td>&nbsp;<?php echo $sl++; ?></td>
    <td>&nbsp;<b><?php echo $row["product_name"]; ?></b></td>
   <td>&nbsp;<b><?php echo $rate; ?></b></td>
    <td>&nbsp;<div  class="btn btn-primary"><b><?php echo $cnt; ?></b></div></td>
	<!-- <td>&nbsp;<div  class="btn"><b><?php //echo $tot; ?></b></div></td> -->
    </tr>
	
  <?php
  
  }
  
  ?>
    </tbody>
                                </table>
								<?php 
								 //json_encode($php_data_array); 
								
								echo "<script>
        var my_2d = ".json_encode($php_data_array)."
</script>";
								?>
								<div id="chart_div"></div>
<br><br>

</body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
 google.charts.load('current', {'packages':['corechart']});
     // Draw the pie chart when Charts is loaded.
      google.charts.setOnLoadCallback(draw_my_chart);
      // Callback that draws the pie chart
      function draw_my_chart() {
        // Create the data table .
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'language');
        data.addColumn('number', 'Nos');
		for(i = 0; i < my_2d.length; i++)
    data.addRow([my_2d[i][0], parseInt(my_2d[i][1])]);
// above row adds the JavaScript two dimensional array data into required chart format
    var options = {title:'Sales Report',
                       width:800,
                       height:700};

        // Instantiate and draw the chart
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
</script>
								
								
                     </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
        <?php include('footer.php'); ?>
   