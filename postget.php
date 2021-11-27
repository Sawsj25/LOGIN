<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

if (isset($_GET["empty"])) {
    echo "<p> Enter Your Information </p>";
}
if (isset($_GET["wrong"])) {
    echo "<p><b>Please Use Incorrect Password !!</b></p>";
}

?>
    <style>
@font-face{
    font-family:'Vazir-Bold';
    src: url('./Font/Vazir-Bold.ttf');
}
           body{
               font-family: 'Vazir-Bold';
               color: black;
                background-color:lightblue; 
               text-align: center;
               padding: 40px;
               margin:29px;
           } 
           
           form{
               background-color: white;
               border-radius: 20px;
               border:10px solid grey;
               position: center;
               padding: 50px;
               margin: 120px auto;
               height: 100%;
               width: 20%;
               text-align: center;
           }

           .btn{  
    color: #fff;  
    border: 1px solid white;
    border-radius: 19px;
    background: #337ab7;  
    padding: 17px 20px;  
    margin-left: 70%auto; 
      }

      .username{
          padding: 16px 14px;
          border: 1px solid orange;
          border-radius: 19px;
      }

      .password{
          padding: 16px 14px;
          border: 1px solid orange;
          border-radius: 19px;
      }

      p{
          border: 1px solid green;
          border-radius: 19px;
          padding: 16px 14px;
          color:white;
          background-color: #337ab7;
          font-size: 30px;
      }


    </style>
    <form action="./check.php" method="POST">
    <input type="image" src="./img/yahoo_homepage_en-US_s_f_p_bestfit_homepage.png" width="50%" height="50%">
    <h1>Login</h1>
    <!-- <label>UserName</label> -->
       <input type="text" name="user" class="username" placeholder="User Name" >
       <br></br>
       <!-- <label>Password</label> -->
        <input type="password" name="password" class="password" placeholder="Password">
        <br></br>
       <input type="submit" class="btn" name="submit" value="Login">
       

    </form>
</body>
</html>