<?php
/**
 * Created by PhpStorm.
 * User: break
 * Date: 15/03/17
 * Time: 下午 01:40
 */
include_once '../config/dbConnection.php';

$sql = "SELECT
        deviceinfo.deviceInfoId,
        device.deviceIdNo,
        deviceinfo.deviceInfoType,
        deviceinfo.deviceInfoCity,
        device.deviceConnectionIp,
        deviceinfo.deviceInfoAddress,
        deviceinfo.deviceInfoInstallTime,
        device.deviceLastConnectionTime
        FROM
        deviceinfo ,
        device
        WHERE
        deviceinfo.deviceId = device.deviceId
        ";
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