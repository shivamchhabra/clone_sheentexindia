<?php  
$host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$dbname = 'mydb';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
   
$First_Name=$_POST['First_Name'];;
$Last_Name=$_POST['Last_Name'];;   
$Email=$_POST['Email'];;
$Phone=$_POST['Phone'];;
$Message=$_POST['Message'];;

$sql="INSERT INTO sheentex (First_Name,Last_Name,Email,Phone,Message) VALUES ('$First_Name','$Last_Name','$Email','$Phone','$Message')";
if(mysqli_query($conn, $sql)){  
 echo "Thankyou for your response, we will contact you soon! ";  
}else{  
echo "Sorry enter the details again ! ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?>  