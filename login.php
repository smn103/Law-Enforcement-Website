<?php
ob_start();
   include("new.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myloginid = mysqli_real_escape_string($db,$_POST['loginid']);
      $mypassword = mysqli_real_escape_string($db,$_POST['psw']); 
   // $mydept = mysqli_real_escape_string($db,$_POST['Department']);
      
      $sql = "SELECT loginid FROM login WHERE loginid = '$myloginid' and psw = '$mypassword'";
      $result = mysqli_query($db,$sql);
    if(!$result)
    {
      die('Query failed'.mysqli_error());
    }
  
     
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
           if($myloginid="dea456")
    {
      echo "<script>location.replace('DEA/dea_cases.php')</script>";die();
       
      }
           if($myloginid="fbi123")
    {
      echo "<script>location.replace('FBI/fbi_cases.html')</script>";die();
       
      }
           if($myloginid="pd789")
    {
      echo "<script>location.replace('PD/pd_cases.html')</script>";die();
       
      }

   }
else{
      echo '<script>';
echo 'alert("Login, password or Department do not Match")';
echo '</script>';
    }   }
    ob_end_flush()
?>
















<html lang="en">
   <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <style>
      body, html {
  height: 100%;}
  .centered {
  position: fixed;
  top: 50%;
  left:50%;
  transform: translate(-50%, -50%);
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
<title>The United States Department of Justice</title>
</head>
<body style="background-image: url('50913-istock-638589782.jpg'); background-repeat: no-repeat; background-size: cover;">
          <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="opacity: 0.4;">
            <img src="720px-Seal_of_the_United_States_Department_of_Justice.png" height="150">
            <div class="container">
              <a class="navbar-brand" onclick="document.getElementById('id02').style.display='block'" style="width:auto;"href="#"><strong>About</strong></a>
              <a class="navbar-brand" onclick="document.getElementById('id03').style.display='block'" style="width:auto;"href="#"><strong>Departments</strong></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                </ul>
                <form class="form-inline">
                  <div class="md-form my-0">
                    <a href="home.html" class="btn btn-outline-success my-2 my-sm-0"style="color:white;">Back</a>
                  </div>
                </form>
              </div>
            </div>
          </nav>
   <div class="centered"> 
   <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img src="1200px-Seal_of_the_United_States_Drug_Enforcement_Administration.svg.png"
                        class="card-img-top" style="background-color:#42f5c8;" alt="...">
                    <div class="card-body">
                    <center>    <p class="card-text"><button type="button" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"class="btn btn-success">DEA Login</button></p></center>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img src="FBI.png"
                        class="card-img-top" style="background-color:#4293f5"; alt="...">
                    <div class="card-body">
                    <center>    <p class="card-text"><button type="button" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"class="btn btn-primary">FBI Login</button></p></center>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img src="PD.jpg"
                        class="card-img-top" style="background-color:#42cef5;" alt="...">
                    <div class="card-body">
                        <center><p class="card-text"><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" type="button" class="btn btn-info">PD login</button></p></center>
                    </div>
                </div>
            </div>
        </div>
</div>

<div id="id01" class="modal" >
  
  <form class="modal-content animate" action="login.php" method="post" style="background-color:#f5ad42">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="loginid" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
     <center> <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button></center>
    </div>
  </form>
</div>

<div name="id02" id="id02" class="modal">
  <form class="modal-content animate">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="720px-Seal_of_the_United_States_Department_of_Justice.png" height="150">
    </div>

    <div class="container">
      <div class="alert alert-primary" role="alert">
  Our Mission Statement
</div>
  <p>To enforce the law and defend the interests of the United States according to the law; to ensure public safety against threats foreign and domestic; to provide federal leadership in preventing and controlling crime; to seek just punishment for those guilty of unlawful behavior; and to ensure fair and impartial administration of justice for all Americans.</p>

      <div class="alert alert-info" role="alert">
  About the Department
</div>
<p>The Office of the Attorney General was created by the Judiciary Act of 1789 (ch. 20, sec. 35, 1 Stat. 73, 92-93), as a one-person part-time position.  The Act specified that the Attorney General was to be "learned in the law," with the duty "to prosecute and conduct all suits in the Supreme Court in which the United States shall be concerned, and to give his advice and opinion upon questions of law when required by the President of the United States, or when requested by the heads of any of the departments, touching any matters that may concern their departments."</p>

<p>However, the workload quickly became too much for one person, necessitating the hiring of several assistants for the Attorney General. As the work steadily increased along with the size of the new nation, private attorneys were retained to work on cases.</p>

<p>By 1870, after the end of the Civil War, the increase in the amount of litigation involving the United States had required the very expensive retention of a large number of private attorneys to handle the workload.  A concerned Congress passed the Act to Establish the Department of Justice (ch. 150, 16 Stat. 162), creating "an executive department of the government of the United States" with the Attorney General as its head.</p>

<p>Officially coming into existence on July 1, 1870, the Department of Justice was empowered to handle all criminal prosecutions and civil suits in which the United States had an interest. To assist the Attorney General, the 1870 Act also created the Office of the Solicitor General, who represents the interests of the United States before the U.S. Supreme Court.</p>

<p>The 1870 Act remains the foundation for the Departments authority, but the structure of the Department of Justice has changed over the years, with the addition of the offices of Deputy Attorney General, Associate Attorney General, and the formation of various components, offices, boards and divisions.  From its beginning as a one-man, part-time position, the Department of Justice has evolved into the world's largest law office and the chief enforcer of federal laws.</p>

<p>Thomas Jefferson wrote, “The most sacred of the duties of government [is] to do equal and impartial justice to all its citizens.”  This sacred duty remains the guiding principle for the women and men of the U.S. Department of Justice.</p>
    
</div></form></div>

<div name="id03" id="id03" class="modal">
  <form class="modal-content animate">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <div class="alert alert-success" role="alert">
  <img src="1200px-Seal_of_the_United_States_Drug_Enforcement_Administration.svg.png" height="100" >     Drug Enforcement Administration
</div>
  <p>The mission of the Drug Enforcement Administration (DEA) is to enforce the controlled substances laws and regulations of the United States and bring to the criminal and civil justice system of the United States, or any other competent jurisdiction, those organizations and principal members of organizations, involved in the growing, manufacture, or distribution of controlled substances appearing in or destined for illicit traffic in the United States; and to recommend and support non-enforcement programs aimed at reducing the availability of illicit controlled substances on the domestic and international markets.</p>

      <div class="alert alert-primary" role="alert">
 <img src="FBI.png" height="100" >     Federal Bureau of Investigation
</div>
<p>Todays FBI is an intelligence-driven and threat-focused national security organization with both intelligence and law enforcement responsibilities that is staffed by a dedicated cadre of more than 30,000 agents, analysts, and other professionals who work around the clock and across the globe to protect the U.S. from terrorism, espionage, cyber attacks, and major criminal threats, and to provide its many partners with services, support, training, and leadership.
</p>

<p>Our priority is to help protect you, your children, your communities, and your businesses from the most dangerous threats facing our nation, from international and domestic terrorists to spies on U.S. soil, from cyber villains to corrupt government officials, from mobsters to violent street gangs, from child predators to serial killers. Along the way, we help defend and uphold our nations economy, physical and electronic infrastructure, and democracy. </p>

<div class="alert alert-info" role="alert">
 <img src="PD.jpg" height="100" >     Police Department
</div>

<p>The Police Department is the component of the U.S. Department of Justice responsible for advancing the practice of community policing by the nation's state, local, territorial, and tribal law enforcement agencies through information and grant resources.</p>

<p>Community policing begins with a commitment to building trust and mutual respect between police and communities. It is critical to public safety, ensuring that all stakeholders work together to address our nation's crime challenges. When police and communities collaborate, they more effectively address underlying issues, change negative behavioral patterns, and allocate resources.</p>

    
</div></form></div>

<script>
// Get the modal
var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');
var modal2 = document.getElementById('id03');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal||event.target == modal1||event.target == modal2) {
        modal.style.display = "none";
        modal1.style.display = "none";
        modal2.style.display = "none";
    }
}
</script>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
          
    </body>
</html>
</html>