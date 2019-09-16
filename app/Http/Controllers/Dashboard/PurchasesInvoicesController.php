<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\PurchasesInvoice;
use App;
use Meneses\LaravelMpdf\Facades\LaravelMpdf as PDF;

class PurchasesInvoicesController extends Controller
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
        return view('dashboard.invoices.create-purchase-inv');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $p_invoice = request()->validate([
 
            'name'       => ['required'],
            'amount'     => ['required'],
            'mobile_num' => ['required'],
            'products'   => ['required'],
            'quantity'   => ['required'],
            'type'       => ['required'],
    
            ]);
    
           
            auth()->user()->purchasesInvoice()->create($p_invoice);

            $pdf = PDF::loadView('dashboard.invoices.print-purchase' , $p_invoice);
            return $pdf->stream();
           
            // PurchasesInvoice::create($p_invoice);
    
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
    public function edit(PurchasesInvoice $purchasesInv)
    {
      
        return view('dashboard.invoices.purchaseEdit' , compact("purchasesInv"));
    }

    //  search the invoices to edit 
     public function search(Request $request) 
     { 
      
        $query = $request->input('query');

        $purchasesInv = PurchasesInvoice::where('user_id' , auth()->id())
         ->where('id' , 'like' , "%$query%")
         ->paginate(5);

         return view('dashboard.invoices.purchaseShow' , compact('purchasesInv'));
     } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PurchasesInvoice $purchasesInv , Request $request)
    {
        
        $purchasesInv->update(
            request()->validate([
                'name'         => ['required'],
                'amount'       => ['required'],
                'mobile_num'   => ['required'],                
                'products'     => ['required'],
                'quantity'     => ['required'],
                'type'         => ['required'],
            ])
       );

    //    return (request()->all());

       return redirect('/dashboard/invoices/purchasesInvoice/show');
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
