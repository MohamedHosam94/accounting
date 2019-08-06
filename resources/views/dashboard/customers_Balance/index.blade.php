@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1> </h1>

            <ol class="breadcrumb">
               
                    <a><i class="fa fa-dashboard"></i> </a>
      
            </ol>

        </section>

        <section class="content">


            <a style="margin:1%" class="btn btn-primary" href="{{ route('dashboard.customers_balance.create') }}" role="button"><i class="fa fa-plus"></i>  اضف حساب عميل </a>

          
            {{-- table for view of customers balance --}}
            
          <div>
            
           
            <h3>حساب العملاء</h3>


           <table class="table" style="margin-top:3%">

               <thead>
                 <tr>
                   <th scope="col"># رقم حساب العميل</th>
                   <th scope="col">الاسم</th>
                   <th scope="col">رقم الموبايل</th>
                   <th scope="col">المنطقة</th>
                   <th scope="col">البريد</th>
                 </tr>
               </thead>

               {{-- @foreach ($recv_bond as $r_bond) --}}
               {{-- <tbody>
                 <tr>
                   <th scope="row"> {{ $r_bond->id }} </th>
                   <td> {{ $r_bond->name }} </td>
                   <td> {{ $r_bond->mobile_num }} </td>
                   <td> {{ $r_bond->amount }} </td>
                   <td> {{ $r_bond->type }} </td>
                 </tr>

               </tbody> --}}
               {{-- @endforeach --}}
             </table>

         
              


         </div>




        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection

