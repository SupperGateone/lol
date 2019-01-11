<?php
header("Access-Control-Allow-Credentials:true");
header('Content-Type:text/json');
header('Access-Control-Allow-Headers:Content-Type');
//header("Access-Control-Allow-origin:http://10.30.29.93:63341");
$allow_origin=array(
    'http://10.30.29.95:63341',
    'http://10.30.29.93:63341'
);
$origin=isset($_SERVER['HTTP_ORIGIN'])?$_SERVER['HTTP_ORIGIN']:'';
if(in_array($origin,$allow_origin)){
    header('Access-Control-Allow-Origin:'.$origin);
}
//$data_json= ;
//echo $data_json;
session_start();
$username=$_SESSION['name'];
$data=array('userName'=>$username);
echo json_encode($data);
?>