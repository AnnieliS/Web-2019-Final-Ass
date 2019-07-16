var vTable = document.getElementById('vTable');
var clickhome = $('#myPage');
//clickhome.ready(getVirus);
//clickhome.attr('ready', 'getVirus()');
var count = 0;
var firstDone = false;


//var getVirus = function () {
    $( window ).on( "load", function() {
    if (firstDone === true)
        return;

        console.log("7");

    $.post('./g_virusList.php', function (data) {

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

            var vPrice = document.createElement('td');
            vPrice.innerHTML = obj[i].vir_price;

            vRow.appendChild(num);
            vRow.appendChild(vName);
            vRow.appendChild(vPrice);

            vTable.appendChild(vRow);

            firstDone = true;

        }


    });
});