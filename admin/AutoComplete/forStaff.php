<?php
    $con=mysql_connect("localhost","root","");
mysql_select_db("hospital_management",$con);

   $q=$_REQUEST['q']; 
   //echo $q;
  // $q='na';
    $sql="SELECT s_name FROM staff WHERE s_name LIKE '%$q%'";
    $result = mysql_query($sql);

    $json=array();

    while($row = mysql_fetch_array($result)) {
      array_push($json, $row['s_name']);
    }

    echo json_encode($json);
?>