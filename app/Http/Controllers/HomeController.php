<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomeController (){
        return view('side.home');
    } 
    public function AboutController (){
        return view('side.about');
    } 
    public function RoomController (){
        return view('side.room');
    } 
    public function GalleryController(){
        return view('side.gallery');
    } 
    public function BlogController (){
        return view('side.blog');
    } 
    public function ContactController (){
        return view('side.contact');
    } 
}






