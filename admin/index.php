 
 <?php

 // session_start();

include "logout.php";

 if(isset($_SESSION['login'])){

           include "heder.php";

        ?>
    <body>
        <?php
           include "menu.php";

           include "footer.php";
        ?>
    </body>
    </html>
<?php 
}
else{
     ?>
               <script> 
                location.href="login.php"
               </script>
            <?php
}
?>