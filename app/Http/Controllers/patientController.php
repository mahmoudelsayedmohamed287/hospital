<?php

namespace App\Http\Controllers;
include 'phpmailer/PHPMailerAutoload.php';
use Illuminate\Http\Request;
use App\departments;
use App\beds;
use App\patients;

class patientController extends Controller
{
    public function index(){
     
           
        $departments = departments::all();
        $beds = beds::all();
        return view('patient')->with('data',['departments' => $departments, 'beds' => $beds]);
       
    }
    public function add(request $request){
        $patients = new patients;

        $data = [
        'name'=>$request->name,
        'address'=>$request->address,
        'telephone'=>$request->telephone,
        'email'=>$request->email,
        'bed_id' => $request->bed,
        'departments' => $request->departments

        ];

        $patients->name = $data['name'];
        $patients->address = $data['address'];
        $patients->telephone = $data['telephone'];
        $patients->email = $data['email'];
        $patients->bed_id = $data['bed_id'];
        $patients->department_id = $data['departments'];
        $patients->save();
        


        
        
$message= $data['email'];
$name='sara';
$email='engmahmoudelsayed2019@gmail.com';
$subject='';  
$mail = new \PHPMailer();
               $mail->isSMTP();
               $mail->Host     = "smtp.mailtrap.io";
               $mail->Username = "81a1ddbd73d28e";
               $mail->Password = "ee94cdb552f425";
               $mail->Port     = "2525";
               $mail->SMTPSecure = 'tls';
                $mail->SMTPAuth = true;
                $mail->isHTML(true);
                $mail->CharSet = 'UTF-8';
                $mail->SetFrom($data['email']);
                $mail->addAddress($email);
                $mail->Subject = 'This is a test email';
                $mail->Body = '<p>';
                $mail->Body .=  "your phone ".$data['telephone'];
                $mail->Body .=  '</p>';
                $mail->Body .= '<p>';
                $mail->Body .= "your bed number ".$data['bed_id'];
                $mail->Body .= '</p>';
                $mail->Body .= '<p>';
                $mail->Body .= "your department ".$data['departments'];
                $mail->Body .=  '</p>';
                $mail->Body .= '<p>';
                $mail->Body .= "your address ".$data['address'];
                $mail->Body .=  '</p>';
                $mail->Body .=  $message;
                $mail->Body .= '</p>';
                           

          if($mail->send()) {
             echo 'email send successfuly Please Check Your Email';
             
         }else {
             echo 'there is error';
            }
              
             
     


    }
}
