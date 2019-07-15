var vTable = document.getElementById('vTable');
var  clickhome = $('#v-pills-home-tab');
clickhome.attr('onclick','getVirus()');
var count = 0;

getVirus = function() {
    $.post('./g_virusList.php',function(data){
     
        var obj = JSON.parse(data);
    
       var leng = Object.keys(obj).length;

       for(var i=0;i<leng;i++)
       {
        var vRow = document.createElement('tr');
        $(vRow).attr({"data-toggle":"modal", "data-target":"#exampleModal", "data-whatever":obj[i].vir_id});

        var num = document.createElement('th');
        num.innerHTML = i+1;
        
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
       }


    });
};