/**
 * Created by break on 16/03/17.
 */

function GetQueryString(name)
{
    var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if(r!=null)return  unescape(r[2]); return null;
}

$(document).ready(function () {
    var passvars = new Array();
    passvars[0] = GetQueryString("action");
    passvars[1] = GetQueryString("id");
    var strpassvars = JSON.stringify(passvars);
    jQuery.ajaxSetup({cache: false});
    $.post("../public/getdata/send.php",{index: strpassvars},function (valArr, status) {
        if (status != 'success') {
            alert("操作异常!");
            return;
        };

        valArr = eval("(" + valArr + ")");
        $("#deviceIdNo").append(valArr[0].deviceIdNo);
        $("#deviceInfoType").append(valArr[0].deviceInfoType);
        $("#deviceInfoCity").append(valArr[0].deviceInfoCity);
        $("#deviceInfoAddress").append(valArr[0].deviceInfoAddress);

    });


});



function send()
{
    var deviceIdNo = $("#deviceIdNo").text();
    var command = $("#command").val();
    var passvars = new Array();
    passvars[0] = "selectdevicewithid";
    passvars[1] = deviceIdNo;
    var strpassvars = JSON.stringify(passvars);
    jQuery.ajaxSetup({cache: false});
    $.post("../public/getdata/send.php",{index: strpassvars},function (valArr, status) {
        if (status != 'success') {
            alert("操作异常!");
            return;
        };

        valArr = eval("(" + valArr + ")");
        var to_worker_id=valArr[0].deviceWorkerId;
        var to_connection_id=valArr[0].deviceConnectionId;
        var message = command+"|"+to_worker_id+"&"+to_connection_id+"$";

        ws = new WebSocket("ws://192.168.2.129:6003");
        ws.onopen = function() {
            var msg = "系统消息：建立连接成功";
            listMsg(msg);
            ws.send(message);

        };
        ws.onclose = function() {
            var msg = "系统消息 : 连接已断开！";
            listMsg(msg);
        };
        ws.onmessage = function(e) {
            var msg = "收到设备的消息：" + e.data;
            listMsg(msg);
        };
        ws.onerror = function() {
            var msg = "系统消息 : 出错了,请退出重试.";
            listMsg(msg);
        };


    });

}








/**
 * 将消息内容添加到输出框中,并将滚动条滚动到最下方
 */
function listMsg(data) {
    var msg_list = document.getElementById("msg_list");
    var msg = document.createElement("p");

    msg.innerHTML = data;
    msg_list.appendChild(msg);
    msg_list.scrollTop = msg_list.scrollHeight;
}