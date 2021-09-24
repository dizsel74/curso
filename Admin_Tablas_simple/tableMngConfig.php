<?PHP
/******* Edit the values below ***********/
function connect_mySQL() {
    $dB = mysql_connect("localhost", "root", "") or die("Connection to server Failed!");
	   // $dB = mysql_connect("mySQLHost", "user", "password") or die("Connection to server Failed!");
    return $dB;
    }
function connect_dB($dB) {
    $conn=mysql_select_db("usuarios",$dB) or die("Connection to dB Failed!");
	   //  $conn=mysql_select_db("dBName",$dB) or die("Connection to dB Failed!");
    return $conn;
}
/************ Stop Edit ********************/
 
function dis_header() {
        print "
        <html>
        <head>
            <title>Table Management</title>
        </head>
        <body>
        ";
}
 
function dis_footer() {
    print "
    <hr><center><a href='tableMng.php'>Main</a></center>
    </body>
    </html>
    ";
}
 
function display_ops() {
    dis_header();
    print "
    <p align='center'>
    <a href='tableMng.php?action=dis_create'>Create Table</a>&nbsp;&nbsp;
    <a href='tableMng.php?action=dis_delete'>Delete Table</a>
    </p>
    ";
    dis_footer();
}
 
function display_delete() {
         dis_header();
            print "
            <p align='center'>
            <form name='delete_table' method='post' action='tableMng.php'>
            <p>Table name: <input type='text' name='tname'>&nbsp;&nbsp;&nbsp;
            <input type='hidden' name='action' value='delete'>
            <input type='submit' value='Delete'>
            </form>
            </p>
            ";
        dis_footer();
}
 
 
function del_table($tname) {
    $dB = connect_mySQL();
    $conn= connect_dB($dB);
    $SQL="drop table $tname";
    $result=mysql_query($SQL, $dB) or die("Table deletion Failed!<BR><hr><center><a href='tableMng.php'>Main</a></center>");
    dis_header();
    print "Table ". $tname. " was deleted";
    dis_footer();
}
 
function get_cnfVal() {
$cnfVal="*********** Example ***********
ItemSKU VARCHAR(25) NOT NULL,
ItemName VARCHAR(100) NOT NULL,
ItemDescription MEDIUMTEXT NOT NULL,
ItemImgThumbnail VARCHAR(100) NOT NULL,
ItemImgUrl VARCHAR(100) NOT NULL,
ItemCost DECIMAL(7,2) NOT NULL,
Category BIGINT NOT NULL,
ShippingCost DECIMAL(6,2) NOT NULL,
ItemID BIGINT NOT NULL AUTO_INCREMENT,
PRIMARY KEY (ItemID)";
return $cnfVal;
}
 
function display_create() {
    dis_header();
    $cnfVal=get_cnfVal();
    print "
    <form name='tableName' method='post' action='tableMng.php'>
    <p align='center'>Table name<BR> <input type='text' name='tblName'><BR>
    Fields<BR>
    <textarea name='cnf' cols='50' rows='15'>$cnfVal</textarea><BR>
    <input type='hidden' name='action' value='create'>
    <input type='submit' value='Create'>
    ";
    dis_footer();
}
 
function create($tblName,$cnf) {
    $dB = connect_mySQL();
    $conn= connect_dB($dB);
    $SQL="CREATE TABLE $tblName ($cnf)";
    $result=mysql_query($SQL, $dB) or die("Failed to create table ".$tblName."!<BR><hr><center><a href='tableMng.php'>Main</a></center>");
    dis_header();
    print "Table " .$tblName ." was succesfuly created!";
    dis_footer();
}
?>