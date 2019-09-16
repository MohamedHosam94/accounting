<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GivenBond;


class GivenBondController extends Controller
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
        
        return view('dashboard.bonds.create-g-bond');
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

       // dd($request);

        $g_bondattributes = request()->validate([
 
           
            'name'              => ['required'],
            'amount'            => ['required'],
            'amount_in_letters' => ['required'],
            'mobile_num'        => ['required'],
            'payment_against'   => ['required'],
            'bank'              => ['required'],
            'type'              => ['required'],
            'date'              => ['required'],
    
            ]);
    
            auth()->user()->givenBond()->create($g_bondattributes);

           
            // GivenBond::create($g_bondattributes);
    
            return redirect('/dashboard/bonds/index');

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
