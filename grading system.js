function grading(){
  var val1 = parseInt(document.getElementById("num1").value);
  var val2 = parseInt(document.getElementById("num2").value);
  var val3 = parseInt(document.getElementById("num3").value);
  var val4 = parseInt(document.getElementById("num4").value);

  var final = val1 + val2 + val3 + val4;
  document.getElementById("result").textContent = +final  + " / 400 ";
}


var total;
function avg(){
  var val1 = parseInt(document.getElementById("num1").value);
  var val2 = parseInt(document.getElementById("num2").value);
  var val3 = parseInt(document.getElementById("num3").value);
  var val4 = parseInt(document.getElementById("num4").value);

  var final1 = val1 + val2 + val3 + val4; 
  total = final1 / 4;
  document.getElementById("avrg").textContent = +total;
}

function Final(){
  if(total >= 80 && total <= 100)
    document.getElementById("grade").textContent = 'A';
  else if(total >= 75 && total < 80)
    document.getElementById("grade").textContent = 'B';
  else if(total >= 60 && total < 75)
    document.getElementById("grade").textContent = 'C';
  else if(total >= 40 && total < 60)
    document.getElementById("grade").textContent = 'D';
  else {
    document.getElementById("grade").textContent = 'F'
  }
  
}

document.querySelectorAll('input[type=text]').forEach(function(input){
  input.addEventListener('input',limitRange);
});

function limitRange() {
  if (this.value < 0) this.value = 0;
  if (this.value > 100) this.value = 100;
}