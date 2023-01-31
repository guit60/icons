<?php
header('Content-Type: text/json; charset=utf-8');
//
require '/home/tucherch/www/guillaumeroberge.com/inc/config.php';

$dbh = dbConnexion();

$req = 'SELECT * from icons';
//echo $req;

$result = $dbh->query($req);
//
if(!$result)
{
    die("error");
} else 
{
    while($row = $result->fetch ()) 
    {
        $arr[] = array(
            'id'        => $row['id'],
            'name'		=> utf8_encode($row['name']),
            'file_name'	=> utf8_encode($row['file_name']),
            'parent'	=> utf8_encode($row['parent'])
        );
    }
    echo json_encode($arr);
}