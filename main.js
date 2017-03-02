

$( document ).ready(function() {
    initBoard(8);
});


function initBoard(x){
  for(i = 0 ; i < x ; i ++){
    var rowDiv = '<div class="row">';
    for(j = 0 ; j < x ; j++){
        rowDiv += '<button id="tile'+i+':'+j+'" type="button" class="button btn btn-primary" onclick="tileClick(this, '+i+','+j+')"></button>';
    }
    rowDiv += '</div>';
    $("#board").append(rowDiv);
  }
}


function tileClick(element, i,j){
  $(element).append(i+"*"+j);
  $(element).toggleClass("btn-success");
  console.log("#tile"+i+":"+j);
}
