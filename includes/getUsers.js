var uTable = document.getElementById('uTable');
var count = 0;
var firstDone = false;


$(window).on("load", function () {
    if (firstDone === true)
        return;

    $.post('./getUserList.php', function (data) {

        var obj = JSON.parse(data);

        var leng = Object.keys(obj).length;

        console.log(data);

        for (var i = 0; i < leng; i++) {
            var uRow = document.createElement('tr');
            $(uRow).attr({ "data-toggle": "modal", "data-target": "#exampleModal", "data-whatever": obj[i].user_id });


            var uId = document.createElement('td');
            uId.innerHTML = obj[i].user_id;

            var uName = document.createElement('td');
            uName.innerHTML = obj[i].username;

            var uEmail = document.createElement('td');
            uEmail.innerHTML = obj[i].email;

            uRow.appendChild(uId);
            uRow.appendChild(uName);
            uRow.appendChild(uEmail);

            uTable.appendChild(uRow);
            firstDone = true;
        }


    });
});