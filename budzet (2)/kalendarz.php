<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kalendarz</title>
    <link rel='stylessheet' href="./css/style.css">


    <!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.js"></script>   -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../AdminLTE-3.0.5/plugins/fontawesome-free/css/all.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">    
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../AdminLTE-3.0.5/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../AdminLTE-3.0.5/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../AdminLTE-3.0.5/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../AdminLTE-3.0.5/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../AdminLTE-3.0.5/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../AdminLTE-3.0.5/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../AdminLTE-3.0.5/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../AdminLTE-3.0.5/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
 
 
    <!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
-->

    

</head>

<body>

    <div data-role="page" id="glowna">

        <!-- Elementy głowne-->
        <div class="backButton">
            <a href="index.html"><img src="css/images/Backward Arrow.png" alt="back"></a>
        </div>

        <div id="menuBox">

            <ul id="menu">
                <li><a href="index.html"><img src="css/images/FeedOp.png" alt="glowna"></a>
                <li><a href="bilans1.php"><img src="css/images/Alert.png" alt="saldo"></a>
                <li><a href="kalendarz.php"><img src="css/images/ExploreWh.png" alt="kalendarz"></a>
                <li><a href="skarbonka.php"><img src="css/images/Profile.png" alt="skarbonka"></a>
                <li><a href="#"><img src="css/images/Settings.png" alt="inne"></a>
            </ul>
        </div>

        <!-- Koniec elementów głównych-->

        <div class="kalendarz">
      
      <!--
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
             
              </div>
              <div class="card-body pt-0">
                <div id="calendar" style="width: 100%"></div>
              </div>  -->
            

              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
              </div>
              

        </div>

        <div class="skrotyKalendarz">
            <ul class="skrotyKalendarzClick">
                <li> <a href="#"><img src="css/images/plus-square.png"></a></li>
                <li> <a href="#"><img src="css/images/calendar-plus.png"></a></li>
                <li> <a href="#"><img src="css/images/googlepay.png"></a></li>
            </ul>
        </div>

        

      

    </div>


<!-- jQuery -->
<script src="../AdminLTE-3.0.5/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../AdminLTE-3.0.5/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../AdminLTE-3.0.5/plugins/chart.js/Chart.min.js"></script>
<script src="../AdminLTE-3.0.5/dist/js/demo.js"></script>
<script src="../AdminLTE-3.0.5/dist/js/pages/dashboard3.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="../AdminLTE-3.0.5/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- Bootstrap 4 -->
<script src="../AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- ChartJS -->
<script src="../AdminLTE-3.0.5/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../AdminLTE-3.0.5/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../AdminLTE-3.0.5/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../AdminLTE-3.0.5/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../AdminLTE-3.0.5/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../AdminLTE-3.0.5/plugins/moment/moment.min.js"></script>
<script src="../AdminLTE-3.0.5/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../AdminLTE-3.0.5/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../AdminLTE-3.0.5/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../AdminLTE-3.0.5/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../AdminLTE-3.0.5/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../AdminLTE-3.0.5/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../AdminLTE-3.0.5/dist/js/demo.js"></script>

</body>

</html>