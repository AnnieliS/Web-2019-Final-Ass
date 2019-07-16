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
            
            var uA = document.createElement('a');
            uA.innerHTML = obj[i].username;

            var uId = document.createElement('td');
            uId.innerHTML = obj[i].user_id;

            var uName = document.createElement('td');

            var uEmail = document.createElement('td');
            uEmail.classList.add('e2Mobile');
            uEmail.innerHTML = obj[i].email;

            $(uA).attr({ "href": 'http://localhost/~annielisiegel/Final%20Ass%202.0/Web-2019-Final-Ass/adMyPage.php?userID=' + uId.innerHTML});

            uName.appendChild(uA);
            uRow.appendChild(uId);
            uRow.appendChild(uName);
            uRow.appendChild(uEmail);
            uTable.appendChild(uRow);
            firstDone = true;
        }


    });
});