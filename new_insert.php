<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>US Department of Justice</title>
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
 body, html {
  height: 100%;}
 .centered {
  position: fixed;
  top: 65%;
  left: 50%;
  transform: translate(-50%, -50%);
   transform: translate(-50%, -50%);
  height: 750px;
        
  
         overflow-x: hidden;
         overflow-y: auto;
}
</style>
</head>
<body style="background-image: url('images.jpg'); background-repeat: no-repeat; background-size: cover;">
<nav class="navbar navbar-light" style="background-color: #87d9e1;">
  <a class="navbar-brand" href="#">
    <img src="header-logo_bronze-resized-5-2.png" height="100" class="d-inline-block align-top" alt="">
  </a>

  <form class="form-inline" method="post" action="log_out.php">
                  <div class="md-form my-0">
                    <a href="../login.php" class="btn btn-outline-info" style="color:black;">Logout</a>
                  </div>
                </form>
</nav>
            
  <div class="centered" >
            
           <div class="container">
                <div class="jumbotron" style="opacity: 0.8">
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-12 mb-4 white-text text-center"> <h5><strong>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "law_enforcement");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_POST['CriminalSubmit'])){
$criminal_id = mysqli_real_escape_string($link, $_REQUEST['crid']);
$name = mysqli_real_escape_string($link, $_REQUEST['cname']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$no_of_crimes = mysqli_real_escape_string($link, $_REQUEST['no_of_crimes']);
$latest_crime = mysqli_real_escape_string($link, $_REQUEST['latest_crime']);
$jurisdiction = mysqli_real_escape_string($link, $_REQUEST['jurisdiction']);
$sentence = mysqli_real_escape_string($link, $_REQUEST['sentence']);

$sql = "INSERT INTO criminal (criminal_id,name,age,no_of_crimes,latest_crime,jurisdiction,sentence) VALUES ($criminal_id,'$name',$age,$no_of_crimes,'$latest_crime','$jurisdiction',$sentence)";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.<br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}

if (isset($_POST['CaseSubmit'])){
$case_id = mysqli_real_escape_string($link, $_REQUEST['caseid']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$dept = mysqli_real_escape_string($link, $_REQUEST['dept']);
$drugs = mysqli_real_escape_string($link, $_REQUEST['drugs']);
$type = mysqli_real_escape_string($link, $_REQUEST['type']);
$category = mysqli_real_escape_string($link, $_REQUEST['category']);
$rating = mysqli_real_escape_string($link, $_REQUEST['rating']);
$cr_id = mysqli_real_escape_string($link, $_REQUEST['crid']);
$bid = mysqli_real_escape_string($link, $_REQUEST['bid']);

if ($dept=="DEA")
{
  $sql = "INSERT INTO dea_cases (case_no,case_name,drugs_associated,criminal_id,badge_id) VALUES ($case_id,'$name','$drugs',$cr_id,$bid)";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.<br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
if ($dept=="PD")
{
  $sql = "INSERT INTO pd_cases (case_no,case_name,type,category,rating,criminal_id,badge_id) VALUES ($case_id,'$name','$type','$category','$rating',$cr_id,$bid)";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.<br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
if ($dept=="FBI")
{
  $sql = "INSERT INTO fbi_cases (case_no,case_name,type,category) VALUES ($case_id,'$name','$type','$category')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.<br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
}

if (isset($_POST['OfficerSubmit'])){
$badge_id = mysqli_real_escape_string($link, $_REQUEST['bid']);
$team_id = mysqli_real_escape_string($link, $_REQUEST['tid']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$cr_arrested = mysqli_real_escape_string($link, $_REQUEST['cr']);
$dept = mysqli_real_escape_string($link, $_REQUEST['dept']);
$Location = mysqli_real_escape_string($link, $_REQUEST['loc']);
$position=mysqli_real_escape_string($link, $_REQUEST['position']);
$cases=mysqli_real_escape_string($link, $_REQUEST['cases']);
$major=mysqli_real_escape_string($link, $_REQUEST['major']);

$sql = "INSERT INTO officers (badge_id,o_name,age,cr_arrested,dept,location) VALUES ($badge_id,'$name',$age,$cr_arrested,'$dept','$Location')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.<br>";
    if ($dept=="DEA")
{
  $sql = "INSERT INTO dea_emp (badge_id,position,cases_solved,major_case) VALUES ($badge_id,'$position',$cases,'$major')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.<br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
if ($dept=="PD")
{
  $sql = "INSERT INTO pd_emp (badge_id,position,cases_solved,major_case) VALUES ($badge_id,'$position',$cases,'$major')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.<br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
if ($dept=="FBI")
{
 $sql = "INSERT INTO fbi_emp (team_id,badge_id,position,cases_solved) VALUES ($team_id,$badge_id,'$position',$cases)";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.<br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
if (isset($_POST['LocationSubmit'])){
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$state = mysqli_real_escape_string($link, $_REQUEST['state']);
$office = mysqli_real_escape_string($link, $_REQUEST['dept']);
$pincode = mysqli_real_escape_string($link, $_REQUEST['pin']);
$branch=mysqli_real_escape_string($link, $_REQUEST['bname']);
$cases=mysqli_real_escape_string($link, $_REQUEST['cases']);
$of=mysqli_real_escape_string($link, $_REQUEST['of']);

$sql = "INSERT INTO locations (city_name,state,office,pincode) VALUES ('$city','$state','$office',$pincode)";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.<br>";
    if ($office=="DEA")
{
  $sql = "INSERT INTO dea_overview (branch_name,cases_solved,no_of_officers,office,pincode) VALUES ('$branch',$cases,$of,'$office',$pincode)";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.<br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
if ($office=="PD")
{
  $sql = "INSERT INTO pd_overview (branch_name,cases_solved,no_of_officers,office,pincode) VALUES ('$branch',$cases,$of,'$office',$pincode)";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.<br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
if ($office=="FBI")
{
  $sql = "INSERT INTO fbi_overview (branch_name,cases_solved,no_of_officers,office,pincode) VALUES ('$branch',$cases,$of,'$office',$pincode)";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.<br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

}
 
// Close connection
mysqli_close($link);
?></strong></h5></div></div></div></div></div></body></html>
