<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\SalesInvoice;
use App;
use Meneses\LaravelMpdf\Facades\LaravelMpdf as PDF;


class SalesInvoicesController extends Controller
{
   
   
     public function __construct() 
     {

      $this->middleware('auth');

     }
   
   
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.invoices.create-sale-inv');
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

        
        $s_invoice = request()->validate([
 
            'name'       => ['required'],
            'amount'     => ['required'],
            'mobile_num' => ['required'],
            'products'   => ['required'],
            'quantity'   => ['required'],
            'type'       => ['required'],
    
            ]);
    
           
            auth()->user()->salesInvoice()->create($s_invoice);

            $pdf = PDF::loadView('dashboard.invoices.print-sale' , $s_invoice);
            return $pdf->stream();
           
            // SalesInvoice::create($s_invoice);
    
            return redirect('/dashboard/invoices/index');
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
