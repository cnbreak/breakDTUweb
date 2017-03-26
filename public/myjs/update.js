/**
 * Created by break on 15/03/17.
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
    $.post("../public/getdata/update.php",{index: strpassvars},function (valArr, status) {
        if (status != 'success') {
            alert("操作异常!");
            return;
        };

        valArr = eval("(" + valArr + ")");
        $("#deviceInfoId").append(valArr[0].deviceInfoId);
        $("#deviceIdNo").append(valArr[0].deviceIdNo);
        $("#deviceInfoType").append(valArr[0].deviceInfoType);
        $("#deviceInfoCity").append(valArr[0].deviceInfoCity);
        $("#deviceConnectionIp").append(valArr[0].deviceConnectionIp);
        $("#deviceInfoAddress").append(valArr[0].deviceInfoAddress);
        $("#deviceInfoInstallTime").append(valArr[0].deviceInfoInstallTime);

    });
});

$(function(){

    $(".js-source-states").select2();
    $(".js-source-states-2").select2();

    //turn to inline mode
    $.fn.editable.defaults.mode = 'inline';

    //defaults
    //$.fn.editable.defaults.url = '#';

    $('#deviceInfoType').editable({
        url:function (params) {
            var passvars = new Array();
            passvars[0] = "updatewithidandattr";
            passvars[1] = $("#deviceInfoId").text();
            passvars[2] = "deviceInfoType";
            passvars[3] = params.value;
            var strpassvars = JSON.stringify(passvars);
            $.ajax({
                type: 'post',
                url: "../public/getdata/update.php",
                data: "index="+strpassvars,
                dataType: 'text',
                success: function (data, textStatus, jqXHR) {
                    if(textStatus=="success") alert("保存成功！");
                },
                error: function () { alert("error");}
            });
        },
        type: 'text',
        title: '输入柜子类型',
        emptytext: '',
        validate: function (value) { //字段验证
            if (!$.trim(value)) {
                return '不能为空';
            }
        }
    });

    $('#deviceInfoCity').editable({
        url:function (params) {
            var passvars = new Array();
            passvars[0] = "updatewithidandattr";
            passvars[1] = $("#deviceInfoId").text();
            passvars[2] = "deviceInfoCity";
            passvars[3] = params.value;
            var strpassvars = JSON.stringify(passvars);
            $.ajax({
                type: 'post',
                url: "../public/getdata/update.php",
                data: "index="+strpassvars,
                dataType: 'text',
                success: function (data, textStatus, jqXHR) {
                    if(textStatus=="success") alert("保存成功！");
                },
                error: function () { alert("error");}
            });
        },
        type: 'text',
        title: '输入所在城市',
        emptytext: '',
        validate: function (value) { //字段验证
            if (!$.trim(value)) {
                return '不能为空';
            }
        }
    });

    $('#deviceInfoAddress').editable({
        url:function (params) {
            var passvars = new Array();
            passvars[0] = "updatewithidandattr";
            passvars[1] = $("#deviceInfoId").text();
            passvars[2] = "deviceInfoAddress";
            passvars[3] = params.value;
            var strpassvars = JSON.stringify(passvars);
            $.ajax({
                type: 'post',
                url: "../public/getdata/update.php",
                data: "index="+strpassvars,
                dataType: 'text',
                success: function (data, textStatus, jqXHR) {
                    if(textStatus=="success") alert("保存成功！");
                },
                error: function () { alert("error");}
            });
        },
        showbuttons: 'bottom',
        emptytext: '',
        validate: function (value) { //字段验证
            if (!$.trim(value)) {
                return '不能为空';
            }
        }
    });

    $('#deviceInfoInstallTime').editable({
        url:function (params) {
            var passvars = new Array();
            passvars[0] = "updatewithidandattr";
            passvars[1] = $("#deviceInfoId").text();
            passvars[2] = "deviceInfoInstallTime";
            passvars[3] = params.value;
            var strpassvars = JSON.stringify(passvars);
            $.ajax({
                type: 'post',
                url: "../public/getdata/update.php",
                data: "index="+strpassvars,
                dataType: 'text',
                success: function (data, textStatus, jqXHR) {
                    if(textStatus=="success") alert("保存成功！");
                },
                error: function () { alert("error");}
            });
        },
        showbuttons: 'bottom',
        emptytext: '',
        validate: function (value) { //字段验证
            if (!$.trim(value)) {
                return '不能为空';
            }
        }
    });
});



var ws = new WebSocket()