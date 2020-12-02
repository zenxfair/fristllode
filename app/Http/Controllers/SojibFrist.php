<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SojibFrist extends Controller
{
   public function index(){
   	$title="Home";
   	$page="Home Page";
   	$data=[];
   	$data['posts']=[
   		[
   			'id'=>1,
   			'title'=>'Lorem ipsum',
   			'contant'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis molestie orci eget consectetur mattis. Curabitur sagittis mauris massa, vitae elementum sem dignissim hendrerit. Nullam ultrices dui non ornare tempus. Sed porttitor nibh quam, nec semper dolor fringilla non. Lorem ipsum dolor sit amet, consectetur adipiscing elit'
   		],
   		[
   			'id'=>2,
   			'title'=>'Lorem ipsum',
   			'contant'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis molestie orci eget consectetur mattis. Curabitur sagittis mauris massa, vitae elementum sem dignissim hendrerit. Nullam ultrices dui non ornare tempus. Sed porttitor nibh quam, nec semper dolor fringilla non. Lorem ipsum dolor sit amet, consectetur adipiscing elit'
   		],
   		[
   			'id'=>3,
   			'title'=>'Lorem ipsum',
   			'contant'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis molestie orci eget consectetur mattis. Curabitur sagittis mauris massa, vitae elementum sem dignissim hendrerit. Nullam ultrices dui non ornare tempus. Sed porttitor nibh quam, nec semper dolor fringilla non. Lorem ipsum dolor sit amet, consectetur adipiscing elit'
   		],
   		[
   			'id'=>4,
   			'title'=>'Lorem ipsum',
   			'contant'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis molestie orci eget consectetur mattis. Curabitur sagittis mauris massa, vitae elementum sem dignissim hendrerit. Nullam ultrices dui non ornare tempus. Sed porttitor nibh quam, nec semper dolor fringilla non. Lorem ipsum dolor sit amet, consectetur adipiscing elit'
   		],
   	];
   	$num=25;
   	$x='';
   	return view('home',$data,compact('title','page','num','x'));
   }
    public function about(){
    $title="About";	
    $page="About Page";
   	return view('about',compact('title','page'));
   }
}
