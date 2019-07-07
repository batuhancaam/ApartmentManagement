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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.min.css"/>

    <!--
        RTL version
    -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.rtl.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.rtl.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.rtl.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.rtl.min.css"/>
    <style>
        html, body, h1, h2, h3, h4, h5 {
            font-family: "Raleway", sans-serif
        }
        .updateButton:hover{
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }
        .deleteButton:hover{
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }
    </style>

</head>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
    <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i
                class="fa fa-bars"></i> &nbsp;Menu
    </button>
    <span class="w3-bar-item w3-right">Apartman Yönetimi</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <a href="#" class="w3-bar-item w3-button w3-padding-4 w3-right w3-margin-0 w3-hide-large w3-hover-black"
       onclick="w3_close()" title="close menu"><i class="fa fa-remove "></i></a>
    <div class="w3-container w3-row">


        <div class="w3-col s8 w3-bar">

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

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <!-- Header -->
    <!--  <header class="w3-container" style="padding-top:22px">
        <h5><b><i class="fa fa-dashboard"></i> Panelim</b></h5>
      </header>-->

    <div class="w3-row-padding w3-margin-bottom">


        <div class="w3-panel">
            <div class="w3-row-padding" style="margin:0 -16px">


                <div style="cursor:pointer" class="w3-container w3-third w3-col s4 w3-red">
                    <div class="w3-left"><i class="fa fa-flag w3-xxxlarge"></i></div>
                    <div class="w3-clear"></div>
                    <p>Aidat Girin</p>
                </div>


            </div>
            <div id="AidatContent" class="w3-container w3-card-4 sorun">

                <br>
                <p>
                    <label class="w3-text-grey">Aidat Tutarı</label>
                    <input maxlength="3" class="w3-input w3-border" type="text" id="DuesAmo" required>
                </p>


                <p>
                    <label class="w3-text-grey">Adiat Tarihi</label>
                    <input class="w3-input w3-border" type="date" id="DuesDt" required>

                </p>
                <p>
                    <label class="w3-text-grey">Aidat Açıklaması</label>
                    <input maxlength="128" class="w3-input w3-border" type="text" id="DuesAck" required>

                </p>
                <p>

                    <input class="w3-btn w3-padding w3-teal" style="width:120px" type="submit" id="AddDues">

                </p>


            </div>


        </div>


        <br>

        <!-- Footer -->

        <!-- End page content -->
    </div>
</div>
<hr>
<div class="w3-main" style="margin-left:300px;margin-top:43px;">


    <div class="w3-row-padding w3-margin-bottom">


        <div class="w3-container" id="sadsa">
            <h5>Aidatlar</h5>
            <table id="ExTable" class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
                <thead>
                <tr>
                    <th>Aidat Tutarı</th>
                    <th>Aidat Tarihi</th>
                    <th>Aidat Açıklaması</th>
                    <th>Düzenle</th>
                    <th>Sil</th>


                </tr>
                </thead>

                <tbody>
                <?php
                foreach ($data as $duesTableData) {

                    echo "<tr>
                        <input type=\"hidden\" name=\"ExId\"  value=" . $duesTableData["DuesId"] . ">
                        <td id='exTit'>" . $duesTableData["DuesAmmo"] . "</td>
                        <td id='exAck'>" . $duesTableData["DuesDT"] . "</td>
                        <td id='exTp'>" . $duesTableData["DuesAck"] . "</td>
                        <td><button data-toggle=\"modal\" data-target=\"#exampleModal\" class=\"updateButton\" style=\"width:120px;background-color:#009688; color: white;\"  value=" . $duesTableData["DuesId"] . "> Düzenle </button></td>
                        <td><button class=\"deleteButton\" style=\"width:120px;background-color:#f44336; color: white;\" type=\"submit\" name=\"ExDelete\" value=" . $duesTableData["DuesId"] . ">Sil</td>
                        	
                        </tr> ";
                }


                ?>


                </tbody>
            </table>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Aidatları Düzenle</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <input type="hidden" class="form-control" id="DuesId"/>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Aidat Tutarı:</label>
                                <input maxlength="3" type="text" class="form-control" id="DuesAmmo"/>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Aidat Tarihi:</label>
                                <input type="date" class="form-control" id="DuesDat"/>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Aidat Açıklaması:</label>
                                <input maxlength="128" type="text" class="form-control" id="DuesAckl"/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button id='updateDues' type="button" class="btn btn-primary">Kaydet</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <hr>
    </div>
</div>

<script>

    $('#AddDues').click(function (event) {
        var DuesAmmo = $("#DuesAmo").val();
        var DuesDt = $("#DuesDt").val();
        var DuesAck = $("#DuesAck").val();
        debugger

        var JsonParams = {
            DuesAmmo: DuesAmmo,
            DuesDt: DuesDt,
            DuesAck: DuesAck,
        }
        $.ajax({
            type: "POST",
            data: JsonParams,
            url: "InsertDues",
            success: function (response) {
                if (response) {
                    alertify.alert('Aidat Eklendi', 'Aidat başarıyla eklenmiştir.', function(){
                        location.reload()
                    });

                }
            },
            error: function (e) {
            }
        });


    })
    $('.updateButton').click(function (event) {
        var DeusId= this.value;
        var currentRow = $(this).closest("tr");
        var Tutar = currentRow.find("td:eq(0)").html();
        var Tarih=currentRow.find("td:eq(1)").html();
        var Ack = currentRow.find("td:eq(2)").html();
        debugger

        $("#DuesId").val(DeusId);
        $("#DuesAmmo").val(Tutar);
        $("#DuesDat").val(Tarih);
        $("#DuesAckl").val(Ack);



    })

    $(".deleteButton").click(function (event) {
        var DuesId= this.value;
        var jsonParams = {
            DuesId: DuesId
        }
        $.ajax({
            type: "POST",
            data: jsonParams,
            url: "DeleteDues",
            success: function(response) {
                if(response){
                    alertify.alert('Aidat Silindi', 'Aidat başarıyla Silindi.', function(){
                        location.reload()
                    });
                }
            },
            error:function (e) {
                debugger

            }
        });

    })
    $('#updateDues').click(function (event) {
        debugger
        var DuesId = $("#DuesId").val();
        var DuesAmmo = $("#DuesAmmo").val();
        var DuesDat = $("#DuesDat").val();
        var DuesAckl = $("#DuesAckl").val();

        var JsonParams = {
            DuesId:DuesId,
            DuesAmmo: DuesAmmo,
            DuesDt: DuesDat,
            DuesAck: DuesAckl,
        }

        $.ajax({
            type: "POST",
            data: JsonParams,
            url: "UpdateDues",
            success: function(response) {
                if(response){
                    alertify.alert('Aidat Güncellendi', 'Aidat başarıyla Güncellendi.', function(){
                        location.reload()
                    });
                }
            },
            error:function (e) {
            }
        });

    })


</script>












