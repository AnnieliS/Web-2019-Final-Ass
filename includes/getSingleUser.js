var currUserID;

function getuserID() {
    var aKeyValue = window.location.search.substring(1).split('?');
    currUserid = aKeyValue[0].split("=")[1];
    return currUserid;

};

var vTable = document.getElementById('vadTable');
var clickhome = $('#myAdPage');
var count = 0;
var firstDone = false;



$(window).on("load", function () {
    if (firstDone === true)
        return;

    currUserid = getuserID();

    $.post('./g_adVirusList.php', { userID: currUserid }, function (data) {


        var obj = JSON.parse(data);

        var leng = Object.keys(obj).length;

        console.log(data);

        for (var i = 0; i < leng; i++) {
            var vRow = document.createElement('tr');
            $(vRow).attr({ "data-toggle": "modal", "data-target": "#exampleModal", "data-whatever": obj[i].vir_id });

            var num = document.createElement('th');
            num.innerHTML = i + 1;

            var vId = document.createElement('td');
            vId.innerHTML = obj[i].vir_id;

            var vName = document.createElement('td');
            vName.innerHTML = obj[i].vir_name;

            var vdesc = document.createElement('td');
            vdesc.innerHTML = obj[i].vir_desc;

            vRow.appendChild(num);
            vRow.appendChild(vName);
            vRow.appendChild(vdesc);

            vTable.appendChild(vRow);

            firstDone = true;

        }


    });
});


var deletefunc = function () {
    currUserid = getuserID();
    $.post('./deleteUser.php', { userID: currUserid }, function (data) {
        window.location.replace('./admin.php');
    });
};

$("#delUserButt").attr('onclick','deletefunc()');

