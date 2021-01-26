<?php 

include 'fixed-soc-icons.php';
include 'config/config.php';
$arr_lang=array('am', 'ru', 'en');
  echo $lang_menu;
 ?>
<section class="w-100 navbar-container">
      <div class="container">
           <div class="row pb-3">
                  <nav class="w-100 pl-0 pr-0 navbar navbar-expand-lg d-flex flex-wrap">
                    <div class="w-100 d-flex justify-content-between">
                          <div class="w-25 hidden-div-menu"></div>
                          <div class="w-50 logo"><a class="navbar-brand" href="index.php"><img src="<?php echo $lng_folder?>images/cyber-tech-logo.png"></a>
                          </div>
                          <div class=" nav-right w-25 pb-2">
                               <div class="dropdown text-right">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownlng" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <?php echo "<span data-lng='' class='active-lng-a'>".strtoupper($lang_menu)."</apan>"; ?>
                                    </button>
                                    <div class="dropdown-menu text-right" aria-labelledby="dropdownlng">
                                      <?php
                                         foreach ($arr_lang as $value) {
                                             if($value!=$lang_menu){
                                              $str_lang = strtoupper($value);
                                              echo "<a class='dropdown-item lng-a' href='$f$value/$file_name' data-lng='$value'>$str_lang</a>";
                                             }
                                         }
                                      ?>
                                      <!-- <a class="dropdown-item lng-a" href="" data-lng='ru'>RU</a> -->
                                    </div>
                               </div>
                               <div class="text-right"><img src="<?php echo $lng_folder?>icons/tel.png" class="pr-2">+37496111212</div>
                          </div>
                          
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                              <!-- <span class="navbar-toggler-icon"></span> -->
                              <img src="<?php echo $lng_folder?>icons/mobile-menu-icon.png" data-src="<?php echo $lng_folder?>icons/close-menu.png" class="">
                          </button>
                     </div>
                     <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav mr-auto w-100 d-flex justify-content-center">
                          <?php
                              $sql="SELECT id, name_$lang_menu AS 'menu_name', link FROM menu";
                              $result=mysqli_query($con, $sql);
                              while ($row=mysqli_fetch_assoc($result)) {
                                  if($row['link']==$link_active){
                                    echo "<li class='nav-item'>
                                             <a class='nav-link active-menu' href='".$lang.$row['link'].".php'>".$row['menu_name']."</a>
                                         </li>";
                                  }
                                  else{

                                    echo "<li class='nav-item'>
                                             <a class='nav-link' href='".$lang.$row['link'].".php'>".$row['menu_name']."</a>
                                         </li>";
                                  }
                                  if($row['link']=='get-it-free'){
                                    echo "<li class='nav-item d-flex flex-column justify-content-center '>
                                             <a class='nav-link get-it-free' href='".$lang."get-it-free.php'>".$row['menu_name']."</a>
                                          </li>";
                                  }
                              }
                           ?>

                            
                            <li class="nav-right-mobile pt-2 pb-2 ml-3">
                               <!-- <div class="pt-2 pb-2">EN</div> -->
                               <div class="dropdown text-left">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownlng" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <?php echo "<span data-lng='' class='active-lng-a'>".strtoupper($lang_menu)."</apan>"; ?>
                                    </button>
                                    <div class="dropdown-menu text-left" aria-labelledby="dropdownlng">
                                      <?php
                                         foreach ($arr_lang as $value) {
                                             if($value!=$lang_menu){
                                              $str_lang = strtoupper($value);
                                              echo "<a class='dropdown-item lng-a' href='$f$value/$file_name' data-lng='$value'>$str_lang</a>";
                                             }
                                         }
                                      ?>
                                    </div>
                               </div>
                               <div class="pt-2 pb-2"><img src="<?php echo $lng_folder?>icons/tel.png" class="pr-2">+37496111212</div>
                            </li>
                            <li class="mobile-soc-icons pt-2 pb-2 ml-3 mt-4 mb-4">
                               <div><img src="<?php echo $lng_folder?>icons/facebook-icon.png"></div>
                               <div class="pl-4"><img src="<?php echo $lng_folder?>icons/linkedin-icon.png"></div>
                               <div class="pl-4"><img src="<?php echo $lng_folder?>icons/twitter-icon.png"></div>
                            </li>
                        </ul>
                    </div>
                  </nav>
         </div>
    </div>
</section>
