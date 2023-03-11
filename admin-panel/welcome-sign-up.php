<style>
    *{
        text-decoration:none;
        list-style-type:none;
    }
    body{
        display: flex;
        height: 120vh;
        width: 95%;
        opacity: 0.8;
        background-image: radial-gradient(#444cf7 0.5px, #e5e5f7 0.5px);
        background-size: 10px 10px;
        padding:1rem 2rem;
        font-family:sans-serif;
        overflow-x:hidden;
    }

    html{
        font-size:62.5%;
    }

    nav {
        border:2px solid red;
        display: flex;
        flex-direction:column;
        text-align:center;
        width:100%;
    }

    nav h1 {
        font-size:2rem;
    }

    nav a {
        font-size:1.5rem;
        border:2px solid ;
        padding:1rem 1.2rem;
        border-radius:.5rem;
        transition:.3s;
        
    }
    nav a:hover{
        box-shadow:2px 3px 4px rgba(0,0,0,0.5);
        text-shadow:1px 1px 1px rgba(0,0,0,0.5);
    }
</style>

<?php

$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
// $customer_id = $_POST['customer_id'];
// $work_order = $_POST['work_order'];
// $date = $_POST['date'];
// $model_name = $_POST['model_name'];
// $vehicle_no = $_POST['vehicle_no'];
// $mileage = $_POST['mileage'];
// $report = $_POST['report'];
// $completed_action = $_POST['completed_action'];
// $total_cost = $_POST['total_cost'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcom <?php echo $first_name ?></title>
</head>
<body>





<nav>
<h1>Services We Provide</h1>
 <ul>
    <li><a href="book-now/job-card.php"><b>Create Job Card</b></a></li>
 </ul>    
</nav>

<!-- <?php echo "<p class='' > <b> Customer Name : </b> $last_name  $first_name</p>"; ?> -->



    
</body>
</html>


