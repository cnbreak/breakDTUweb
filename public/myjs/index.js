/**
 * Created by break on 15/03/17.
 */
setInterval("tablelist()", 1000);
jQuery.ajaxSetup({cache: false});

var valArr = null;
var oTable = $('#jsonGrid').DataTable({
    data: valArr,
    //order: [[2, "asc"]],
    autoWidth: false,
    bStateSave: true,
    columns: [
        {title: 'ID', data: 'deviceInfoId'},
        {title: '标识号', data: 'deviceIdNo'},
        {title: '类型', data: 'deviceInfoType'},
        {title: '城市', data: 'deviceInfoCity'},
        {title: 'IP', data: 'deviceConnectionIp'},
        {title: '所在地', data: 'deviceInfoAddress'},
        {title: '安装时间', data: 'deviceInfoInstallTime'},
        {title: '最后一次心跳时间', data: 'deviceLastConnectionTime'},
    ]
});

$('#jsonGrid tbody').on('click', 'tr', function () {
    //alert(0);
    var data = oTable.row(this).data();
    window.location.href='update?action=selectContectwithid&id='+data.deviceInfoId;
});

//显示工作列表
function tablelist() {
    jQuery.ajaxSetup({cache: false});
    $.post("../public/getdata/index.php",function (valArr, status) {
        if (status != 'success') {
            alert("操作异常!tablelist()!");
            return;
        }
        valArr=JSON.parse(valArr);
        //valArr = eval("(" + valArr + ")");
        oTable.clear();
        oTable.rows.add(valArr);
        oTable.columns.adjust();
        oTable.draw(true);
        //oTable.page(pageindex.page).draw('page');//OK!!!
    });

}

