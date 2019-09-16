@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1></h1>

            <ol class="breadcrumb">
               
                    <a><i class="fa fa-dashboard"></i> </a>
      
            </ol>

        </section>

        <section class="content">

 

            

            <a style="margin:1%" class="btn btn-primary" href="{{ route('dashboard.suppliers_balance.create') }}" role="button"><i class="fa fa-plus"></i>  اضف حساب مورد </a>

          
           {{-- suppliers balance --}}
            
          <div>
            
           
            <h3>حساب الموردين</h3>


           <table class="table" style="margin-top:3%">

               <thead>
                 <tr>
                   <th scope="col"># رقم حساب المورد</th>
                   <th scope="col">الاسم</th>
                   <th scope="col">رقم الموبايل</th>
                   <th scope="col">المنطقة</th>
                   <th scope="col">البريد</th>
                 </tr>
               </thead>

               
               @foreach ($suppliers as $supplier) 
               <tbody>
                <tr>
                  <th scope="row"> {{ $supplier->account_num }} </th>
                  <td> {{ $supplier->name }} </td>
                  <td> {{ $supplier->mobile_num }} </td>
                  <td> {{ $supplier->address }} </td>
                  <td> {{ $supplier->email }} </td>
                </tr> 

              </tbody> 
              @endforeach 
            </table>


             {{ $suppliers->links() }}
                 
         </div>
  

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection

