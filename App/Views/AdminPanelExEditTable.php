<div class="w3-main" style="margin-left:300px;margin-top:43px;">


    <div class="w3-row-padding w3-margin-bottom">


        <div class="w3-container">

            <table id="ExTable" class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
                <thead>
                <tr>
                    <th>Başlık</th>
                    <th>Açıklama</th>
                    <th>Gider Tipi</th>
                    <th>Gider Tutarı</th>
                    <th>Gider Tarihi</th>
                    <th>Sil</th>
                    <th>Düzenle</th>

                </tr>
                </thead>

                <tbody>
                <?php
                foreach ($data as $exTableData) {

                    echo "<tr>
                        <input type=\"hidden\" name=\"ExId\"  value=" . $exTableData["ExID"] . ">
                        <td id='exTit'>" . $exTableData["ExTITLE"] . "</td>
                        <td id='exAck'>" . $exTableData["ExACK"] . "</td>
                        <td id='exTp'>" . $exTableData["ExTP"] . "</td>
                        <td id='ExAmo'>" . $exTableData["ExAMO"] . "</td>
                        <td id='ExDt'>" . $exTableData["ExDT"] . "</td>
                        <td><button data-toggle=\"modal\" data-target=\"#exampleModal\" class=\"updateButton\"  style=\"width:120px;background-color:#009688; color: white;\"  value=" . $exTableData["ExID"] . "> Düzenle </button></td>
                        <td><button class=\"deleteButton\" style=\"width:120px;background-color:#f44336; color: white;\" type=\"submit\" name=\"ExDelete\" value=" . $exTableData["ExID"] . ">Sil</td>
                        	
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
                            <h5 class="modal-title" id="exampleModalLabel">Giderleri Düzenle</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                                <div class="form-group">

                                    <input type="hidden" class="form-control" id="ExId"/>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Başlık:</label>
                                    <input type="text" class="form-control" id="ExTitle"/>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Gider Tipi:</label>
                                    <input type="text" class="form-control" id="ExTp"/>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Gider Açıklaması:</label>
                                    <input type="text" class="form-control" id="ExAck"/>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Gider Tarihi:</label>
                                    <input type="date" class="form-control" id="ExDt"/>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Gider Tutarı:</label>
                                    <input type="text" class="form-control" id="ExAmmo" maxlength="5"/>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button id='updateEx' type="button" class="btn btn-primary">Kaydet</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <hr>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.updateButton').click(function (event) {
            var ExId= this.value;
            debugger
            var currentRow = $(this).closest("tr");
            var baslik = currentRow.find("td:eq(0)").html();
            var giderTipi=currentRow.find("td:eq(2)").html();
            var giderAciklamasi = currentRow.find("td:eq(1)").html();
            var giderTarih = currentRow.find("td:eq(4)").html();
            var giderTutari = currentRow.find("td:eq(3)").html();

            $("#ExId").val(ExId);
            $("#ExTitle").val(baslik);
            $("#ExTp").val(giderTipi);
            $("#ExAck").val(giderAciklamasi);
            $("#ExDt").val(giderTarih);
            $("#ExAmmo").val(giderTutari);


        })
        $('#updateEx').click(function (event) {
            debugger
            var ExId = $("#ExId").val();
            var ExTitle = $("#ExTitle").val();
            var ExTp = $("#ExTp").val();
            var ExAck = $("#ExAck").val();
            var ExDt = $("#ExDt").val();
            var ExAmmo = $("#ExAmmo").val();
            var JsonParams = {
                ExId:ExId,
                ExTitle:ExTitle,
                ExTp:ExTp,
                ExAck:ExAck,
                ExDt:ExDt,
                ExAmmo:ExAmmo,
            }

            $.ajax({
                type: "POST",
                data: JsonParams,
                url: "UpdateEx",
                success: function(response) {
                    if(response=="success"){
                        alertify.alert('Gider Güncellendi', 'Gider başarıyla güncellenmiştir.', function(){
                            location.reload()
                        });
                    }
                    else {
                        alert("Kayıt Eklenemedi Alanları Düzgün Giriniz")
                    }
                },
                error:function (e) {
                }
            });

        })
        $(".deleteButton").click(function (event) {
            var ExId= this.value;
            var jsonParams = {
                ExID: ExId
            }
            $.ajax({
                type: "POST",
                data: jsonParams,
                url: "DeleteEx",
                success: function(response) {
                    if(response=="success"){
                        alertify.alert('Gider Silindi', 'Gider başarıyla silinmiştir.', function(){
                            location.reload()
                        });
                    }
                    else {
                        alert("Kayıt Eklenemedi Alanları Düzgün Giriniz")
                    }
                },
                error:function (e) {

                }
            });

        })
        $("#AddEx").click(function () {
            var ExId =""
            var ExTitle = $("#ExTit").val();
            var ExTp = $("#ExTyp").val();
            var ExAck = $("#ExAckl").val();
            var ExDt = $("#ExDte").val();
            var ExAmmo = $("#ExAmo").val();

            var JsonParams = {
                ExId : ExId,
                ExTitle:ExTitle,
                ExTp:ExTp,
                ExAck:ExAck,
                ExDt:ExDt,
                ExAmmo:ExAmmo,
            }
            $.ajax({
                type: "POST",
                data: JsonParams,
                url: "InsertEx",
                success: function(response) {
                    if(response=="success"){
                        alertify.alert('Gider Eklendi', 'Gider başarıyla eklenmiştir.', function(){
                            location.reload()
                        });
                    }
                    else {
                        alert("Kayıt Eklenemedi Alanları Düzgün Giriniz")
                    }
                },
                error:function (e) {
                    debugger

                }
            });

        })

    })



</script>







