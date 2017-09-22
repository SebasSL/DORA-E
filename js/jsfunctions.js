function auto_load(sensor,senid) {
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
        document.getElementById(senid).innerHTML = data;
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
    auto_load("sensor1","sen1"); //Call auto_load() function when DOM is Ready
    auto_load("sensor2","sen2");
    auto_load("sensor3","sen3");
    auto_load("sensor4","sen4");
  }

 $(document).ready(function() {
    ShowSensors();
    setInterval(function() {
        ShowSensors();
    }, 500);
    //Refresh auto_load() function after 10000 milliseconds
  });