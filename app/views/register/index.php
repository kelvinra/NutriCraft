<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/register.css">
    <script src="../../../public/js/register.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Register: create account NutriCraft</title>
</head>
<body>
    <div class="back">
        <div class="registercontainer">
            <div class="header">
                <img src="../../../assets/NutriCraft.svg" alt="">
                <h2>Register</h2>
                <h5>Already have an account? <a href="/?login">Login</a></h5>
            </div>
            <div class="forms">
            <form action="../../../server/controller/auth/Register.php" method="POST">
            <h4>Name</h4>
            <div class="namecontainer" id="namecontainer">
                <i class="fas fa-user"></i>
                <input class="nameinput" type="text" placeholder="Name" name="uname" id="uname" onchange=validateUname() required>
            </div>
            <p id="unameInvalid"></p>
            <h4>Email</h4>
            <div class="emailcontainer" id="emailcontainer">
                <i class="fas fa-envelope"></i>
                <input class="emailinput" type="email" placeholder="Email" name="email" id="email" onchange=validateEmail() required>
            </div>
            <p id="emailInvalid"></p>
            <h4>Phone Number</h4>
            <div class="phonenumbercontainer" id="phonenumbercontainer">
                <i class="fas fa-phone"></i>
                <input class="phonenumberinput" type="text" placeholder="Phone Number" name="phoneNumber" id="phoneNumber" onchange=validatePhoneNumber() required>
            </div>
            <p id="phoneNumberInvalid"></p>
            <h4>Password</h4>
            <div class="passwordcontainer" id="passwordcontainer">
                <i class="fas fa-lock"></i>
                <input class="passwordinput" type="password" placeholder="Password" name="psw" id="password" onchange=validatePassword() required>
            </div>
            <p id="passwordInvalid"></p>
        </div>
        <button type="submit" class="register" id="submitButton">Register</button>
        </form>
        </div> 
    </div>
</body>
</html>