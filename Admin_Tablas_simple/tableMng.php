<?php
require("tableMngConfig.php");
 $action="";
switch ($action){
	
    case "":
        display_ops();
        break;
    case "dis_delete":
		display_delete();
        break;
    case "delete":
           del_table($tname);
        break;
    case "dis_create":
        display_create();
        break;
    case "create":
        create($tblName,$cnf);
        break;
}


 
?>