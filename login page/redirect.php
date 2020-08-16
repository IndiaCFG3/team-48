<?php 

switch ($_POST['id']) {
  case "it":
    header("Location:../IT/IT.php"); 
    break;
  case "operations":
    header("Location:../t_audit/t_audit_operations.php"); 
    break;
  case "audit":
    header("Location:../t_audit/t_audit_graph.php"); 
    break;
  case "hr":
    header("Location:../HR/HR.php"); 
    break;
  case "hod":
    header("Location:../HOD-1/hod.php"); 
    break;
  default:
    echo "Wrong input"; 
}

exit; 
?> 
