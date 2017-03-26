<?php
/**
 * Created by PhpStorm.
 * User: break
 * Date: 16/03/17
 * Time: 上午 10:40
 */
include_once '../config/dbConnection.php';

$para = json_decode($_POST['index']);//$_POST  $_GET
$action = $para[0];

if($action == "selectdeviceinfowithid")
{
    $id = $para[1];
    $sql = "SELECT
            device.deviceIdNo,
            deviceinfo.deviceInfoType,
            deviceinfo.deviceInfoCity,
            deviceinfo.deviceInfoAddress
            FROM
            deviceinfo ,
            device
            WHERE
            deviceinfo.deviceId = device.deviceId AND
            deviceinfo.deviceInfoId = {$id}";
    mysqli_query($conn, "set names 'utf8'");
    $rs = mysqli_query($conn, $sql);
    $values = array();
    $datalength=0;
    while($row = mysqli_fetch_assoc($rs)){
        $datalength++;
        $values[] = $row;
    }
    mysqli_close($conn);
    echo json_encode($values,  JSON_UNESCAPED_UNICODE);

}

if($action == "selectdevicewithid")
{
    $id = $para[1];
    $sql = "SELECT
            device.deviceWorkerId,
            device.deviceConnectionId
            FROM
            device
            WHERE
            device.deviceIdNo = {$id}";
    mysqli_query($conn, "set names 'utf8'");
    $rs = mysqli_query($conn, $sql);
    $values = array();
    $datalength=0;
    while($row = mysqli_fetch_assoc($rs)){
        $datalength++;
        $values[] = $row;
    }
    mysqli_close($conn);
    echo json_encode($values,  JSON_UNESCAPED_UNICODE);

}