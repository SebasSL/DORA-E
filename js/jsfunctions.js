

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
        if (senid == "other"){
          document.getElementById(sensor).innerHTML = data;
          document.getElementById(sensor+"-a").innerHTML = data;
        }
        else{
          document.getElementById(sensor).style = width;
          document.getElementById(senid).innerHTML = data;
          document.getElementById(sensor+"-a").style = width;
          document.getElementById(senid+"-a").innerHTML = data;
        }
        
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
        //console.log(data)  
      }
    }); 
}

function pushmode(mode){
  $.ajax({
      url: "modo.php",
      method: "POST",
      data: {
        mode: mode
      },
      cache: false,
      success: function(data) {
        var gray = "#d2d2d2"
        var green = "#15ff00"
        if (mode == 1){
          document.getElementById("auto").style.background = green;
          document.getElementById("manual").style.background = gray;
          document.getElementById("auto-a").style.background = green;
          document.getElementById("manual-a").style.background = gray;
        } else {
          document.getElementById("auto").style.background = gray;
          document.getElementById("manual").style.background = green;
          document.getElementById("auto-a").style.background = gray;
          document.getElementById("manual-a").style.background = green;
        }
      }
    });
}

function pushdesti(from){
  var latitude;
  var longitude;
  if(from == 1){
    latitude = document.getElementById("Latitude").value;
    longitude = document.getElementById("Longitude").value;
    document.getElementById("Latitude-a").value = latitude;
    document.getElementById("Longitude-a").value = longitude;


  }
  else{
    latitude = document.getElementById("Latitude-a").value;
    longitude = document.getElementById("Longitude-a").value;
    document.getElementById("Latitude").value = latitude;
    document.getElementById("Longitude").value = longitude;
  }
  $.ajax({
      url: "destination.php",
      method: "POST",
      data: {
        latitude: latitude,
        longitude: longitude 
      },
      cache: false,
      success: function(data) {
        //console.log(data) 
        console.log(latitude,longitude) 
      }
    });

}

/*
function refresh_map(){
  $.ajax({
      url: "map_refresh.php",
      method: "POST",
      data: { 
      },
      cache: false,
      success: function(data) {
        //console.log(data) 
        //console.log(latitude,longitude)
        var output = data.split(",");
        var latid = output[0];
        var lngid = output[1];
        var latic = output[2];
        var lngic = output[3];
        console.log(latid,lngid,latic,lngic)
        var current_pos = {lat: latic, lng: lngic};
        var destin_pos = {lat: latid, lng: lngid};

        marker_manual_current.setPosition(current_pos);
        marker_manual_destin.setPosition(destin_pos);
        marker_auton_current.setPosition(current_pos);
        marker_auton_destin.setPosition(destin_pos);
      }
    });
  

}*/

function ShowSensors() {
    auto_load("sensor1","sen1"); //Call auto_load() function when DOM is Ready
    auto_load("sensor2","sen2");
    auto_load("sensor3","sen3");
    auto_load("latitude","other");
    auto_load("longitude","other");
    auto_load("heading","other");
    auto_load("Speed","other");
    auto_load("Height","other");
  }

 $(document).ready(function() {
    ShowSensors();
    setInterval(function() {
        ShowSensors();
    }, 500);
    //Refresh auto_load() function after 10000 milliseconds
  });