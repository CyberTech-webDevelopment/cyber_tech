<?php
 
 class Link{
 	private $f='';
 	private $lang;
 	private $lang_menu;
 	private $link_array=array('am', 'ru', 'en');
 	private $url = $_SERVER['REQUEST_URI'];
 	function __construct(argument)
 	{
 		if(isset($_SESSION['lang'])){
 			yes_SESSION()
        }
        else{
        	no_SESSION()
        }
 	}
 	    pablic function Url(){
            $url = explode('/', $this->url);
			$folder_name=$url[2];
			$lng_folder='';
			if(isset($url[3])){
				$file_name=$url[3];
			}
			else{
				$file_name='';
			}
 	    }
 	    pablic function yes_SESSION(){

 		}
 		pablic function no_SESSION(){

 		}
 }


?>