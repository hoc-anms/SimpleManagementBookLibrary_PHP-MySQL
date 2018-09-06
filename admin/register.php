<!DOCTYPE html>
<html>

<head>
    <title>Management Categories Book Library</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php
//Navar
include_once './templates/categories-header.php'
?>
<br><br><br>

<div class="container">
    <div class="card mx-auto" style="width: 30rem;">
        <div class="card-header"><i class="fa fa-bullhorn">&nbsp;&nbsp;</i><span class="text-success">Register</span></div>
         <div class="card-body">
            <form id="register_form" onsubmit="return false" autocomplete="off">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username">
                    <small id="u_error" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="password1">Password</label>
                    <input type="password" name="password1" class="form-control" id="password1" placeholder="Password">
                    <small id="p1_error" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="password2">Re-enter Password</label>
                    <input type="password" name="password2" class="form-control" id="password2" placeholder="Password">
                    <small id="p2_error" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="usertype">Usertype</label>
                    <select name="usertype" class="form-control" id="usertype">
                        <option>Choose User Type</option>
                        <option value="Admin">Admin</option>
                        <option value="Other">Other</option>
                    </select>
                    <small id="t_error" class="form-text text-muted"></small>

                </div>
                <button type="submit" name="user_register" class="btn btn-primary">
                    <span class="fa fa-user"></span>&nbsp;Register
                </button>
                <span><a href="categories-index.php">Login</a></span>
            </form>
        </div>


    </div>
</div>

<script type="text/javascript" >$(document).ready(function(){
        $("#register_form").on("submit",function(){
            var status = false;
            var name = $("#username");
            var email = $("#email");
            var pass1 = $("#password1");
            var pass2 = $("#password2");
            var type = $("#usertype");

            var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);
            if(name.val() == "" || name.val().length < 6){
                name.addClass("border-danger");
                $("#u_error").html("<span class='text-danger'>Please Enter Name and Name should be more than 6 char</span>");
                status = false;
            }else{
                name.removeClass("border-danger");
                $("#u_error").html("");
                status = true;
            }
            if(!e_patt.test(email.val())){
                email.addClass("border-danger");
                $("#e_error").html("<span class='text-danger'>Please Enter Valid Email Address</span>");
                status = false;
            }else{
                email.removeClass("border-danger");
                $("#e_error").html("");
                status = true;
            }
            if(pass1.val()==""||pass1.val().length<8){
                pass1.addClass("border-danger");
                $("#p1_error").html("<span class='text-danger'>Please Enter more than 8 digit password</span>");
                status = false;
            }else{
                pass1.removeClass("border-danger");
                $("#p1_error").html("");
                status = true;
            }
            if(pass2.val()==""||pass2.val().length<8){
                pass2.addClass("border-danger");
                $("#p2_error").html("<span class='text-danger'>Please Enter more than 8 digit password</span>");
                status = false;
            }else{
                pass2.removeClass("border-danger");
                $("#p2_error").html("");
                status = false;
            }
            if(type.val()=="") {
                type.addClass("border-danger");
                $("#t_error").html("<span class='text-danger'>Let's a usertype</span>");
                status = false;
            }else {
                type.removeClass("border-danger");
                $("#t_error").html("");
                status=true;
            }
            if(pass1.val()==pass2.val()){

            }else {
                pass2.addClass("border-danger");
                $("#p2_error").html("<span class='text-danger'>Password is not matched</span>");
                status=false;
            }
        })
    })</script>


</body>
</html>