<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\PurchasesInvoice;
use App\SalesInvoice;
use App\Bond;



class BondReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct() 
    { 

       $this->middleware('auth');
      
    }

    public function index()
    {
        
      return view('dashboard.Reports.index');

    }


    public function index2()
    {
            
         $bonds = auth()->user()->bond()->paginate(5);

         //$bonds = Bond::where('user_id' , auth()->id())->paginate(10);

       return view('dashboard.Reports.bondReports' , compact("bonds"));

    }


    // the search method 

     public function search(Request $request) 
     { 
      
        if ($request->input('query') !== null ) { 
            
        $query = $request->input('query');

        $requested_bonds = Bond::where('user_id' , auth()->id())
        ->where('id' , 'like' , "%$query%")
        ->get();
        
        }

        $qPayment = $request->input('qPayment');

        $requested_bonds2 = Bond::where('user_id' , auth()->id())
        ->where('type' , 'like' , "%$qPayment%")
        ->get();
        //  dd($requested_bonds2);

       return view('dashboard.Reports.bondReports' , compact("requested_bonds" , "requested_bonds2"));

     } 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
