var lastVar = 0;
var mainArea = document.getElementById('virusPic');
var clickBox = document.getElementById('showMore');

(function () {
    $.post('./revengeDB.php',function(data){
     
       var obj = JSON.parse(data);
    
       lastVar = Object.keys(obj).length;
       console.log(data);
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

            var virStars = document.createElement('div');
            virStars.className = "ratingStars";

            var temp = obj[i].vir_star_rate

            virus.appendChild(virImg);
            virus.appendChild(virTitle);
            virus.appendChild(virUploader);

            for(var j = 0;j<temp;j++){
                var star = document.createElement('i');
                $(star).attr({"class":"fa fa-star", "aria-hidden":"'true'"})
                virus.appendChild(star);
                console.log(j);

            }

 
           
            virus.appendChild(virPrice);

            mainArea.appendChild(virus);
            
        }

    });

  })();




clickBox.onclick = function () { generateVirus();};


generateVirus = function () {
   
    $.get('./revengeDBmore.php?offset='+lastVar,function(data){

        var obj = JSON.parse(data);

        var leng = Object.keys(obj).length;
     

        for(var i = 0;i<leng;i++){
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

            var temp = obj[i].vir_star_rate

            virus.appendChild(virImg);
            virus.appendChild(virTitle);
            virus.appendChild(virUploader);

            for(var j = 0;j<temp;j++){
                var star = document.createElement('i');
                $(star).attr({"class":"fa fa-star", "aria-hidden":"'true'"})
                virus.appendChild(star);
                console.log(j);

            }

 
           
            virus.appendChild(virPrice);

            mainArea.appendChild(virus);
    }
    lastVar=lastVar+3;
})};

$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var upName = $(button).children(".virUploader").html();
    var recipient = button.data('whatever')


    $.get('virus.php?v_num=' + recipient, function (data) {
        modal.find('.modal-body').html(data)
    })

})