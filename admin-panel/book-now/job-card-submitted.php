<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$customer_id = $_POST['customer_id'];
$work_order = $_POST['work_order'];
$date = $_POST['date'];
$model_name = $_POST['model_name'];
$vehicle_no = $_POST['vehicle_no'];
$mileage = $_POST['mileage'];
$report = $_POST['report'];
$completed_action = $_POST['completed_action'];
$total_cost = $_POST['total_cost'];


?>


<!-- ============= css ================ -->

<style>

*{
  font-familY:sans-serif;
  text-decoration:none;
  list-style-type:none;
  margin: 0;
  padding: 0;
}

body {
  background: rgb(120,254,255);
background: linear-gradient(112deg, rgba(120,254,255,1) 0%, 
rgba(0,245,237,1) 0%, 
rgba(235,194,21,1) 0%, 
rgba(158,198,231,1) 0%, 
rgba(120,231,231,1) 42%, 
rgba(238,173,238,1) 100%
);

}

.end-page h1{
  width:100%;
  margin:auto;
  text-align:center;
}

form {
  padding:2rem 4rem;
}


  form .customer_name{
    font-size:.9rem;
  }

  form p{
    margin:1rem 0;  
    padding-left:2rem;
    font-size:1.2rem;
  }
</style>


<body>

<div class="end-page" > 

<?php echo "<h1 class='section-heading'> Thanks $first_name for choosing our service"; ?>

</div>

<!-- ======================= form ============================ -->

<form>

<?php echo "<p class='' > <b> Customer Name : </b> $last_name  $first_name</p>"; ?>
<?php echo "<p class='' > <b> Customer ID : </b> $customer_id</p>"; ?>
<?php echo "<p class='' > <b> Work Order : </b> $work_order</p>"; ?>
<?php echo "<p class='' > <b> Date : </b> $date</p>"; ?>
<?php echo "<p class='' > <b> Vehicle Number : </b> $vehicle_no</p>"; ?>
<?php echo "<p class='' > <b> Model Name : </b> $model_name</p>"; ?>
<?php echo "<p class='' > <b> Mileage : </b> $mileage</p>"; ?>
<?php echo "<p class='' > <b>  Completed Action : </b> $completed_action</p>"; ?>
<?php echo "<p class='' > <b>  Total Cost : </b> $completed_action</p>"; ?>

</form>

</body>

