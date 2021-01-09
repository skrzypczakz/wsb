<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portfel</title>
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

    

</head>

<body>

    <div data-role="page" id="glowna">

        <!-- Elementy głowne-->
        <div class="backButton">
            <a href="start.php"><img src="css/images/Backward Arrow.png" alt="back"></a>
        </div>

        <div id="menuBox">

            <ul id="menu">
                <li><a href="index.html"><img src="css/images/Feed.png" alt="glowna"></a>
                <li><a href="bilans1.php"><img src="css/images/Alert.png" alt="saldo"></a>
                <li><a href="kalendarz.php"><img src="css/images/Explore.png" alt="kalendarz"></a>
                <li><a href="skarbonka.php"><img src="css/images/Profile.png" alt="skarbonka"></a>
                <li><a href="#"><img src="css/images/Settings.png" alt="inne"></a>
            </ul>
        </div>

        <!-- Koniec elementów głównych-->

        <div class="grayBox">
            <a>Historia wydatków</a>
        </div>

        <div class="hiWydatkow">
        <div class="card-body table-responsive p-0">
                  <table class="table table-striped table-valign-middle">
                    <thead>
                    <tr>
                      <th>Dziś, 09.01</th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>
                        <img src="css/images/Component 21 – 1.png" alt="Jedzenie">
                        Biedronka
                      </td>
                      <td></td>
                      <td>
                        183 zł
                      </td>
                      <td>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img src="css/images/Component 23 – 1.png" alt="Ubrania">
                        Reserved
                      </td>
                      <td></td>
                      <td>
                        123,24 zł
                      </td>
                      <td>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img src="css/images/Component 24 – 1.png" alt="Product 1">
                       U Fukiera
                      </td>
                      <td></td>
                      <td>
                        198 zł
                      </td>
                      <td>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img src="css/images/Component 22 – 1.png" alt="Transport" >
                        Uber
                      </td>
                      <td></td>
                      <td>
                        87 zł
                      </td>
                      <td>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
        
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

</body>

</html>