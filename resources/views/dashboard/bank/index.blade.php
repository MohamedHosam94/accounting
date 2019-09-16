@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1></h1>

            <!-- {{-- @lang('site.users') --}} -->

            <ol class="breadcrumb">
                <!-- <li> -->

                        <!-- {{-- href="{{ route('dashboard.welcome') }}" --}} -->
                    <a><i class="fa fa-dashboard"></i> </a>

                    <!-- {{-- @lang('site.dashboard') --}} -->
                <!-- {{-- </li>
                <li class="active">@lang('site.users')
                </li> --}} -->
            </ol>
        </section>

        <section class="content">


         <div style="margin-bottom:5%">
          
          {{-- <a style="margin:1%" class="btn btn-primary" href="{{ route('dashboard.invoices.create-purchase') }}" role="button"><i class="fa fa-plus"></i>اضف فاتورة مشتريات </a> --}}

          {{-- <a style="margin:1%" class="btn btn-success" href="{{ route('dashboard.invoices.create-sale') }}" role="button"><i class="fa fa-plus"></i> اضف فاتورة مبيعات</a> --}}
        
         </div>

          
         {{-- <div> --}}
  

{{-- 
             <div style="margin-top:50px">


                <h3>سندات الصرف علي البنك</h3>


                <table class="table" style="margin-top:3%">
    
                    <thead>
                      <tr>
                        <th scope="col"># رقم السند</th>
                        <th scope="col">الاسم</th>
                        <th scope="col">رقم الموبايل</th>
                        <th scope="col">المبلغ</th>
                        <th scope="col">النوع</th>
                      </tr>
                    </thead>
    
                    @foreach ($g_bonds as $g_bond)
                    <tbody>
                      <tr>
                        <th scope="row"> {{ $g_bond->id }} </th>
                        <td> {{ $g_bond->name }} </td>
                        <td> {{ $g_bond->mobile_num }} </td>
                        <td> {{ $g_bond->amount }} </td>
                        <td> {{ $g_bond->type }} </td>
                      </tr>
    
                    </tbody>
                    @endforeach
                  </table>

             </div> --}}

                {{-- start of collapse div --}}

               <hr>
  
                    {{--  start of   --}}


                    
        <ul class="nav nav-tabs" id="myTab" role="tablist">
         
            <li class="nav-item active">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" 
              style="font-size:18px;">  كشف حساب البنك : </a>
            </li>
            
          </ul>


          <div class="tab-content" id="myTabContent">
              {{-- fade show --}}
            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
  
                <table class="table" style="margin-top:0%">
  
                    <thead>
                        <tr>

                          <th scope="col"># رقم السند</th>
                          <th scope="col">مدين</th>
                          <th scope="col">دائن</th>
                          <th scope="col">الرصيد</th>
                          <th scope="col">التفاصيل</th>
                          <th scope="col">التاريخ</th>

                        </tr>
                      </thead>
    
                    @foreach ($bond as $b)
                      <tbody>
                        <tr>
                          <th scope="row"> {{ $b->id }} </th>
                          

                          <td>
                              {{ $b->bondtype == "r-bond" ? $b->amount : ' ' }}
                          </td>

                          <td>
                              {{ $b->bondtype == "g-bond" ? $b->amount : ' ' }}
                          </td>

                          <td>  </td>

                          <td> {{ $b->name }} </td>
                          
                          <td> {{ $b->date }} </td>
                          
                      

                        </tr>
      
                      </tbody>
                    @endforeach
                  </table>
  
                  {{ $bond->links() }}
            </div>
  
        
          </div>



                    {{-- End of   --}}
        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection

