<div class="w3-main" style="margin-left:300px;margin-top:43px;">



    <div class="w3-row-padding w3-margin-bottom">








    <div class="w3-container">
        <h5>Yapılan Harcamalar</h5>
        <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
            <thead>
            <tr>
                <th>Başlık</th>
                <th>Açıklama</th>
                <th>Gider Tipi</th>
                <th>Gider Tutarı</th>
                <th>Gider Tarihi</th>

            </tr>
            </thead>

            <tbody>
            <?php
            foreach ($data as $exTableData){
                echo "<tr><td>".$exTableData["ExTITLE"]."</td>
                        <td>".$exTableData["ExACK"]."</td>
                        <td>".$exTableData["ExTP"]."</td>
                        <td>".$exTableData["ExAMO"]."</td>
                        <td>".$exTableData["ExDT"]."</td>
                        	
                        </tr> ";
            }


            ?>


            </tbody></table><br>

    </div>
    <hr>
    </div>


