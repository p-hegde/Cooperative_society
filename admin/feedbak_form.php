<!doctype html>
<html class="no-js" lang="en">

<head>
<?php include('meta_tag.php'); ?>

  <?php include('sidebar.php'); ?>
</head>

<body>
		   	   <style>








hr {
  margin: 20px;
  border: none;
  border-bottom: thin solid rgba(255,255,255,.1);
}

div.title { font-size: 2em; }

h1 span {
  font-weight: 300;
  color: #Fd4;
}

div.stars {
  width: 270px;
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

input.star-2:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}
</style>
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
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Basic Element</span>
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
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline8-list mt-b-30">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Raw Materials Supplier</h1>
                                </div>
                            </div>
                  
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="basic-login-inner">
                                                <h3></h3>

		   

        <!-- Basic Form Start -->
        
<form name="form1" id="formID" method="post" action="feedbak_insert.php">
  <table width="538" height="319" border="0" align="center">
    <tr>
      <td>Customer Name</td>
      <td><select name="stuid" id="stuid" class="validate[required] form-control">
	  
	  <?php 
	  include('database.php');
	  $uname=$_SESSION['uname'];
	  $sql="select * from  customer_details where email='$uname' ";
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
      <td>Jaggery </td>
      <td><select name="facalaty_id" id="facalaty_id" class="validate[required] form-control">
          <option value="">select Jggery </option>
          <?php 
	  include('database.php');
	  $sql="select * from  jaggery";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
          <option value="<?php echo $row['jaggery_id'];?>"><?php echo $row['jaggery_name'];?></option>
          <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td> Title</td>
      <td><input name="fbtitle" type="text" id="fbtitle" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td> Discription</td>
      <td><input name="fbdis" type="text" id="fbdis" class="validate[required,custom[onlyLetter]] form-control"></td>
    </tr>
    <tr>
      <td> Date</td>
      <td><input name="fbdate" type="date" id="fbdate" readonly="" value="<?php echo date('Y-m-d'); ?>" class="validate[required,custom[date]] form-control"></td>
    </tr>
    <tr>
      <td>Rating</td>
      <td>&nbsp;
          <div class="stars">
            <input name="star" type="radio" class="star star-5" id="star-5" value="5"/>
            <label class="star star-5" for="star-5"></label>
            <input name="star" type="radio" class="star star-4" id="star-4" value="4"/>
            <label class="star star-4" for="star-4"></label>
            <input name="star" type="radio" class="star star-3" id="star-3" value="3"/>
            <label class="star star-3" for="star-3"></label>
            <input name="star" type="radio" class="star star-2" id="star-2" value="2"/>
            <label class="star star-2" for="star-2"></label>
            <input name="star" type="radio" class="star star-1" id="star-1" value="1"/>
            <label class="star star-1" for="star-1"></label>
        </div></td>
    </tr>
   
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-success btn">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger btn">
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
