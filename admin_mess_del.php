<?php
session_start();
include_once('includes/config.php');
 if(!isset($_SESSION['usertype']))
 {

 }
 if(isset($_GET["id"]))
 {
	 $id=$_GET["id"];
	 echo $sql="DELETE FROM messages WHERE ID=$id";
	 $con->query($sql);
	 header("location:admin_inbox.php?mes=Message Deleted");
 }
 else
 {
	 header("location:admin_inbox.php");
 }
 
?>