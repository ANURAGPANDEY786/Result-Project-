<?php
 
$conn=mysqli_connect("localhost","root","","result","3308");
if(isset($_POST["submit"]))
{
	$stenroll=$_POST["id"];
	$stpass=$_POST["dob"];
    $result=mysqli_query($conn,"select ENROLLMENT_NO,ST_DOB from st_result where ENROLLMENT_NO='$stenroll' and ST_DOB='$stpass';");
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        $row=mysqli_fetch_assoc($result);
        $enroll=$row['ENROLLMENT_NO'];
        $DOB=$row['ST_DOB'];
        session_start();
        $_SESSION['ENROLLMENT_NO']=$enroll;
        $_SESSION['ST_DOB']=$DOB;
        header('LOCATION:http://localhost/myprogram/result.php');
        exit;
    
	
     }
    else {
        $msg="Student details not exist";
        
    }
}



?> 
<html>
<body>
<form align='center' action='' method='post'>
<h1>Student Result</h1>
<table align="center">
<tr>
<td>Enter Student Enrollment</td>
<td><input type="text" name="id"></td>
</tr>
<tr>
<td>Enter Student D-O-B</td>
<td><input type="text" name="dob"></td>
</tr>
<tr>
<td colspan=2 align="center"><input type="submit" name="submit" value="View Result">
<p style="color:red;font-size:25px"><?php
if(isset($msg)){
    echo $msg;
}

?>
<br>
</td>
</tr>
</table>
</form>
</body>
</html>