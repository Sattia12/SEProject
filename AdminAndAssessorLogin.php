
<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="utf-8">


<title>login page</title>
<link rel="stylesheet" href="login1.css" type="text/css">


</head>
<body>

<header>

<div class="header">
   <h1>Log-in page</h1>
</div>
         
</header>

<?php
$msg='LOG IN';
if (isset($_GET['login']) && !empty($_GET['username']) 
               && !empty($_GET['password'])) {
				
               if ($_GET['username'] == 'valandpo' && 
                  $_GET['password'] == 'val01') {
                  header("Location: loginpage.html");
                  
                 
               }else {
                  $msg = 'Wrong username or password';
               }
            }
?>
<div class = "form">
      
      <form role = "form" method = "GET">

         <h4><?php echo $msg; ?></h4>
         
         <input type = "text"
            name = "username" placeholder = "username" 
            required autofocus></br>

         <input type = "password"
            name = "password" placeholder = "password" required>

         <button class = "button" type = "submit" 
            name = "login">Login</button>
      </form>
         
   
      
   </div> 
 
 
</body>
</html>
