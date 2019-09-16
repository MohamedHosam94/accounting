<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\PurchasesInvoice;
use App\SalesInvoice;

use App\Bond;

class BoxController extends Controller
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
        //


        //  $g_bonds = GivenBond::where("type" , "cash")
        //  ->orWhere("type" , "cheque")
        //  ->get();
 
        //  $r_bonds = ReceivedBond::where("type" , "cash")
        //  ->orWhere("type" , "cheque")
        //  ->get();

        $bonds = Bond::where('user_id' , auth()->id())
        ->where('type' , 'cash')
        ->paginate(6);

        $p_invoice = PurchasesInvoice::where("type" , "cash")
        ->orWhere("type" , "cheque")
        ->get();

        $s_invoice = SalesInvoice::where("type" , "cash")
        ->orWhere("type" , "cheque")
        ->get();

    return view("dashboard.box.index" ,
     compact("bonds" , "p_invoice" , "s_invoice")
     
        );
  
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
