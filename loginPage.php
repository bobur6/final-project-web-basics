<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="loginPageStyle.css">
</head>
<body>

<!-- --------------------------------------------------------------------------------------------------  -->
<!-- ------------------------------------------- PHP --------------------------------------------------  -->
<!-- --------------------------------------------------------------------------------------------------  -->

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $emailError = null;
        $passwordError = null;

        $emailTest =
            strpos($email, '@') !== 0 &&
            strpos($email, '.') + 1 !== strlen($email) &&
            strpos($email, '.') > strpos($email, '@') &&
            strpos($email, '.') !== strpos($email, '@') + 1;

        $passwordTest = 
            $passwordTest = strlen($password) >= 6;

        if(!$emailTest){
            $emailError = 'email жазылуы дұрыс емес (php)';
        }
        if(!$passwordTest){
            $passwordError = 'кемінде 6 символ болу қажет! (php)';
        }

        // тек осыдан кейін 🠓 юзерлерді user.php ден тексеруді бастайды
        if($emailTest && $passwordTest){          
            include 'users.php';
            $loginEmail = false;
            $loginPass = false;            

            for($i=0; $i<count($user); $i++){
                if($email == $user[$i]['email'] && $password == $user[$i]['password']){
                    $loginEmail = true;
                    $loginPass = true;
                    break;
                }
                if($email == $user[$i]['email'] && $password != $user[$i]['password']){
                    $loginEmail = true;
                    $loginPass = false;
                    break;
                }
                if($email != $user[$i]['email'] && $password == $user[$i]['password']){
                    $loginEmail = false;
                    $loginPass = true;
                    break;
                }
                if($email != $user[$i]['email'] && $password == $user[$i]['password']){
                    $loginEmail = false;
                    $loginPass = false;
                    break;
                }
            }            

            if($loginEmail && $loginPass){
                header('Location: ekitap.php');
                exit();
            }

            if($loginEmail && !$loginPass){
                $passwordError = 'пароль дұрыс емес';
            }
            if(!$loginEmail && $loginPass){
                $emailError = 'ондай email тіркелмеген';
            }
            if(!$loginEmail && !$loginPass){
                $emailError = 'ондай email тіркелмеген';
            }
        }
    }
?>


<!-- --------------------------------------------------------------------------------------------------  -->
<!-- ------------------------------------------- HTML -------------------------------------------------  -->
<!-- --------------------------------------------------------------------------------------------------  -->

<div class="container">
    <h1>Login</h1>
    <form id="myForm" method="post" action="">
        <input type="text" id="email" name="email" placeholder="email address">
        <p class="error" id="emailError">
            <?php
                if(isset($emailError))
                    echo $emailError;
            ?>
        </p>
        <input type="password" id="password" name="password" placeholder="password">
        <p class="error" id="passwordError">
            <?php
                if(isset($passwordError))
                    echo $passwordError;
            ?>
        </p>
        <input type="button" onclick="myFunction()" value="Login" id="subm">
    </form>
</div>


<!-- --------------------------------------------------------------------------------------------------  -->
<!-- -------------------------------------- JavaScript-------------------------------------------------  -->
<!-- --------------------------------------------------------------------------------------------------  -->

<script>
    function myFunction() {
        let email = document.getElementById("email").value;
        let password = document.getElementById("password").value;
        let emailError = document.getElementById("emailError");
        let passwordError = document.getElementById("passwordError");

        let emailTest = 
            email.includes("@") && 
            email.includes(".") &&
            email.indexOf("@") !== 0 &&
            email.indexOf(".") + 1 !== email.length &&
            email.indexOf(".") > email.indexOf("@") &&
            email.indexOf(".") !== email.indexOf("@") + 1;

        let passwordTest = password.length >= 6;


        if(!emailTest){
            emailError.innerText = "email жазылуы дұрыс емес";
        } 
        else{
            emailError.innerText = "";
        }

        if(!passwordTest) {
            passwordError.innerText = "кемінде 6 символ болу қажет!";
        }
        else{
            passwordError.innerText = "";
        }


        if(email.trim() == ""){
            emailError.innerText = "іші босқой";
        }
        if(password.trim() == ""){
            passwordError.innerText = "іші босқой";
        }


        if(emailTest && passwordTest){
            document.getElementById("myForm").submit();
        }
    }
</script>


</body>
</html>

