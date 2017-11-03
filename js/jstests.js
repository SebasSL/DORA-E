
var id = 0;

function loadend() {
    $.ajax({
      url: "time.php",
      method: "POST",
      data: {
      	id: id
      },
      cache: false,
      success: function(data) {
        id = data;
        //console.log(data);
      }
    });     
} 

$(document).ready(function() {
    loadend();
    setInterval(function() {
        loadend();
    }, 10);
    //Refresh auto_load() function after 10000 milliseconds
  });