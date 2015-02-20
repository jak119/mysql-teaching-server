<?php 
    $user=$_POST["login_name"];
    $user_pw=$_POST["df_pass"];
    $output=exec("/usr/bin/createdb $user $user $user_pw"); 
?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
      <title>SMGteach2 MySQL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  </head>
  <body>     
        <div class="header-banner">
          <div class="container">
            <h1>SMGteach2 MySQL</h1>
          </div>
        </div>
        <div class="container">
          <h2>User Created Successfully</h2>
        </div>
    <style>
         input { display:block; margin: 20px 0; }
         .header-banner { 
           background-color: #a71930; 
           padding: 10px 20px;
           color: #f8f8f8;
         }
         .form-container {
           max-width: 500px;
           margin: 0 auto;
         }
         .footer {
           background-color: #333;
           margin-top: 150px;
           padding: 20px;
          }
           
    </style>
  </body>
</html>