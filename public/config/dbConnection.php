<?php
/**
 * Created by PhpStorm.
 * User: break
 * Date: 15/03/17
 * Time: 下午 01:37
 */
//数据库链接
$servername = "0.0.0.0";
$username = "name";
$password = "pass";
$databasebname = "databasebname";
$conn = mysqli_connect($servername, $username, $password, $databasebname) or die("Can't connect sql server");