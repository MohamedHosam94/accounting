<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ReceivedBond;

use App\Bond;
// use PDF;
use App;
// use NahidulHasan\Html2pdf\Facades\Pdf;
// use Barryvdh\DomPDF\Facade as PDF;
// use Barryvdh\Snappy\Facades\SnappyPdf;
// use Barryvdh\DomPDF\PDF;
// use Illuminate\Support\Facades\Cache;
use Meneses\LaravelMpdf\Facades\LaravelMpdf as PDF;

class BondsController extends Controller
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
       
           $bonds = auth()->user()->bond()->paginate(5);             
        //  $bond = Bond::where('user_id' , auth()->id())->get();
         

        return view("dashboard.bonds.index2" , compact("bonds"));
        // $recv_bond = ReceivedBond::all();

        // return view("dashboard.bonds.index" , compact("recv_bond"));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('dashboard.bonds.create2');
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

        $bondattributes = request()->validate([
 
            'name'              => ['required'],
            'amount'            => ['required'],
            'amount_in_letters' => ['required'],
            // 'mobile_num'        => ['required'],
            'payment_against'   => ['required'],
            'bank'              => ['required'],
            'type'              => ['required'],
            'bondtype'          => ['required'],
            'date'              => ['required'],
    
            ]);
    
           
           auth()->user()->bond()->create($bondattributes);

            $pdf = PDF::loadView('dashboard.bonds.print' , $bondattributes);
            return $pdf->stream();

            // ReceivedBond::create($r_bondattributes);
    
            //return redirect('/dashboard/bond/index2');
    }

    /**
     * Display the specified resource.
     * 
     * Changed by me to get the the bonds for edit 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        // $bonds = auth()->user()->bond()->paginate(5);

        
    //    $bonds = Bond::where('user_id' , auth()->id())->take(10)->get();

       return view('dashboard.bonds.edit'); 
    }


    // method to search the bonds for edit 

     public function search(Request $request) 
     { 
         $query = $request->input('query');

         $bonds = Bond::where('user_id' , auth()->id())
         ->where('id' , 'like' , "%$query%")
         ->paginate(5);

         return view('dashboard.bonds.edit' , compact('bonds'));
     } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bond $bond)
    {
        
       return view('dashboard.bonds.update' , compact("bond"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Bond $bond , Request $request)
    {
        // dd(request()->all());

        $bond->update(
            request()->validate([
                'name'              => ['required'],
                'amount'            => ['required'],
                'amount_in_letters' => ['required'],                
                'payment_against'   => ['required'],
                'bank'              => ['required'],
                'type'              => ['required'],
                'bondtype'          => ['required'],
                'date'              => ['required'],
            ])
       );

       return redirect('/dashboard/bond/show');
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

    public function test()
    {  
    
         $pdf = PDF::loadView('dashboard.bonds.print');

       return $pdf->stream();
    
    }
    
}
