<html>
<body bgcolor='#FFFACD'>
<CENTER><TABLE>
<TR>
<TD><IMG SRC='bteup.jpeg' HEIGHT='50' WIDTH='50'></TD>
<TD><B>BOARD OF TECHNICAL EDUCATION UTTAR PRADESH LUCKNOW</TD>
</TR>
</TABLE>
</CENTER>
<table align="center" border  cellpadding='5'>
 <TR>
<TH COLSPAN='5'>ODD SEMESTER RESULT DECEMBER 2023</TH>
</TR>
<TR></TR>
<TH COLSPAN='5'>MARK SHEET</TH>
</TR> 
<TR>
<TH COLSPAN='2'>INSTITUTE NAME</TH>
<TH COLSPAN='3'>PT. RAMADHAR J. TIWARI POLYTECHNIC COLLEGE MAHUAR KALAN CHANDAULI CODE 4459</TH>
</TR>
<?php
session_start();
if(!isset($_SESSION['ENROLLMENT_NO'])){
    header('Location:http://localhost/myprogram/index.php');
    exit;
}
$ENROLL=$_SESSION['ENROLLMENT_NO'];
$conn=mysqli_connect("localhost","root","","result","3308");
$sqlquery=mysqli_query($conn,"select * from st_result WHERE ENROLLMENT_NO='$ENROLL' ");
if($result=mysqli_fetch_array($sqlquery)){
    
    
?>
<TR>
<TH COLSPAN='2'>BRANCH NAME</TH>
<TH COLSPAN='3'><?php echo $result['BRANCH'];?></TH>
</TR>
<TR>
<TH COLSPAN='2'>STUDENT NAME</TH>
<TH ><?php echo $result['STUDENT_NAME'];?></TH>
<TH> FATHER'S NAME</TH>
<TH><?php echo $result['FATHER_NAME'];?></TH>
</TR>
<TR>
<TH COLSPAN='2'>ROLL NUMBER</TH>
<TH > <?php echo $result['ROLL_NO'];?></TH>
<TH>ENROLLMENT NO.</TH>
<TH><?php echo $result['ENROLLMENT_NO'];?> </TH>
</TR>
<TR>
<TH ROWSPAN='2'>PAPER CODE</TH>
<TH ROWSPAN='2'COLSPAN='2'>PAPER NAME</TH>
<TH COLSPAN='3'>MARKS</TH>
</TR>
<TR>
<TH>MAXIMUM MARKS</TH>
<TH>OBTAINED MARKS</TH>
</TR>
<TR>
<TH COLSPAN='5' align='center'>THEORY</TH>
</TR>
<?php } ?>
<?php
if(!isset($_SESSION['ENROLLMENT_NO'])){
    header('Location:http://localhost/myprogram/index.php');
    exit;
}
$ENROLL=$_SESSION['ENROLLMENT_NO'];

$conn=mysqli_connect("localhost","root","","result","3308");
$sqlquery=mysqli_query($conn,"select * from st_result,marks WHERE ENROLLMENT='$ENROLL' LIMIT 6 ");
if(mysqli_num_rows($sqlquery)>0){
while($result=mysqli_fetch_array($sqlquery))
 {


?>

<TR>
<TH><?php echo $result['PAPER_CODE'];?></TH>
<TH COLSPAN='2'><?php echo $result['PAPER_NAME'];?></TH>        
<TH><?php echo $result['MAX_MARKS'];?></TH>        
<TH><?php echo $result['OBTAINED_MARKS'];?></TH>        
</TR>
<?php } }
?>
<TR>
 <th colspan='5' >  <a href="http://localhost/myprogram/index.php" ><input type="submit" style="background-color:#FFFACD;"   name="submit" value="check another result"></a></th>
</tr>

</table>
</body>
</html>