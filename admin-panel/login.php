<?php  ob_start(); ?>


<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
    <html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<title> Responsive Login and Signup Form </title>-->

        <!-- CSS -->
        <!-- <link rel="stylesheet" href="css/style.css"> -->
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

<style>
            /* Google Fonts - Poppins */
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

 *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
 .container{
    height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #4070f4;
    column-gap: 30px;
}
 .form{
    position: absolute;
    max-width: 430px;
    width: 100%;
    padding: 30px;
    border-radius: 6px;
    background: #FFF;
}
.form.signup{
    opacity: 0;
    pointer-events: none;
}
.forms.show-signup .form.signup{
    opacity: 1;
    pointer-events: auto;
}
.forms.show-signup .form.login{
    opacity: 0;
    pointer-events: none;
}
header{
    font-size: 28px;
    font-weight: 600;
    color: #232836;
    text-align: center;
}
form{
    margin-top: 30px;
}

.form .field{
    position: relative;
    height: 50px;
    width: 100%;
    margin-top: 20px;
    border-radius: 6px;
}

.field input,
.field button{
    height: 100%;
    width: 100%;
    border: none;
    font-size: 16px;
    font-weight: 400;
    border-radius: 6px;
}

.field input{
    outline: none;
    padding: 0 15px;
    border: 1px solid#CACACA;
}

.field input:focus{
    border-bottom-width: 2px;
}


.field button{
    color: #fff;
    background-color: #0171d3;
    transition: all 0.3s ease;
    cursor: pointer;
}

.field button:hover{
    background-color: #016dcb;
}


@media screen and (max-width: 400px) {
    .form{
        padding: 20px 10px;
    }
    
}

  </style>

 
                        
    </head>
    <body>

    <

<?php
  // session_start();
 if(isset($_POST['login'])) {
     $conn = mysqli_connect("localhost", "root", "", "job-card") or die("Connection Failed");

     $email = $_POST['email'];
     $password = $_POST['$password'];

     $sql = "INSERT INTO login (email, password) values ('$email', $password)";

     $result = mysqli_query($conn, $sql) or die("Query Failed");

     if($result === true){
      header('Location:../index.php');
     }

     $conn = mysqli_close();

     session_abort();
 }


 ob_end_flush(); 

?>

        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Login</header>
                    <form action="<?php  ?>">
                        <div class="field input-field">
                            <input name="email" type="email" placeholder="Email" class="input">
                        </div>

                        <div class="field input-field">
                            <input name="password" type="password" placeholder="Password" class="password">
                        </div>

                        <div class="field button-field">
                            <button name="login" class="login" ><a href="../index.php">Login</a></button>
                        </div>
                    </form>

                </div>

            </div>
        </section>

    </body>
</html>
