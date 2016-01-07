<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Send Message</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })

    </script>

    <script src="js/backpacker.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

   <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation" >
        <div class="container" height>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">BackPacker</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <a class="navbar-brand" href="index.php" style = "float:left; margin-right:0px;">BackPacker</a>
              <div style = "height: 60px;width:50%; margin-left:0px;margin-right:10px;float:left;">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="search.php">Search</a>
                    </li>
                    <li>
                        <a href="recommend.php">Find</a>
                    </li>
                    <li>
                        <a href="chat.php">Chat</a>
                    </li>
                    <li>
                        <a href="#">about us </a>
                    </li>
                    <li>
                        <div id="log"></div>
                    </li>
                </ul>            
            </div>
            <div id = "menuright" style="margin-left:200px;">
                <!-- <input placeholder="search" type="text" spellcheck="false" value="" id="search"
                            style ="line-height: 21px; height: 28px;
                                        float:left; border-radius:3px; border:1px solid #AEAEAE; padding-left:8px;">  -->
             <?php
            if(isset($_SESSION['login_user'])){  //detect if there is an login user
            $show='
                                          <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Hello '.$_SESSION['login_user']. '
                                            <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                              <li><a href="#">New Post</a></li>
                                              <li><a href="my_post.php">My Post</a></li>
                                <li><a href="send.php">Send Message</a></li>
				<li><a href="message.php">My Message</a></li>
                                              <li><a href="logout.php">Log out</a></li>
                                            </ul>
                                          </div>';
            }
            else{
            $show='<a href="login.php" class="loginbut">login</a> 
                   <a href="signup.php" class="signbut">signup</a>';

            }
            ?> 

            <?php           
                echo $show;     
          ?>    
                             
            </div>
        </div>
    </nav>




    <div style="margin-left:auto; margin-right:auto;position:relative;">
        
        <div style="width:100%; margin-left:auto; margin-right:auto;">
            <div class="container" style="margin-left:auto; margin-right:auto;">
              <h1 style ="margin-top:150px; width:60%; margin-left:auto; margin-right:auto; color:white" class="text-center">Send Message</h1>
              

              <form role="form" action="" method="POST" name="message_form" onsubmit="return validateForm()">
                <div class="form-group">
                  <!-- <label for="comment;" style="width:60%; margin-left:auto; margin-right:auto">Comment:</label> -->

                  <!-- <textarea class="form-control" row = "10" id="title"></textarea> -->
                  <textarea name="sendToUser" class="form-control" rows="1" id="comment" placeholder="To Username: " style="width:60%; margin-left:auto; margin-right:auto; margin-bottom:10px"></textarea>
                 
                  <!-- <textarea class="form-control" row = "10" id="title"></textarea> -->
                  <textarea name="messageContext" class="form-control" rows="20" id="comment" placeholder="Share your incredible idea with others!" style="width:60%; margin-left:auto; margin-right:auto; margin-bottom:10px"></textarea>
                    <div class="form-group" style="margin-left:auto; margin-right:auto; width:60%">
                   <input type="submit" name="submit" class="btn btn-primary btn-m active" style="width:15%;"value="Send">
                   </div>
                </div>
                <!-- <select name="location">
                <option value="Urbana">Urbana</option>
                <option value="Champaign">Champaign</option>
                <option value="Chicago">Chicago</option>
                <option value="New York">New York</option>
                </select> -->
                
                <script>
                function validateForm() {
		    var x = document.forms["message_form"]["sendToUser"].value;
  		    var y = document.forms["message_form"]["messageContext"].value;
			console.log(x);
			console.log(y);  		    
		    if (x == null || y == null || x == "" || y == "") {
		        alert("please fill out all of the fields");
		           return false;
    
			}

		}
                </script>
              </form>
              <?php
                      if(isset($_POST['submit']))
                        {
                        $servername = "engr-cpanel-mysql.engr.illinois.edu";
                        $username= "backpack_zbc";
                        $password="123456";
                        $dbname="backpack_user";

                        $su_toUser = $_POST['sendToUser'];
                        $su_content = $_POST['messageContext'];
                        $su_username = $_SESSION['login_user'];

                          if ($su_username == "" || $su_toUser == "" || $su_content == ""){
                        }                        
                        else{
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            $sql = "INSERT INTO message (fromUser, toUser, message) 
                                  VALUES('$su_username','$su_toUser','$su_content')";
                            mysqli_query($conn,$sql);
                            echo "<script>window.location.replace('http://backpacker.web.engr.illinois.edu/message.php');</script>";
         
                            }
                        }
                           
              ?>
            </div>
        </div>
    </div>
</div>

</body>

</html>