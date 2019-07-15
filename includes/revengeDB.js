var lastVar = 0;

(function () {
    var mainArea = document.getElementById('virusPic');
    $.post('./revengeDB.php',function(data){
     
       var obj = JSON.parse(data);
    
       lastVar = Object.keys(obj).length;
       console.log(lastVar);
        console.log(JSON.parse(data));

        for(var i = 0;i<lastVar;i++){
            var virus = document.createElement('button');
            $(virus).attr({"data-toggle":"modal", "data-target":"#exampleModal", "data-whatever":obj[i].vir_id});

            var virImg = document.createElement('img');
            $(virImg).attr({src:obj[i].vir_img_url});

            var virTitle = document.createElement('h3');
            virTitle.innerHTML = obj[i].vir_name;
            virTitle.className = "virTitle"; 

            var virUploader = document.createElement('h6');
            virUploader.innerHTML = obj[i].username;
            virUploader.className = "virUploader";

            var virPrice = document.createElement('h3');
            virPrice.innerHTML = obj[i].vir_price;
            virPrice.className = "virPrice";

            virus.appendChild(virImg);
            virus.appendChild(virTitle);
            virus.appendChild(virUploader);
            virus.appendChild(virPrice);

            mainArea.appendChild(virus);
            
        }

    });

  })();
  //'".$offset."'AND `vir_id`<'".$offset4."'"