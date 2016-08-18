<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;




class HomeController extends AppBaseController
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('home');
    }
}
