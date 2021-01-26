<?php
require_once "../config/config.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['full-name'];
    $email = $_POST['mail'];
    $phone = $_POST['phone'];
    $link = $_POST['link'];
    $vacancy = $_POST['vacancy'];
    $lng=$_POST['lng'];
    $country_name=$_POST['country-name'];

  $sql_response="SELECT response_$lng AS 'response_lng' FROM message_response_vacancy";
  $result_response=mysqli_query($con, $sql_response);
  if(mysqli_num_rows($result_response)>0){
    $row=mysqli_fetch_assoc($result_response);
    $message_res="".$row['response_lng']."";
    $search  = array(PHP_EOL, 'name', 'vacancy');
    $replace = array('<br>', $name, $vacancy);
    $message_res_vacancy=str_ireplace($search, $replace, $message_res);
  }

require_once '../swiftMailer/vendor/autoload.php';
        
        // Create the Transport
            $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
             ->setUsername('cyberTech.armenia@gmail.com')
             ->setPassword('ocswkwkvdezncgft');
             // Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);

             if($_FILES["file"]["name"] != ''){
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
}
else{
   $attachment='';
}
            // Create a message
            $message = (new Swift_Message($vacancy))
            ->setFrom(['cyberTech.armenia@gmail.com' => 'Cyber Tech'])
            ->setTo(['naromisho87@gmail.com' => 'A name'])
            ->attach($attachment)
            ->setBody("<h3>Full name: $name <br>
                       E-mail: $email <br>
                       Phone number:$country_name $phone <br>
                       Title Vacancy: $vacancy <br>
                       Link: $link </h3>", 'text/html');
            // Send the message
            $result = $mailer->send($message);
            if($result ){
              echo 'Message sucsessfuly sending';
              unlink($folder);
// ------------------------message_response_vacancy---------------------------
               $message_to_applicant = (new Swift_Message('Cber Tech'))
                  ->setFrom(['cyberTech.armenia@gmail.com' => 'Cyber Tech'])
                  ->setTo([$email => 'A name'])
                  ->setBody("<h3> $message_res_vacancy </h3>", 'text/html');  
                           $mailer->send($message_to_applicant);
            }
}
?>