<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Apartman Yönetim</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        html, body, h1, h2, h3, h4, h5 {
            font-family: "Raleway", sans-serif
        }
    </style>

</head>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
    <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i> &nbsp;Menu</button>
    <span class="w3-bar-item w3-right">Apartman Yönetimi</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <a href="#" class="w3-bar-item w3-button w3-padding-4 w3-right w3-margin-0 w3-hide-large w3-hover-black"
       onclick="w3_close()" title="close menu"><i class="fa fa-remove "></i></a>
    <div class="w3-container w3-row">


        <div class="w3-col s8 w3-bar">
            <hr>
            <span>Hosgeldiniz <strong> Yönetici</strong> </span>


        </div>

        <div class="w3-bar-block">
            <div class="w3-container">

                <a href="GiderAdmin" class="w3-bar-item w3-button w3-padding "><i class="fa fa-history fa-fw"></i>&nbsp; Gider Girin</a>
                <a href="Aidat" class="w3-bar-item w3-button w3-padding "><i class="fa fa-eye fa-fw"></i>&nbsp; Adiat Girin</a>
                <a href="GelirlerAdmin" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>&nbsp; Gelirler</a>
                <a href="Logout" class="w3-bar-item w3-button w3-padding">Çıkış Yap</a>
            </div>

        </div>


</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" style="cursor:pointer" title="close side menu"
     id="myOverlay"></div>
<hr/>
<div class="w3-main" style="margin-left:300px;margin-top:43px;">


    <div class="w3-row-padding w3-margin-bottom">


        <div class="w3-container" id="sadsa">
            <h5>Gelirler</h5>
            <table id="ExTable" class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
                <thead>
                <tr>
                    <th>Ödeyen Kişi</th>
                    <th>Gelir Açıklaması</th>
                    <th>Gelir Tarihi</th>
                    <th>Gelir Tutarı</th>


                </tr>
                </thead>

                <tbody>
                <?php
                foreach ($data as $duesTableData) {

                    echo "<tr id='remove'>
                        
                        <td id='exTit'>" . $duesTableData["Usnm"] . "</td>
                        <td id='exAck'>" . $duesTableData["DuesAck"] . "</td>
                        <td id='exTp'>" . $duesTableData["DuesDt"] . "</td>
                        <td id='exTp'>" . $duesTableData["DuesAmo"] . "</td>
                        
                        </tr> ";
                }


                ?>


                </tbody>
            </table>


        </div>
        <hr>
    </div>
</div>












