<!doctype html>
<html class="no-js" lang="en">

<head>
<?php include('meta_tag.php'); ?>

  <?php include('sidebar.php'); ?>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

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
                                            <li><span class="bread-blod">Products</span>
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
        <!-- Basic Form Start -->
        <div class="basic-form-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div class="sparkline8-list mt-b-30">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Products</h1>
                                </div>
                            </div>
                  
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="basic-login-inner">
                                                <h3></h3>
<form action="products_insert.php" method="post" enctype="multipart/form-data" name="form1" id="formID">
  <table width="457" border="0" align="center">
    <tr>
      <td height="52" colspan="2"><div align="center"><strong>Products</strong></div></td>
    </tr>
    <tr>
      <td width="125" height="60">Product Name </td>
      <td width="322"><input name="Product_Name" type="text" class="form-control validate[required,custom[onlyLetter]]" id="Product_Name"></td>
    </tr>
    <tr>
      <td height="47">Product Rate </td>
      <td><input name="Product_Rate" type="text" class="form-control validate[required,custom[onlyNumber]]" id="Product_Rate"></td>
    </tr>
    <tr>
      <td height="54">Product Size </td>
      <td><input name="Product_Size" type="text" class="form-control validate[required]" id="Product_Size"></td>
    </tr>
    <tr>
      <td height="49">Product Stock </td>
      <td>      <input name="Product_Stock" type="text" class="form-control validate[required]" id="Product_Stock"></td>
    </tr>
    <tr>
      <td height="55">
        <div align="left">Product Image </div></td>
      <td><input name="Product_Image" type="file" class="form-control validate[required]" id="Product_Image"></td>
    </tr>
    <tr>
      <td height="65" colspan="2"><div align="center">
<input type="submit" name="Submit" class="btn btn-primary" value="Submit">        
<input name="Reset" type="reset" id="Reset" class="btn btn-danger" value="Reset">
      </div></td>
    </tr>
  </table>
</form>
</div>
                                        </div>
                                        
                                    </div>
                      </div>
                  </div>
              </div>
</div>


               
        <!-- Basic Form End-->
        <?php include('footer.php'); ?>
		<?php include('val.php');?>