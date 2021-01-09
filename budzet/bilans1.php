<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Saldo</title>
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
   
    <link rel="stylesheet" href="../AdminLTE-3.0.5/dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="./css/style.css">   

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
                <li><a href=""><img src="css/images/AlertWh.png" alt="saldo"></a>
                <li><a href="kalendarz.php"><img src="css/images/Explore.png" alt="kalendarz"></a>
                <li><a href="skarbonka.php"><img src="css/images/Profile.png" alt="skarbonka"></a>
                <li><a href="#"><img src="css/images/Settings.png" alt="inne"></a>
            </ul>
        </div>

        <!-- Koniec elementów głównych-->
        <!-- Diagram -->

        <div class="diagram">

              <div class="card-body">
                <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>

        </div>

        <!-- Koneic diagramu -->
        <!-- Skrót do szczegółowych wydatków -->

        <div class="wydatkiSkrot">
            <a href="bilans2.php">Wydatki w grudniu...</a>
        </div>

        <!-- Koniec skrótu do szczegółowych wydatków -->      

    </div>


<!-- jQuery -->
<script src="../AdminLTE-3.0.5/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../AdminLTE-3.0.5/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="../AdminLTE-3.0.5/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../AdminLTE-3.0.5/dist/js/demo.js"></script>



<script>
        $(function () {
            /* ChartJS
             * -------
             * Here we will create a few charts using ChartJS
             */
            //-------------
            //- PIE CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
            var pieData = {
                labels: [
                    'Jedzenie',
                    'Rachunki',
                    'Transport',
                    'Odzież',
                    'Restauracje',
                    'Inne',
                ],
                datasets: [{
                    data: [700, 500, 400, 600, 300, 100],
                    backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc',
                        '#d2d6de'
                    ],
                }]
            }
            var pieOptions = {
                maintainAspectRatio: false,
                responsive: true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            var pieChart = new Chart(pieChartCanvas, {
                type: 'pie',
                data: pieData,
                options: pieOptions
            })




        })
    </script>

</body>

</html>