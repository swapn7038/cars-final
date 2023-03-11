


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
background-color: #eadfea;
opacity: 1;
background-image: radial-gradient(#000000 0.2px, #eadfea 0.2px);
background-size: 4px 4px;
padding:6px 3px ;

}

.top-container{
  /* border:4px solid  red; */
  text-align:center;
}

.top-c-info{
  border:1px solid ;
  display: grid;
  grid-template-columns:1fr 1fr 1fr;
}

.top-c-info p{
  padding:.5rem;
  border:1px solid ;
}


.container {
  padding:2rem 4rem;
  display: grid;
  
  grid-template-columns:1fr 1fr;
  /* border:2px solid ;  */
}


  .container .customer_name{
    font-size:.9rem;
  }

  .container p{
    margin:1rem 0;  
    font-size:.9rem;
    /* border:2px solid red; */
    /* padding-left:2rem; */  
  }

  .container {}

  .left {
    border:1px solid;
    padding:.9rem;
    border-radius:.5rem;
    margin:.5rem;
  }
  .right {
    border:1px solid;
    padding:.9rem;
    border-radius:.5rem;
    margin:.5rem;
  }

  .end{
    border:1px solid;
    display: grid;
    border-radius:.5rem;
    place-items:center;
  }

  .end a {
    margin-bottom:10rem;
  }

</style>


<body>


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
// use address
$address = $_POST['address'];
$phone = $_POST['phone'];

$state = $_POST['state'];
$state_code = $_POST['state_code'];
$pan_no = $_POST['pan'];
$email = $_POST['email'];


?>

<!-- ======================= form ============================ -->

<div class="top-container">
  <h2>Invoice</h2>
  <br>
  <div class="top-c-info">
  <p><b>Order Number </b>: 34</p>
  <p><b>Invlice Number </b>: MH34656093</p>
  <p><b>Invlice Date </b>:  <?php echo  date('Y/m/d')  ?> </p>
  <p><b>Document Type</b> : Invoice</p>
  <br>
  &nbsp;
  &nbsp;
  <p>Supply Type </p>
  </div>
</div>


<div  class="container">



<div class="left">
  <h4>Suppliers Details(Ship From)</h4>
<?php echo "<p class='' > <b> Customer Name : </b> $last_name  $first_name</p>"; ?>
<?php echo "<p class='' > <b> Customer ID : </b> $customer_id</p>"; ?>
<?php echo "<p class='' > <b> Work Order : </b> $work_order</p>"; ?>
<?php echo "<p class='' > <b> Date : </b> $date</p>"; ?>
<?php echo "<p class='' > <b> Vehicle Number : </b> $vehicle_no</p>"; ?>
<?php echo "<p class='' > <b> Model Name : </b> $model_name</p>"; ?>
<?php echo "<p class='' > <b> Mileage : </b> $mileage</p>"; ?>
<?php echo "<p class='' > <b>  Completed Action : </b> $completed_action</p>"; ?>
<?php echo "<p class='' > <b>  Total Cost : </b> $completed_action</p>"; ?>
</div>


<div class="right">
  <h4>Ship To(Place To Delivery)</h4>
<?php echo "<p class='' > <b> Legal Name : </b> $last_name  $first_name</p>"; ?>
<?php echo "<p class='' > <b> Name : </b>  $last_name  $first_name </p>"; ?>
<!-- new var -> address -->
<?php echo "<p class='' > <b> Address : </b> $address</p>"; ?>
<?php echo "<p class='' > <b> Date : </b> $date</p>"; ?>
<!-- new vae state -->
<?php echo "<p class='' > <b> State : </b> $state</p>"; ?>
<!-- new var phone -->
<?php echo "<p class='' > <b> Phone : </b> $phone</p>"; ?>
<!-- new var state code & pan $email-->
<?php echo "<p class='' > <b> State Code : </b> $state_code</p>"; ?>
<?php echo "<p class='' > <b>  PAN No : </b> $pan_no</p>"; ?>
<?php echo "<p class='' > <b>  Email : </b> $email</p>"; ?>
</div>


<!-- ================= Customer Information ================= -->

<div class="right">
  <h4>Customer Details</h4>
<?php echo "<p class='' > <b> Name : </b> $last_name  $first_name</p>"; ?>
<!-- new var -> address -->
<?php echo "<p class='' > <b>Customer Type : </b> Customer Type</p>"; ?>
<?php echo "<p class='' > <b> Phone No. : </b> $phone</p>"; ?>
<!-- new vae state -->
<?php echo "<p class='' > <b> Mobile No. 1 : </b> $phone</p>"; ?>
<?php echo "<p class='' > <b> Mobile No. 2 : </b> $phone</p>"; ?>
<!-- new var phone -->
<!-- new var state code & pan $email-->
<?php echo "<p class='' > <b> Email : </b> $email</p>"; ?>
<?php echo "<p class='' > <b>  Locality : </b> Aurangabad</p>"; ?>
</div>


<div  class="end">
  
<h1>Thanks for Our service...</h1>

</div>
</div>

</body>

