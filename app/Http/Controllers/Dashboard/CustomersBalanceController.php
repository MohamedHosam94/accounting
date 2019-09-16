<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\CustomersBalance;
use App;
use Meneses\LaravelMpdf\Facades\LaravelMpdf as PDF;

class CustomersBalanceController extends Controller
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
        $customers = auth()->user()->customersBalance()->paginate(5);
        
        return view('dashboard.customers_balance.index' , compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('dashboard.customers_balance.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $customers = request()->validate([
 
            'name'         => ['required'],
            'email'        => ['required'],
            'address'      => ['required'],
            'mobile_num'   => ['required'],
            'account_num'  => ['required'],
            
            ]);
    
           
           auth()->user()->customersBalance()->create($customers);
           
           $pdf = PDF::loadView('dashboard.customers_Balance.print' , $customers);
           return $pdf->stream();
            // ReceivedBond::create($r_bondattributes);
    
            return redirect('/dashboard/customers/index');
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
