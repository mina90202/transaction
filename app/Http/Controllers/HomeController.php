<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Model\BranchSide;
// use App\Model\CenterSide;
use App\Transaction;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

 
   $transactions = Transaction::orderBy('created_at', 'desc')->paginate(20);

      // $recordone = BranchSide::select('record')->where('date', '2022-02-22')->sum('record');
      // $recordtwo = CenterSide::select('record')->where('date', '2022-02-22')->sum('record');

      // $end = $recordone - $recordtwo;


        return view('admin.home', compact('transactions'));
    }


    // public function checkResult() {

    //   $branchside = BranchSide::select('record')->where('date', '2022-02-22')->sum('record');
    //   $centerside = CenterSide::select('record')->where('date', '2022-02-22')->sum('record');


    //   return $branchside - $centerside;


    // }


  
}
