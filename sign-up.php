

<?php  
 
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["firstname"]))  
      {  
           $error = "<label class='text-danger'>Enter firstname</label>";  
      }  
      else if(empty($_POST["lastname"]))  
      {  
           $error = "<label class='text-danger'>Enter lastname</label>";  
      }  
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter email</label>";  
      }  else if(empty($_POST["password"]))  
      {  
           $error = "<label class='text-danger'>Enter password</label>";  
      }  
      else  
      {  
           if(file_exists('user.json'))  
           {  
                $final_data=fileWriteAppend();
                if(file_put_contents('user.json', $final_data))  
                {  
                     $message = "<label class='text-success'>Data added Success fully</p>";  
                }  
           }  
           else  
           {  
                $final_data=fileCreateWrite();
                if(file_put_contents('user.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File created and  data added Success fully</p>";  
                }  
                
           } 
           echo "
               <script>
                   location.href='login.php';
               </script> 
           ";
      }  
 }  
 function fileWriteAppend(){
        $current_data = file_get_contents('user.json');  
        $array_data = json_decode($current_data, true);  
        $extra = array(  
             'firstname'    =>     $_POST['firstname'],  
             'lastname'     =>     $_POST["lastname"],  
             'email'        =>     $_POST["email"],  
             'password'     =>     $_POST["password"]
             
        );  
        $array_data[] = $extra;  
        $final_data = json_encode($array_data); 
        return $final_data;
 }
 function fileCreateWrite(){
        $file=fopen("user.json","w");               
        $array_data=array();
        $extra = array(  
             'firstname'    =>     $_POST['firstname'],  
             'lastname'     =>     $_POST["lastname"],  
             'email'        =>     $_POST["email"],  
             'password'     =>     $_POST["password"]
             
        );  
        $array_data[] = $extra;  
        $final_data = json_encode($array_data); 
        fclose($file);
        return $final_data;

 }
 ?>  

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
    <header>
       <div class="navbar navbar-fixed-top navbar-inverse">
        <div class="navbar-inner">
            <div class="container">
                <a href="#" class="brand">Gameing Consoles</a>
                <div class="nav-collapse collapse navbar-responsive-collapse">
                    <ul class="nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Games</a></li>
                       
                    <form action="#" class="navbar-search pull-left">
                        <input type="text" placeholder="Search &hellip;" class="search-query">
                    </form>
                    <ul class="nav pull-right">                        
                        <li><a href="login.php">Login</a></li>
                        <li class="divider-vertical"></li>
                        <li><a href="sign-up.html">Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </header>
    <div class="container">
        <div class="row">
            <div class="span12">
                <h1>Sign Up</h1>
                <h4 class="muted">Fill in this form to register with us.</h4>
                <hr>
                <form class="form-horizontal" method="post">
                    <div class="control-group">
                        <label class="control-label">First Name</label>
                        <div class="controls">
                            <input type="text"name="firstname" placeholder="First Name">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Last Name</label>
                        <div class="controls">
                            <input type="text" name="lastname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Your Email</label>
                        <div class="controls">
                            <input type="text" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Password</label>
                        <div class="controls">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Confirm Password</label>
                        <div class="controls">
                            <input type="password" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
                           <?php  
                        if(isset($message))  
                        {  
                             echo $message;  
                        }  
                        ?>  
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer section -->
    <div class="container">
        <hr>
        <div class="row">
            <div class="span12">
                <p class="pull-left">Copyright &copy; 2013 Gadget Store, Inc. All Right Reserved</p>
                <p class="pull-right"><a href="user-agreement.html">Privacy Policy</a> | <a href="user-agreement.html">Terms of Use</a></p>
            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
