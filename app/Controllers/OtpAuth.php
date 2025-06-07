<?php

namespace App\Controllers;

class OtpAuth extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function generateOtp(): void 
    {
        $otp = rand(100000, 999999); // Simple 6-digit OTP generation
        // Here you would typically send the OTP to the user via email or SMS
        // return "Your OTP is: " . $otp;
        echo "Your OTP is: " . $otp;
    }
    
    public function helloworld($slug): void 
    {
        echo "Hello, World! $slug from OtpAuth Controller!";
    } 

    public function catname($name, $num): void 
    {
        echo "Hello, $name! You have $num cats.";
    }
    public function regex($slug): void 
    {
        echo "Hello, World! $slug from OtpAuth Controller with regex!";
    }
}
