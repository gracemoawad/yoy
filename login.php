<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css"/>
  
</head>
<body>              

    
   
<section>
        <div id="form-box">
                <form action="login2.php" method = "POST" onsubmit = "return checkall()">
                    <h2>login</h2>
                    <div id="inputbox">
                        <input type="email" id="email" name="email" onblur = "checkemail()" placeholder="Email"  required>
                        <span id = "errmail"></span>
                    </div>
                    <div id="inputbox">
                        <input type="password" name="password" id="password" onblur = "checkpassword()" placeholder="password(6+ characters)" required>
                        <span id = "errpass"></span>
                    </div>
                    <div id="forget">
                        <label for=""><input type="checkbox">Remember Me </label></br>
                        <a href="forgot.php" >Forgot password</a>
                    </div>
                    <div id="button">
                        <input type="submit" value="login" id="value">
                    </div>
                    <div id="registre"><p>Don't have a account&nbsp;<a href="/register/register.php">Register</a></p></div>
                </form>
            </div>
       
    </section> 

    
   <script>
     function checkemail(){
        let email = document.getElementById("email").value;
        let msg = document.getElementById("errmail");
         if(email.match(/\b\w+@\w+\.[a-zA-Z]+\b/)){
            msg.style.visibility = "hidden";
            return true;
         }
          else if(email == ""){
            msg.innerHTML = "your email must be like : example123@example.example";
            msg.style.color = "red";
            msg.style.visibility = "visible";
            return false;
          }
          else{
            msg.innerHTML = "your email must be like : example123@example.example";
            msg.style.color = "red";
            msg.style.visibility = "visible";
            return false;
          }
     }
     function checkpassword(){
        let password = document.getElementById("password").value;
        let msg = document.getElementById("errpassword");
         if(password.length<6){
           msg.innerHTML="your password must be at least 6 characters";
           msg.style.color = "red";
           msg.style.visibility="visible";
           return false;
        } 
          else{
            msg.style.visibility="hidden";
            return true;
          }
     }
     function checkall(){
        if(checkemail() && checkpassword()) return true;
        return false;
     }
   </script>
</body>
</html>

