<?php
     include "../heder.php";
     
?>
    <body>
        <?php
           include "../menu.php";
           // include "../../config/config.php";
           require_once "../../classes/DB.class.php";
           $db=new DB();
           $tblname='message_response_clients';
           $row=$db->all_in_one_row($tblname);
        ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-10 add-bs" style="margin: 0 auto">
                            <div class="card stacked-form">
                                <div class="card-header ">
                                    <h4 class="card-title">Message response clients</h4>
                                </div>
                                <div class="container-message mt-4 ml-3 mr-3">
                                    <div class="cont-am mb-3">
                                        <div class="form-group">
                                            <label>Message. Response clients in armenian language.</label>
                                            <p class="text-danger mb-0">Do not change the full-name glory in the text, and puts one space between glories.</p>
                                            <textarea rows="10" data-name='response_am' class="w-100"><?php echo $row['response_am'] ?></textarea>
                                        </div>
                                        <button class="btn-primary btn change-text">Change</button>
                                        <p class="res-text"></p>
                                    </div>
                                    <div class="cont-ru mb-3">
                                        <div class="form-group">
                                            <label>Message. Response clients in russian language.</label>
                                            <p class="text-danger mb-0">Do not change the full-name glory in the text, and puts one space between glories.</p>
                                            <textarea rows="10" data-name='response_ru' class="w-100"><?php echo $row['response_ru'] ?></textarea>
                                        </div>
                                        <button class="btn-primary btn change-text">Change</button>
                                        <p class="res-text"></p>
                                    </div>
                                    <div class="cont-en mb-3">
                                        <div class="form-group">
                                            <label>Message. Response clients in english language.</label>
                                            <p class="text-danger mb-0">Do not change the full-name glory in the text, and puts one space between glories.</p>
                                            <textarea rows="10" data-name='response_en' class="w-100"><?php echo $row['response_en'] ?></textarea>
                                        </div>
                                        <button class="btn-primary btn change-text">Change</button>
                                        <p class="res-text"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             <?php 
                include "../footer.php";
             ?>
            </div>
            <script src="../js/change-clients-text.js"> </script>
    </body>
</html>