<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\SuppliersBalance;
use App;
use Meneses\LaravelMpdf\Facades\LaravelMpdf as PDF;

class SuppliersBalanceController extends Controller
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
        
        $suppliers = auth()->user()->suppliersBalance()->paginate(5);

    return view('dashboard.suppliers_balance.index' , compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.suppliers_balance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $suppliers = request()->validate([
 
            'name'         => ['required'],
            'email'        => ['required'],
            'address'      => ['required'],
            'mobile_num'   => ['required'],
            'account_num'  => ['required'],
            
            ]);
    
           
           auth()->user()->suppliersBalance()->create($suppliers);

           $pdf = PDF::loadView('dashboard.suppliers_balance.print' , $suppliers);
           return $pdf->stream();
           
            // ReceivedBond::create($r_bondattributes);
    
            return redirect('/dashboard/suppliers/index');
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
