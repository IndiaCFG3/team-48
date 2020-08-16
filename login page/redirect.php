<?php 

switch ($_POST['id']) {
  case "admin":
    header("Location:../IT/IT.html"); 
    break;
  case "it":
    header("Location:../IT/IT.html"); 
    break;
  case "operations":
    header("Location:../t_audit/t_audit_graph.html"); 
    break;
  case "audit":
    header("Location:../t_audit/t_audit_graph.html"); 
    break;
  case "hr":
    header("Location:../HR/HR.html"); 
    break;
  case "hod":
    header("Location:../HOD-1/hod.html"); 
    break;
  case "enc":
    header("Location: http://www.geeksforgeeks.org"); 
    break;
  default:
    echo "Wrong input"; 
}

exit; 
?> 
