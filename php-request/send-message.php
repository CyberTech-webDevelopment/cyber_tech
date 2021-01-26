<?php
 require_once "../config/config.php";
 require_once "../classes/DB.class.php";
  $db=new DB();
  $db->tblName='clients';
  
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $full_name = $_POST['full-name'];
    $email = $_POST['mail'];
    $phone = $_POST['phone'];
    $company_name = $_POST['company-name'];
    $p_description = $_POST['project-description'];
    $message_client = $_POST['message'];
    $country_name=$_POST['country-name'];
    $lng=$_POST['lng'];
 
  $sql_response="SELECT response_$lng AS 'response_lng' FROM message_response_clients";
  $result_response=mysqli_query($con, $sql_response);
  if(mysqli_num_rows($result_response)>0){
    $row=mysqli_fetch_assoc($result_response);
    $message_res="".$row['response_lng']."";
    $search  = array(PHP_EOL, 'full-name');
    $replace = array('<br>', $full_name);
    $message_res_vacancy=str_ireplace($search, $replace, $message_res);
  }

require_once '../swiftMailer/vendor/autoload.php';
        
        // Create the Transport
            $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
             ->setUsername('cyberTech.armenia@gmail.com')
             ->setPassword('ocswkwkvdezncgft');
             // Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);

             if(!empty($_FILES["file"]["name"])){
    // ==========uploaded file===============                 
             $file=$_FILES['file']['name'];
             $tmp=$_FILES['file']['tmp_name'];
             $type=$_FILES['file']['type'];
             $format=explode(".", $file);
             $extantion=end($format);
             $newname = rand(0,1000).".".$extantion; 
             $folder="files/".$newname;

                  move_uploaded_file($tmp, $folder);
                  $attachment=Swift_Attachment::fromPath($folder, $type);
                  $message = (new Swift_Message('Client'))
                  ->setFrom(['cyberTech.armenia@gmail.com' => 'Cyber Tech'])
                  ->setTo(['naromisho87@gmail.com' => 'A name'])
                  ->attach($attachment)
                  ->setBody("<h3>Full name: $full_name <br>
                             Company name: $company_name <br>
                             E-mail: $email <br>
                             Phone number: $country_name  $phone <br>
                             Project Description: $p_description <br>
                             Message: $message_client </h3>", 'text/html'); 
                             $result = $mailer->send($message);
            if($result ){
              echo 'Message sucsessfuly sending';
              unlink($folder);
            }     
}
else{
           $message = (new Swift_Message('Client'))
                  ->setFrom(['cyberTech.armenia@gmail.com' => 'Cyber Tech'])
                  ->setTo(['naromisho87@gmail.com' => 'A name'])
                  ->setBody("<h3>Full name: $full_name <br>
                             Company name: $company_name <br>
                             E-mail: $email <br>
                             Phone number: $country_name $phone <br>
                             Project Description: $p_description <br>
                             Message: $message_client </h3>", 'text/html');  
                             $result = $mailer->send($message);
            if($result ){
              echo 'Message sucsessfuly sending';

            }     
}
              $data=array(
                         'full_name'=>$full_name,
                         'company_name'=>$company_name,
                         'email'=>$email,
                         'country_name'=>$country_name,
                         'phone_number'=>$phone,
                         'project_description'=>$p_description,
                         'message'=>$message_client,
                     );
              $insert_message=$db->insert($data);
              if($insert_message){
              }
 // ------------------------message_response_vacancy---------------------------
               $message_to_applicant = (new Swift_Message('Cber Tech'))
                  ->setFrom(['cyberTech.armenia@gmail.com' => 'Cyber Tech'])
                  ->setTo([$email => 'A name'])
                  ->setBody("<h3> $message_res_vacancy </h3>", 'text/html');  
                           $mailer->send($message_to_applicant);

}
?>