function auto_load(sensor) {
    $.ajax({
      url: "refresh.php",
      method: "POST",
      data: {
        sensor: sensor
      },
      cache: false,
      success: function(data) {
        var putthis = data;

        document.getElementById(sensor).innerHTML = putthis;
      }
    });     
}
    function pushdirec(direc) {
    $.ajax({
      url: "control.php",
      method: "POST",
      data: {
        direc: direc
      },
      cache: false,
      success: function(data) {
        console.log(data)  
      }
    }); 
}
  function ShowSensors() {
    auto_load("sensor1"); //Call auto_load() function when DOM is Ready
  }

 $(document).ready(function() {
    ShowSensors();
    setInterval(function() {
        ShowSensors();
    }, 5000);
    //Refresh auto_load() function after 10000 milliseconds
  });