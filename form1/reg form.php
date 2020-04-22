<!DOCTYPE html> 
<html> 
    <head>
        <title>registration</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    <style>

               .bo
        {
       background-image: url(courses.jpeg);
            width: 100%;
            height: 100%;
            background-size: cover ;
            background-attachment: fixed ;
            background-position: center
             }
  
        .lable
        {
        font-size: 25px    
        }
        
        
        input
        {
        padding: 8px;
            position: relative;
            bottom: 33px;
            left: 20px
        }
        .la
        {
            position: relative;
            right: 250px
        }
        .button
        {
         position: relative;
        top:30px ;
         right: 200px;
        border-radius:20px;
            padding: 5px ;
            padding-right: 50px;  
         margin-right: 250px;
            text-align: center;
            font-size: 20px
            
            
         
        }
 
        
        .reg
        {
        font-size: 50px;
        position: relative;
            bottom:45px ;
            right: 5px;
            font-style:oblique;
            font-weight: bold
           
           
        }
        .button:hover
        {
            background-color: #5e5efa;
   transform:rotate(360deg);
    transition-duration: 2s;
        }
     
        .layout
        {
    height:100%;
    width: 100%;
background-color: rgba(56,72,190,.3);
            position: absolute;
            top: 0px;
        }
      
        
        .bbb
        {
            border: solid;
            width:680px;
            height: 500px;
            position: relative;
            top:100px;
            left: 170px
        }
        
        .form
        {
        position: relative;
            left: 90px
        }
        
        
     
        
        </style>
    </head>
    <body class="bo">
      
        <section class="fil layout">

            <div class="container text-center ">
                <div class="row mt-5">
                    <div class="col-md-12 ">
   <div class="bbb">
            <legend class="reg mt-5">Registration</legend>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" class="form-group form">
            <div class="la"><label  class="lable"> username</label> </div> <input type="text" name="uname"placeholder=" type your name"><br>
            <div class="la"><label class="lable" >  email</label></div>  <input   type="email" name="email"placeholder=" type your email" ><br>
            <div class="la"><label class="lable" > phone</label> </div> <input type="number" name="phone"placeholder=" type your phone"><br>
            <h6><input class="button " type="submit"name ="registration" value = "registration"> </h6><br>
</form> 
                        </div>
                </div>
            </div>
            </div>
                      
        </section>
    
    </body>
</html>
<?php 
session_start();
$conn=mysqli_connect("localhost","root","","route");
if($conn)
#echo" connceted <br>";
if(isset($_POST['registration'])){
    if (isset($_POST['uname'])&&!empty( $_POST['uname'])) {
        $name= $_POST['uname'];
        $_SESSION['username'] = $_POST['uname'];
        
    } else {
    echo"<br>invaled username<br>";
    }

    if (isset($_POST['email'])&&!empty( $_POST['email'])) {
    $email=$_POST['email'];
     } else {
    echo"<br>invaled email<br>";
     }
     if (isset($_POST['phone'])&&!empty( $_POST['phone'])) {
        $phone=$_POST['phone'];
        }else {
        echo"<br>invale phone<br>";
        }
        if(!empty($name) && !empty($email) && !empty($phone)){
            $query ="INSERT INTO user (name,email,phone)
        
            VALUES('$name','$email','$phone')";
            $result = mysqli_query($conn,$query);
            if ($result) {
                echo"data is inserted";
            }
            
            
    }
    else
    echo"data not inserted";
}
?>