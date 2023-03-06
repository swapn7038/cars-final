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
    height: 140vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rebeccapurple;
    column-gap: 30px;
    /* border:3px solid red; */
}

.form{
    height: auto;
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

.btn {
  display: block;
  width: auto;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #ffffff;
  background-color: rebeccapurple;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  outline: none;
  border-radius: 0.25rem;
  margin: 1rem;
  transition: 0.5s;
}

.btn:hover {
  background-color: #000000;
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
.eye-icon{
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    font-size: 18px;
    color: #8b8b8b;
    cursor: pointer;
    padding: 5px;
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
.form-link{
    text-align: center;
    margin-top: 10px;
}
.form-link span,
.form-link a{
    font-size: 14px;
    font-weight: 400;
    color: #232836;
}
.form a{
    color: #0171d3;
    text-decoration: none;
}
.form-content a:hover{
    text-decoration: underline;
}
/* .line{
    position: relative;
    height: 1px;
    width: 100%;
    margin: 36px 0;
    background-color: #d4d4d4;
} */
/* .line::before{
    content: 'Or';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #FFF;
    color: #8b8b8b;
    padding: 0 15px;
} */
.media-options a{
    display: flex;
    align-items: center;
    justify-content: center;
}

a.facebook{
    color: #fff;
    background-color: #4267b2;
}

a.facebook .facebook-icon{
    height: 28px;
    width: 28px;
    color: #0171d3;
    font-size: 20px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #fff;
}
.facebook-icon,
img.google-img{
    position: absolute;
    top: 50%;
    left: 15px;
    transform: translateY(-50%);
}
img.google-img{
    height: 20px;
    width: 20px;
    object-fit: cover;
}
a.google{
    border: 1px solid #CACACA;
}
a.google span{
    font-weight: 500;
    opacity: 0.6;
    color: #232836;
}

@media screen and (max-width: 400px) {
    .form{
        padding: 20px 10px;
    }
    
}

        </style>
                        
    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Get Your Job Done</header>
                    <form action="job-card-submitted.php" method="post">

                        <div class="field input-field">
                            <input name="first_name" type="text" placeholder="First Name..." class="input">
                        </div>

                        <div class="field input-field">
                            <input name="last_name" type="text" placeholder="Last Name..." class="input">
                        </div>

                        <div class="field input-field">
                            <input name="customer_id"  type="number" placeholder="Customer Id..." class="input">
                        </div>

                        <div class="field input-field">
                            <input name="work_order"  type="number" placeholder="Work Order" class="input">
                        </div>

                        <div class="field input-field">
                            <input name="date" type="date" class="input">
                        </div>

                        <div class="field input-field">
                            <input name="vehicle_no" type="number" placeholder="Vehicle Number..." class="input">
                        </div>

                        <div class="field input-field">
                            <input name="mileage" type="number" placeholder="Mileage..." class="input">
                        </div>

                        <div class="field input-field">
                            <input name="report" type="text" placeholder="Reporte..." class="input">
                        </div>

                        <div class="field input-field">
                            <input name="completed_action" type="textarea" placeholder="Completed Action..." class="input">
                        </div>


                        <div class="field input-field">
                            <input name="total_cost" type="number" placeholder="Total Cost" class="input">
                        </div>

                        <input class="btn" type="submit">

                    </form>
                    </div>
                </div>

            </div>

            <!-- Signup Form -->

          

            

            </div>
        </section>
    </body>
</html>
