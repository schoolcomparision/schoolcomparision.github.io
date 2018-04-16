<?php  
if(isset($_POST['sub']))  
{  
$host="localhost";//host name  
$username="root"; //database username  
$word="";//database word  
$db_name="school";//database name   
$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string
$infa = $_POST['infa'];
$teac = $_POST['teac'];
$clean = $_POST['clean'];
$cca = $_POST['cca'];
$lib = $_POST['lib'];
$Trans = $_POST['Trans'];
//$id=101

if(isset($_POST['sub']))
{
  //  for ($i=0; $i<; $i++)
        {
            $query1="UPDATE  `rating` SET`infrastructure`=$infa,`teaching`=$teac,`cleanliness`=$clean,`co-curricular activities`=$cca,`library`=$lib,`transport`=$Trans WHERE ID=102";
            mysqli_query($con,$query1);/* or die (mysql_error() )*/
           // mysqli_query($con,$query2);
        }
    echo "Complete";

}
/*if($in_ch==1)  
   {  
      echo'<script>alert("Inserted Successfully")</script>';  
   }  
else  
   {  
      echo'<script>alert("Failed To Insert")</script>';  
   }*/
}  
?>  