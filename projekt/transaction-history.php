<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div align="center">
        <div id="container">
            <div id="container_up">
                <a href="http://bank_projekt.pl">
                    <img class="logo" src="./css/logo_gora.gif" alt="bank">
                </a>

                <div id="nr_klienta">
                    <table>
                        <tr>
                            <td>Numer klienta: </td>
                        </tr>
                        <tr>
                            <td>Ostatnie udane logowanie: </td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- koniec div container_up-->

            <div id="menu_center">

                <ul id="first_lvl">

                    <li><a href="#"><span class="link">TRANSAKCJE</span></a>
                        <ul class="second_lvl">
                            <li class="first_menu_item"><a href="#">Lista rachunków</a></li>
                            <li><a href="#">Przelew jednorazowy</a></li>
                            <li><a href="#">Przelewy cykliczne</a></li>
                            <li><a href="#">Przelewy oczekujące</a></li>
                            <li><a href="transaction-history.php">Historia operacji</a></li>
                        </ul>
                    </li>
                    <li><span class="spaces">|</span></li>

                    <li><a href="#"><span class="link">LOKATY</span></a>
                        <ul class="second_lvl">
                            <li class="first_menu_item"><a href="#">Lista lokat</a></li>
                            <li><a href="#">Nowa lokata</a></li>
                        </ul>
                    </li>
                    <li><span class="spaces">|</span></li>

                    <li><a href="#"><span class="link">KARTY</span></a>
                        <ul class="second_lvl">
                            <li class="first_menu_item"><a href="#">Twoje karty</a></li>
                            <li><a href="#">Nowa karta</a></li>
                        </ul>
                    </li>
                    <li><span class="spaces">|</span></li>

                    <li><a href="#"><span class="link">KREDYTY</span></a>

                        <ul class="second_lvl">
                            <li class="first_menu_item"><a href="#">Pożyczka ekspress</a></li>
                            <li><a href="#">Pożyczka gotówkowa</a></li>
                            <li><a href="#">Debet na koncie</a></li>
                            <li><a href="#">Kredyt mieszkaniowy</a></li>
                        </ul>
                    </li>
                    <li><span class="spaces">|</span></li>

                    <li><a href="#"><span class="link">USŁUGI</span></a>

                        <ul class="second_lvl">
                            <li class="first_menu_item"><a href="#">Doładowania</a></li>
                            <li><a href="#">E-faktury</a></li>
                            <li><a href="#">Western union</a></li>
                            <li><a href="#">Kantor online</a></li>
                        </ul>
                    </li>
                    <li><span class="spaces">|</span></li>

                    <li><a href="#"><span class="link">OFERTY</span></a>
                        <ul class="second_lvl">
                            <li class="first_menu_item" style="width: 100px;"><a href="#" style="width: 100px;">Oferta
                                    banku</a></li>
                            <li style="width: 100px;"><a href="#" style="width: 100px;">Wnioski</a></li>
                            <li style="width: 100px;"><a href="#" style="width: 100px;">E-dokumenty</a></li>
                            <li style="width: 100px;"><a href="#" style="width: 100px;">Aplikacja mobilna</a></li>
                        </ul>
                    </li>

                </ul>

            </div>
            <!-- koniec menu center -->

            <div id="content">
                <div id="content_up">
                    <ul id="customer_details">
                        <li>Imie Nazwisko</li>
                        <li>Numer rachunku: 123456789</li>
                    </ul>
                </div>
                <!-- koniec div content up-->

                <div id="content_middle">
                   
                

                    
                </div>
                <!-- koniec div content middle -->

                <div id="content_down">

                </div>
                <!-- koniec div content down-->

            </div>

        </div>
        <!-- koniec div container-->

    </div>
</body>

</html>