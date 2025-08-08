<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Welcome to CodeIgniter with Bootstrap!',
            'page' => 'home', // To track active nav item
            'content' => 'This is a basic integration of Bootstrap.'
        ];
        
        return view('template', $data);
    }

    public function about(): string
    {
        $data = [
            'title' => 'About Us',
            'page' => 'about',
            'content' => 'Learn more about our application.'
        ];
        
        return view('template', $data);
    }

    public function contact(): string
    {
        $data = [
            'title' => 'Contact Us',
            'page' => 'contact',
            'content' => 'Get in touch with our team.'
        ];
        
        return view('template', $data);
    }
}