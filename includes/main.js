/*-----Lighbox Script------*/

$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('whatever')
    var Title = $('VirTitle');
    $.get('virus.php?v_num=' + recipient, function (data) {
        console.log(data)
        modal.find('.modal-body').html(data)
    })
    var modal = $(this)
    modal.find('.modal-title').text("hello");

})


/*-----Show More Button-----*/

var mainArea = document.getElementById('virusPic');
var clickBox = document.getElementById('showMore');


clickBox.onclick = function () { generateVirus();};


generateVirus = function () {
    var virusNum = 7;
    var i = 0;
    for (i = 0; i < 3; i++) {
        var virus = document.createElement('button');
        $(virus).attr({"data-toggle":"modal", "data-target":"#exampleModal", "data-whatever":virusNum});

        var virImg = document.createElement('img');
        $(virImg).attr({src:"images/Revenge"+virusNum+".png"});

        var virTitle = document.createElement('h3');
        virTitle.innerHTML = "Gravida Dictum";
        virTitle.className = "virTitle";


        var virUploader = document.createElement('h6');
        virUploader.innerHTML = "By NoOneIsSafe";
        virUploader.className = "virUploader";

        var virPrice = document.createElement('h3');
        virPrice.innerHTML = "25$"
        virPrice.className = "virPrice";

        var virStars = document.createElement('div');
        virStars.innerHTML = '<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i>';
        virStars.className = "ratingStars";


        virus.appendChild(virImg);
        virus.appendChild(virTitle);
        virus.appendChild(virUploader);
        virus.appendChild(virPrice);
        virus.appendChild(virStars);
        

        virusNum+=1;

        mainArea.appendChild(virus);
    }
};
