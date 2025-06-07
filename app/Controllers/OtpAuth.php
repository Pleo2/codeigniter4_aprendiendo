<?php

namespace App\Controllers;

class OtpAuth extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    
    public function helloworld(): void 
    {
        echo "Hello, World!";
    } 

    public function generateOtp(): void 
    {
        $otp = rand(100000, 999999); // Simple 6-digit OTP generation
        // Here you would typically send the OTP to the user via email or SMS
        // return "Your OTP is: " . $otp;
        echo "Your OTP is: " . $otp;
    }
}
