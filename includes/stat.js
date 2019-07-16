$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var virusId = button.data('whatever')
    var Title = $('VirTitle');
    var insideLightbox = document.getElementById('virusUserSingle');
    $.getJSON('./data/virus.json', function (data) {

        $.each(data.virus, function (i, obj) {
            if (obj.vId == virusId) {

                console.log("4");

                //Infection Row

                var vInfRow = document.createElement('div');
                vInfRow.classList.add('row', 'lbrow');

                var vInf = document.createElement('div');
                vInf.classList.add('col-md');
                vInf.innerHTML = "Infection rate:" + obj.vInf;

                var vInfR = document.createElement('div');
                vInfR.classList.add('col-md');
                vInfR.innerHTML = "Ranking : " + obj.vInfR;

                var vInfButt = document.createElement('div');
                vInfButt.classList.add('col-md', 'lbButt');
                vInfButt.innerHTML = "Show More";


                //Life Span Row

                var vLifeRow = document.createElement('div');
                vLifeRow.classList.add('row', 'lbrow');

                var vLife = document.createElement('div');
                vLife.classList.add('col-md');
                vLife.innerHTML = "Life span : " + obj.vLife;

                var vLifeR = document.createElement('div');
                vLifeR.classList.add('col-md');
                vLifeR.innerHTML = "Ranking : " + obj.vLifeR;

                var vLifeButt = document.createElement('div');
                vLifeButt.classList.add('col-md', 'lbButt');
                vLifeButt.innerHTML = "Show More";

                //Immunity Row

                var vImmuRow = document.createElement('div');
                vImmuRow.classList.add('row', 'lbrow');

                var vImmu = document.createElement('div');
                vImmu.classList.add('col-md');
                vImmu.innerHTML = "Immunity : " + obj.vImmu;

                var vImmuR = document.createElement('div');
                vImmuR.classList.add('col-md');
                vImmuR.innerHTML = "Ranking : " + obj.vImmuR;

                var vImmuButt = document.createElement('div');
                vImmuButt.classList.add('col-md', 'lbButt');
                vImmuButt.innerHTML = "Show More";

                //Hacker Feedback Row

                var vHackerRow = document.createElement('div');
                vHackerRow.classList.add('row', 'lbrow');

                var vHacker = document.createElement('div');
                vHacker.classList.add('col-md');
                vHacker.innerHTML = "Ranking : " + obj.vHacker;

                var vHacker = document.createElement('div');
                vHacker.classList.add('col-md');
                vHacker.innerHTML = "Hacker feedback";

                var vHackerR = document.createElement('div');
                vHackerR.classList.add('col-md');
                vHackerR.innerHTML = "Ranking : " + obj.vHacker;

                var vHackerButt = document.createElement('div');
                vHackerButt.classList.add('col-md', 'lbButt');
                vHackerButt.innerHTML = "Show More";


                vInfRow.appendChild(vInf);
                vInfRow.appendChild(vInfR);
                vInfRow.appendChild(vInfButt);
                vLifeRow.appendChild(vLife);
                vLifeRow.appendChild(vLifeR);
                vLifeRow.appendChild(vLifeButt);
                vImmuRow.appendChild(vImmu);
                vImmuRow.appendChild(vImmuR);
                vImmuRow.appendChild(vImmuButt);
                vHackerRow.appendChild(vHacker)
                vHackerRow.appendChild(vHackerR);
                vHackerRow.appendChild(vHackerButt);

                insideLightbox.appendChild(vInfRow);
                insideLightbox.appendChild(vLifeRow);
                insideLightbox.appendChild(vImmuRow);
                insideLightbox.appendChild(vHackerRow);



                //More Info


                //Infection Rate

                $(vInfButt).attr('onclick', 'clickMoreInf()');

                clickMoreInf = function () {
                    var vInfMore = document.createElement('div');
                    var vInfUL = document.createElement('ul');

                    $.each(data.virus, function (i, obj) {
                        var vInfLI = document.createElement('li');
                        vInfLI.innerHTML = obj.vInfMore[i] + " ITERATION : " +i;

                        vInfUL.appendChild(vInfLI);

                    });

                    vInfMore.appendChild(vInfUL);

                    insideLightbox.appendChild(vInfMore);
                }

                //Life Span

                $(vLifeButt).attr('onclick', 'clickMoreLife()');

                clickMoreLife = function () {
                    var vLifeMore = document.createElement('div');
                    var vLifeUL = document.createElement('ul');

                    $.each(data.virus, function (j, obj) {
                        var vLifeLI = document.createElement('li');
                        vLifeLI.innerHTML = obj.vLifeMore[j] + " ITERATION : " +j;

                        vLifeUL.appendChild(vLifeLI);

                    });

                    vLifeMore.appendChild(vLifeUL);

                    insideLightbox.appendChild(vLifeMore);
                }

                //Immunity

                $(vImmuButt).attr('onclick', 'clickMoreImmu()');

                clickMoreImmu = function () {
                    var vImmuMore = document.createElement('div');
                    var vImmuUL = document.createElement('ul');

                    $.each(data.virus, function (i, obj) {
                        var vImmuLI = document.createElement('li');
                        vImmuLI.innerHTML = obj.vImmuMore[i] + " ITERATION : " +i;

                        vImmuUL.appendChild(vImmuLI);

                    });

                    vImmuMore.appendChild(vImmuUL);

                    insideLightbox.appendChild(vImmuMore);
                }


                //Hacker Rating

                $(vHackerButt).attr('onclick', 'clickMoreHacker()');

                clickMoreHacker = function () {
                    var vHackerMore = document.createElement('div');
                    var vHackerUL = document.createElement('ul');

                    $.each(data.virus, function (i, obj) {
                        var vHackerLI = document.createElement('li');
                        vHackerLI.innerHTML = obj.vHackerMore[i];

                        vHackerUL.appendChild(vHackerLI);

                    });

                    vHackerMore.appendChild(vHackerUL);

                    insideLightbox.appendChild(vHackerMore);
                }


                //Closing of JSON

            }
        })


    })
    var modal = $(this)
    modal.find('.modal-title').text("Reports");

})

