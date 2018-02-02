<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> AlonSoft - courses </title>
    <link rel="stylesheet" href="../fw/bootsrtrap.min.css">
    
    <script src="../fw/jquery.min.js"></script>

    <script src="../fw/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/welcome.css">
 
</head>

<body>


    <div id="flipkart-navbar">
        <div class="container">

            <ul>
                <li class="upper-links"><a class="links" href="school.php">School </a></li>
                <li class="upper-links"><a class="links" href="ht#">administrator </a></li>
                <li class="upper-links"><a class="links" href="#">Logout </a></li>

            </ul>


            <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰ </span></h2>
            <img src="../img/logo.png" class="logo">
        </div>

    </div>

    <div id="mySidenav" class="sidenav">
        <div class="container" style="background-color: #2874f0; padding-top: 10px;">
            <span class="sidenav-heading">Home</span>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        </div>
        <a href="http://clashhacks.in/">Link</a>
        <a href="http://clashhacks.in/">Link</a>
        <a href="http://clashhacks.in/">Link</a>
        <a href="http://clashhacks.in/">Link</a>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="jumbotron userlogin">
                    <img src="../img/alon.jpg" class="profilimg">

                    <h1>welcome Alon</h1>
                    <h3> Administrator</h3>
                    <a href="../login/logout.php"> logout</a>
                    <a href="../login/logout.php"> edit profile</a>

                </div>
                
                 <div class="jumbotron admins">

                    <h1>adminstrators:</h1>
                <div class="adminlist">
                <img src="../img/alon.jpg" class="profilimg-thum">
                    <span> alon </span>
                    <span> administrator </span>
                    <span> nextmedia4@gmail.com </span>
                    <span> 0505556693 </span>
                    <hr/>
                     </div>
                          <div class="adminlist">
                <img src="../img/alon.jpg" class="profilimg-thum">
                    <span> alon </span>
                    <span> administrator </span>
                    <span> nextmedia4@gmail.com </span>
                    <span> 0505556693 </span>
                    <hr/>
                     </div>
                               <div class="adminlist">
                <img src="../img/alon.jpg" class="profilimg-thum">
                    <span> alon </span>
                    <span> administrator </span>
                    <span> nextmedia4@gmail.com </span>
                    <span> 0505556693 </span>
                    <hr/>
                     </div>

                     
                </div>
                
            </div>


            <div class="col-md-9 actions">
<div class="row">
           
                <div class="col-md-2">
                    <div class="jumbotron" id="add" >
                        <img src="../img/add.png" class="icons" alt="edit course">

                     <h5 onclick="show(#addnewadmin)"> add admin</h5>


                    </div>
                </div>
                <div class="col-md-2">
                    <div class="jumbotron">
                        <img src="../img/delete.png" class="icons" alt="edit course">

                        <h5> delete admin</h5>


                    </div>
                </div>
                <div class="col-md-2">
                    <div class="jumbotron">
                        <img src="../img/edit.png" class="icons" alt="edit course">

                        <h5> edit admin</h5>


                    </div>
                </div>
                       
            </div>
                
    <div class="row add" id="addnewadmin">           
    <!--    add admin form -->
<form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
        </div>
                
                
    </div>
    </div>

    <div class="ajaxdiv">
        
        
        
        </div>

   <script src="../js/nav.js"></script>
        <script src="../js/welcome.js"></script>
      <script src="../fw/vuejs.js"></script>

</body>

</html>
