<?php

namespace App\Http\Controllers;
include 'phpmailer/PHPMailerAutoload.php';

use Illuminate\Http\Request;
use App\departments;
use App\doctors;
use App\appointment;

class appointmentController extends Controller

{
    public function index(){
     
        $doctors = doctors::all();
        $departments = departments::all();

        return view('appointment')->with('data',['doctors' => $doctors, 'departments' => $departments]);
       
    }
    public function add(request $request){
        $appointments = new appointment;

        $data = [
        'name' => $request->name,
        'age' => $request->age,
        'email' => $request->email,
        'address' => $request->address,
        'doctors' => $request->doctors,
        'phone' => $request->phone,
        'departments' => $request->departments


        ];

        $appointments->user = $data['name'];
        $appointments->age = $data['age'];
        $appointments->email = $data['email'];
        $appointments->address = $data['address'];
        $appointments->doctor_id = $data['doctors'];
        $appointments->phone = $data['phone'];
        $appointments->department_id = $data['departments'];
        $appointments->save();
        


        
        
$message= $data['name'];
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
                $mail->Body .=  "your phone ".$data['phone'];
                $mail->Body .=  '</p>';
                $mail->Body .= '<p>';
                $mail->Body .= "your doctor ".$data['doctors'];
                $mail->Body .= '</p>';
                $mail->Body .= '<p>';
                $mail->Body .= "your department ".$data['departments'];
                $mail->Body .=  '</p>';
                $mail->Body .= '<p>';
                $mail->Body .= "your age ".$data['age'];
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
