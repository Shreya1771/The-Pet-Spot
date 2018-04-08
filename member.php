    <?php   
    session_start();  
    if(!isset($_SESSION["sess_user"])){  
        header("location:login.php");  
    } else {  
    ?>  
    <!doctype html>  
    <html>  
    <head>  
    <title>Welcome</title>  
        <style>   
            body{  
                  
        margin-top: 100px;  
        margin-bottom: 100px;  
        margin-right: 150px;  
        margin-left: 80px;  
        background-color: azure ;  
        color: palevioletred;  
        font-family: Georgia;  
        font-size: 100;  
          
            }  
                h2 {  
        color: black;  
        font-family: verdana;  
        font-size: 15px;  
    }  
            h1 {  
        color: black;  
        font-family: Georgia;  
        font-size: 20px;  
    }  
                  
              
        </style>  
    </head>  
    <body background="img\bag1.jpg">  
        <center><h1>You Successfully Entered into our Adoption Forum</h1></center>  
          
    <h2>Welcome, <?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></h2>  
    <p>  
    Post Your Advertisement to give your dog for adoption.
    </p>  
    </body>  
    </html>  
    <?php  
    }  
    ?>  
