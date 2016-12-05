<?php
namespace RuddyStore\Http\Controllers\Front;

use Illuminate\Http\Request;

use RuddyStore\Http\Requests;
use RuddyStore\Http\Controllers\Front\Controller;

class IndexController extends Controller
{
    public function index() 
    {
    	return view('front_end.layouts.layout');
    }
}
