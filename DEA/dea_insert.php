<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "law_enforcement");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_POST['CaseSubmit'])){
$case_no = mysqli_real_escape_string($link, $_REQUEST['case_no']);
$case_name = mysqli_real_escape_string($link, $_REQUEST['case_name']);
$drugs_associated = mysqli_real_escape_string($link, $_REQUEST['drugs_associated']);
$criminal_id = mysqli_real_escape_string($link, $_REQUEST['criminal_id']);
$badge_id = mysqli_real_escape_string($link, $_REQUEST['badge_id']);

$sql = "INSERT INTO dea_cases (case_no,case_name,drugs_associated,criminal_id,badge_id) VALUES ($case_no,'$case_name','$drugs_associated',$criminal_id,$badge_id)";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
if (isset($_POST['OfficerSubmit'])){
$badge_id = mysqli_real_escape_string($link, $_REQUEST['badge_id']);
$position = mysqli_real_escape_string($link, $_REQUEST['position']);
$cases_solved = mysqli_real_escape_string($link, $_REQUEST['cases_solved']);
$major_case = mysqli_real_escape_string($link, $_REQUEST['major_case']);

$sql = "INSERT INTO dea_emp (badge_id,position,cases_solved,major_case) VALUES ($badge_id,'$position',$cases_solved,'$major_case')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
if (isset($_POST['BranchSubmit'])){
$branch_name = mysqli_real_escape_string($link, $_REQUEST['branch_name']);
$cases_solved = mysqli_real_escape_string($link, $_REQUEST['cases_solved']);
$no_of_officers = mysqli_real_escape_string($link, $_REQUEST['no_of_officers']);
$office = mysqli_real_escape_string($link, $_REQUEST['office']);
$pincode = mysqli_real_escape_string($link, $_REQUEST['pincode']);

$sql = "INSERT INTO dea_overview (branch_name,cases_solved,no_of_officers,office,pincode) VALUES ('$branch_name',$cases_solved,$no_of_officers,'$office',$pincode)";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}

 
// Close connection
mysqli_close($link);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../DEA/fadedtab.css" />
<title>Drug Enforcement Administration</title>
</head>

<body>
	<img src="../DEA/header-logo_bronze-resized-5-2.png" width="387" height="150" align="right">
	<h1 style="color:#98FB98;">The United States Department of Justice</h1>
<form align="right" name="form1" method="post" action="logout.php">
  <label class="logoutLblPos">
  <input name="Logout" type="submit" id="Logout" value="Logout">
  </label>
  </form>	
  <form align="left" name="form2" method="post" action="new_insert.php">
  <label class="InsertLblPos">
  <input name="Insert Record" type="submit" id="Insert Record" value="Add New Criminal, Officer or Location">
  </label>
</form>		
        <div id="header">
        	<div class="logo"></div>
            <h1>Drug Enforcement</h1>
			<h2>Administration</h2>
        </div>
	<div class="containerLeft">
	<h2>Enter Case Details</h2>
     <form action="dea_insert.php" method="post">
      <label>Case ID</label>
      <input type="text" name="case_no"><br />
      <label>Case Name</label>
      <input type="text" name="case_name"><br />
      <label>Drugs Associated</label>
      <select name="drugs_associated">
    <option value="Cocaine">Cocaine</option>
	<option value="Marijuana">Marijuana</option>
    <option value="Ecstasy">Ecstasy</option>
    <option value="Methamphetamine">Methamphetamine</option>
	<option value="LSD">LSD</option>
  </select>
  <br>
  <label>Criminal ID</label>
      <input type="text" name="criminal_id"><br />
	  <label>Badge ID</label>
      <input type="text" name="badge_id"><br />
	  <input type="submit" name="CaseSubmit" value="Submit">
    </form>
  </div>
  
  
  <div class="containerRight">
	<h2>Enter Officer Details</h2>
     <form action="dea_insert.php" method="post">
      <label>Badge ID</label><br>
      <input type="text" name="badge_id">
	  <br>
      <label>Position</label><br>
      <select name="position">
    <option value="Administrative Support Specialist">Administrative Support Specialist</option>
	<option value="Evidence Analyst">Evidence Analyst</option>
    <option value="Administrative Officer">Administrative Officer</option>
    <option value="Special Agent">Special Agent</option>
	<option value="Officer">Officer</option>
  </select>
  <br>
   <label>Cases Solved</label><br>
      <input type="text" name="cases_solved"><br />
  <label>Major Case</label><br>
      <input type="text" name="major_case"><br />
	  <input type="submit" name="OfficerSubmit" value="Submit">
    </form>
  </div>
  
  <div class="containerMiddle">
	<h2>Enter Branch Details</h2>
    <form action="dea_insert.php" method="post">
      <label>Branch Name</label><br>
      <input type="text" name="branch_name"><br />
      <label>Cases Solved</label><br>
	  <input type="text" name="cases_solved"><br />
	  <label>No. of Officers</label><br>
      <input type="text" name="no_of_officers"><br />
	  <label>Office</label><br>
      <select name="office">
    <option value="DEA">DEA</option>
	</select>
	<br>
	<label>Pincode</label><br>
	<input type="text" name="pincode"><br />
	  
	  <input type="submit" name="BranchSubmit" value="Submit">
    </form>
  </div>
               
            
             
</body>
</html>