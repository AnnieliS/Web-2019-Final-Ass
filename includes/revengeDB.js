var lastVar = 0;
var mainArea = document.getElementById('virusPic');
var clickBox = document.getElementById('showMore');

(function () {
    $.post('./revengeDB.php',function(data){
     
       var obj = JSON.parse(data);
    
       lastVar = Object.keys(obj).length;
       

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
                virStars.appendChild(star);

            }

            virus.appendChild(virStars);
           
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

            var virStars = document.createElement('div');
            virStars.className = "ratingStars";

            virus.appendChild(virImg);
            virus.appendChild(virTitle);
            virus.appendChild(virUploader);

            for(var j = 0;j<temp;j++){
                var star = document.createElement('i');
                $(star).attr({"class":"fa fa-star", "aria-hidden":"'true'"})
                virStars.appendChild(star);

            }

            virus.appendChild(virStars);
           
            virus.appendChild(virPrice);

            mainArea.appendChild(virus);
    }
    lastVar=lastVar+3;
})};

$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var upName = $(button).children(".virUploader").html();
    var recipient = button.data('whatever')
    var lightbox = document.getElementsByClassName("modal-body");


    $.get('RevengeDBlightbox.php?v_num=' + recipient, function (data) {
    
        var obj = JSON.parse(data);

        var light = document.createElement('div');
        light.className = "lightFlex";

        var left =document.createElement('div');
        left.className = "left";

        var img = document.createElement('img');
        img.className = "virImg";
        $(img).attr({src:obj[0].vir_img_url});

        var virTitle = document.createElement('h3');
        virTitle.innerHTML = obj[0].vir_name;
        virTitle.className = "virTitle"; 

        var virUploader = document.createElement('h6');
        virUploader.innerHTML = upName;
        virUploader.className = "virUploader";

        var virPrice = document.createElement('h3');
        virPrice.innerHTML = obj[0].vir_price;
        virPrice.className = "virPrice";

        var virStars = document.createElement('div');
        virStars.className = "ratingStars";

        var temp = obj[0].vir_star_rate

        for(var j = 0;j<temp;j++){
            var star = document.createElement('i');
            $(star).attr({"class":"fa fa-star", "aria-hidden":"'true'"})
            virStars.appendChild(star);

        }

        var right = document.createElement('div');
        right.className = "right";

        var virTitleH1 = document.createElement('h1');
        virTitleH1.innerHTML = obj[0].vir_name;

        var desc = document.createElement('p');
        if (obj[0].vir_desc != null){
            desc.innerHTML = obj[0].vir_desc
        }
        else{
            desc.innerHTML = "No description";
        }

        //left elmm
        left.appendChild(img);
        left.appendChild(virTitle);
        left.appendChild(virUploader);
        left.appendChild(virPrice);
        left.appendChild(virStars);

        //right elmm
        right.appendChild(virTitleH1);
        right.appendChild(desc);

        //light elmm
        light.appendChild(left);
        light.appendChild(right);
        $(lightbox).html(light);


    })

})