 <?php

include "connection.php";
$id=$_GET["id"];
mysqli_query($db,"update librarymanagement set status='active' where id=$id ");

 ?>

 <script type="text/javascript">
 	window.location="student_info.php";

 </script>