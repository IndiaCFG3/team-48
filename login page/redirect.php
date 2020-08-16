<?php 

switch ($_POST['id']) {
  case "it":
    header("Location:../IT/IT.html"); 
    break;
  case "operations":
    header("Location:../t_audit/t_audit_operations.php"); 
    break;
  case "audit":
    header("Location:../t_audit/t_audit_graph.php"); 
    break;
  case "hr":
    header("Location:../HR/HR.html"); 
    break;
  case "hod":
    header("Location:../HOD-1/hod.html"); 
    break;
  default:
    echo "Wrong input"; 
}

exit; 
?> 
