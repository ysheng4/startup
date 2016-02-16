<?php
$db_host="xxx";
$db_user="xxxx";
$db_password="xxxx";
$db_database='xxxxx';
//global $test=1;
$connect=new mysqli($db_host, $db_user, $db_password,$db_database);
/*
$sql="SELECT id,pxxm FROM shouji WHERE id=1";
$result=mysqli_query($connect,$sql);


while($row=mysqli_fetch_assoc($result)){
				
					$searchres['firstname']=$row['pxxm'];
				
			
			
			
			}
			
return json_encode($searchres);

*/
 //mysql_query("SET CHARACTER SET utf8");
/*
$sql="SELECT pxxm FROM shouji";
$connect->query("SET CHARACTER SET utf8");
$sqlresult=mysqli_query($connect,$sql);
while($row=mysqli_fetch_assoc($sqlresult)){;
				
					echo $row['pxxm'];
				
			
			
			
			}
*/
?>