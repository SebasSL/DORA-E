<!DOCTYPE html>
<html lang="">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===========================
    THEME INFO
    =========================== -->
    <meta name="description" content="CVstrap is another Free minimal CV HTML theme by EvenFly built with Bootstrap 3.3.0. and released under CC-3.0 license.">
    <meta name="keywords" content="curriculum vitae, cv, one page, onepage, bootstrap, responsive, resume, timeline, free cv">
    <meta name="author" content="Mamun Srizon">

    <!-- ===========================
    SITE TITLE
    =========================== -->
    <title>DORA-E</title>
    <link rel="shortcut icon" href="img/killerpinguin.jpg" />
    <!-- ===========================
    STYLESHEETS
    =========================== -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- ===========================
    FONTS & ICONS
    =========================== -->
    <link href='//fonts.googleapis.com/css?family=Kristi|Alegreya+Sans:300' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    <!--[if IE]>
        <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">
        <!-- ===========================
        HEADER
        ============================ -->
        <div id="header" class="row">
            <div class="col-sm-2">
                <img class="propic" src="img/killerpinguin.jpg" alt="">
            </div>
            <!-- photo end-->

            <div class="col-sm-10">
                <div class="cv-title">
                    <div class="row">
                        <div class="col-sm-7">
                            <h1>Welcome to DORA-E</h1>
                        </div>
                        <div class="col-sm-5 text-right dl-share">
                            <!-- AddToAny BEGIN -->
                            <a class="a2a_dd btn btn-default" href="index.html"><span class="fa fa-home "></span> Home</a>
                            <!-- AddToAny END -->
                        </div>
                    </div>
                    <h2>Sistema robótico de búsqueda y navegación </h2>
                </div><!-- Title end-->
            </div><!-- header right end-->
        </div><!-- header end-->

        <hr class="firsthr">

        <!-- ===========================
        BODY LEFT PART
        ============================ -->
        <div class="col-md-8 mainleft">
            <div id="statement" class="row mobmid">
                <div class="col-sm-1">
                    <span class="secicon fa fa-user"></span>
                </div><!--icon end-->

                <div class="col-sm-2">
                    <h3>Controles del Rover </h3>
                </div><!--info end-->
                <div class="col-xs-1">
                	
                </div>
                <div class="col-xs-2">
                	<br> <br>
                	<center>
                	<button type="input" value="1" id="action" name="action" onclick="pushdirec()">left</button>
                	</center>
                </div>
                <div class="col-xs-2">	
                <center>
                	<button type="input" value="2" id="action" name="action" onclick="pushdirec()">go</button> <br> <br>
                	<button type="input" value="5" id="action" name="action" onclick="pushdirec()">stop</button> <br> <br>
                	<button type="input" value="3" id="action" name="action" onclick="pushdirec()">back</button> <br> <br>
                </center>
                </div>
                <div class="col-xs-2">
                	<br> <br>
                	<center>
                	<button type="input" value="4" id="action" name="action" onclick="pushdirec()">right</button>
                	</center>
                </div>
                <!--
                <?php
                    $connect = mysqli_connect('localhost','root','','DORA-E');

                    $Direc = $_POST["action"];
                    $sql= "UPDATE `movements` SET `direction`='".$Direc."' WHERE `ID`=1";
                    $result = mysqli_query($connect, $sql);
                ?>
                -->
            </div><!--personal statement end-->            
        </div><!--left end-->
        
        <!-- ===========================
        SIDEBAR
        =========================== -->
        <div class="col-md-4 mainright">
            <div class="row">
                <div class="col-sm-1 col-md-2 mobmid">
                    <span class="secicon fa fa-magic"></span>
                </div><!--icon end-->
                    <h3> Sensores: </h3> <br> <br>
                    <p>Valor sensor delantero: <span id="sensor1">0</span></p>
                </div><!--tech skills end-->
        </div><!--right end-->
    </div><!--container end-->

    <!-- ===========================
    FOOTER
    =========================== -->
    <footer class="text-center">
        <p>&copy; Proyecto realizado en barranquilla, Universidad del Norte
        </p>
    </footer>

    <script type="text/javascript" src="//code.jquery.com/jquery-latest.js">
        
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

        function pushdirec() {
        $.ajax({
          url: "control.php",
          method: "POST",
          data: {
            direc: document.getElementById("action").value
          },
          cache: false,
          success: function(data) {
            
          }
        }); 

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


    </script>

    <!--necessary scripts and plugins-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/evenfly.js"></script>
</body>

</html>