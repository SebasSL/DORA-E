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
        var width = " width: "+data.toString()+"%;";
        //document.getElementById(sensor).aria-valuenow = putthis;
        document.getElementById(sensor).style = width;
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
    auto_load("sensor2");
    auto_load("sensor3");
    auto_load("sensor4");
  }

 $(document).ready(function() {
    ShowSensors();
    setInterval(function() {
        ShowSensors();
    }, 200);
    //Refresh auto_load() function after 10000 milliseconds
  });