<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\PurchasesInvoice;
use App\SalesInvoice;

class InvoiceReportController extends Controller
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
        
         $p_invoices = auth()->user()->purchasesInvoice()->paginate(5);

         $s_invoices = auth()->user()->salesInvoice()->paginate(5);

        // $p_invoices = PurchasesInvoice::where('user_id' , auth()->id())
        // ->paginate(5);

        // $s_invoices = SalesInvoice::where('user_id' , auth()->id())->paginate(5);

        return view('dashboard.Reports.invoicesReports' , 
        compact("p_invoices" , "s_invoices"));

    }


    public function index2()
    {
       return view('dashboard.Reports.invoicesReports'); 
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
