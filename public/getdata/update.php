<?php
/**
 * Created by PhpStorm.
 * User: break
 * Date: 15/03/17
 * Time: 下午 05:07
 */
include_once '../config/dbConnection.php';

$para = json_decode($_POST['index']);//$_POST  $_GET
$action = $para[0];

if($action == "selectContectwithid")
{
    $id = $para[1];
    $sql = "SELECT
            deviceinfo.deviceInfoId,
            device.deviceIdNo,
            deviceinfo.deviceInfoType,
            deviceinfo.deviceInfoCity,
            device.deviceConnectionIp,
            deviceinfo.deviceInfoAddress,
            deviceinfo.deviceInfoInstallTime
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

if ($action == "updatewithidandattr")
{
    $id = $para[1];
    $attr = $para[2];
    $content = $para[3];
    echo $attr."|".$content."|".$id;
    $sql = "UPDATE deviceinfo SET {$attr} = '".$content."' WHERE deviceInfoId = $id";
    echo $sql;
    mysqli_query($conn, "set names 'utf8'");
    mysqli_query($conn, $sql);
    $rc = mysqli_affected_rows($conn);

//    if ($rc == 1) {
//        echo "更新成功！";
//    } else if ($rc == -1) {
//        echo "更新失败！错误信息：updatewithidandattr！";
//    }

    mysqli_close($conn);
    echo $rc;
}