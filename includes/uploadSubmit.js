
var clickSubmit = document.getElementById('stepone-done');

var slider = document.getElementById("customRange1");
var output = document.getElementById("rangePrice");

slider.oninput = function() {
    output.innerHTML = this.value;
  }


clickSubmit.onclick = function () { showStepTwo();};

showStepTwo = function(){

var progToHide = document.getElementById('prog1');
progToHide.classList.add('hide');
clickSubmit.classList.add('hide');
var stepTwoBlock = document.getElementById("stepTwo");
stepTwoBlock.classList.remove('hide');
};

