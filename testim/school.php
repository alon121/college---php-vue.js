<?php
require_once('../data/bl.php');
require_once('../data/dal.php');
?>
<?php

$showusers = new bl();


$result =  $showusers->SelectAlladmins('administrator');
echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row != $result)
{
echo "<tr>";
echo "<td>" . $row[0][name] . "</td>";
echo "<td>" . $row['LastName'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>
    
  <html>  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/welcome.css">
    <script src="js/nav.js"></script>
</head>

<body>


    <div id="flipkart-navbar">
        <div class="container">

            <ul>
                <li class="upper-links"><a class="links" href="#">School </a></li>
                <li class="upper-links"><a class="links" href="ht#">administrator </a></li>
                <li class="upper-links"><a class="links" href="#">Logout </a></li>

            </ul>


            <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰ </span></h2>
            <img src="img/logo.png" class="logo">
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
                    <img src="img/alon.jpg" class="profilimg">

                    <h1>welcome Alon</h1>
                    <h3> Administrator</h3>
                    <a href="../login/logout.php"> logout</a>
                    <a href="../login/logout.php"> edit profile</a>

                </div>
                
                 <div class="jumbotron admins">

                    <h1>adminstrators:</h1>
                <div class="adminlist">
                <img src="img/alon.jpg" class="profilimg-thum">
                    <span> alon </span>
                    <span> administrator </span>
                    <span> nextmedia4@gmail.com </span>
                    <span> 0505556693 </span>
                    <hr/>
                     </div>
                          <div class="adminlist">
                <img src="img/alon.jpg" class="profilimg-thum">
                    <span> alon </span>
                    <span> administrator </span>
                    <span> nextmedia4@gmail.com </span>
                    <span> 0505556693 </span>
                    <hr/>
                     </div>
                               <div class="adminlist">
                <img src="img/alon.jpg" class="profilimg-thum">
                    <span> alon </span>
                    <span> administrator </span>
                    <span> nextmedia4@gmail.com </span>
                    <span> 0505556693 </span>
                    <hr/>
                     </div>

                     
                </div>
                
            </div>


            <div class="col-md-9 actions">

           
                <div class="col-md-2">
                    <div class="jumbotron">
                        <img src="img/edit.png" class="icons" alt="edit course">

                     <h5> Administrator</h5>


                    </div>
                </div>
                <div class="col-md-2">
                    <div class="jumbotron">
                        <img src="img/edit.png" class="icons" alt="edit course">

                        <h5> Administrator</h5>


                    </div>
                </div>
                <div class="col-md-2">
                    <div class="jumbotron">
                        <img src="img/edit.png" class="icons" alt="edit course">

                        <h5> Administrator</h5>


                    </div>
                </div>
                       <div class="col-md-2">
                    <div class="jumbotron">
                        <img src="img/edit.png" class="icons" alt="edit course">

                        <h5> Administrator</h5>


                    </div>
                </div>
                <div class="col-md-2">
                    <div class="jumbotron">
                        <img src="img/edit.png" class="icons" alt="edit course">

                        <h5> Administrator</h5>


                    </div>
                </div>
                <div class="col-md-2">
                    <div class="jumbotron">
                        <img src="img/edit.png" class="icons center-block" alt="edit course">

                        <h5> Administrator</h3>


                    </div>
                </div>



            </div>

        </div>
    </div>



</body>

</html>
