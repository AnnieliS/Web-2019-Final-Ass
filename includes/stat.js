$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var virusId = button.data('whatever')
    var Title = $('VirTitle');
    $.getJSON('data/virus.json', function (data) {

        $.each(data.virus, function (i,obj){
            if (obj.vId == virusId ) {
                
                var vInf = document.createElement(' ');
                vInf.innerHTML = obj.vInf;

                var vInfR = document.createElement(' ');
                vInfR.innerHTML = obj.vInfR;

                var vLife = document.createElement(' ');
                vLife.innerHTML = obj.vLife;

                var vLifeR = document.createElement(' ');
                vLifeR.innerHTML = obj.vLifeR;

                var vImmu = document.createElement(' ');
                vImmu.innerHTML = obj.vImmu;

                var vImmuR = document.createElement(' ');
                vImmuR.innerHTML = obj.vImmuR;

                var vHacker = document.createElement(' ');
                vHacker.innerHTML = obj.vHacker;

            }
        })


    })
    var modal = $(this)
    modal.find('.modal-title').text("hello");

})