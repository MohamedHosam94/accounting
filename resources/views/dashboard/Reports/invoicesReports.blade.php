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


         <div style="margin-bottom:1%">
          
          {{-- <a style="margin:1%" class="btn btn-primary" href="{{ route('dashboard.invoices.create-purchase') }}" role="button"><i class="fa fa-plus"></i>اضف فاتورة مشتريات </a>

          <a style="margin:1%" class="btn btn-success" href="{{ route('dashboard.invoices.create-sale') }}" role="button"><i class="fa fa-plus"></i> اضف فاتورة مبيعات</a> --}}
        
         </div>


        {{--   Purchases Invoices   --}}
         
        {{-- <div id="accordion" class="accordion">
            <div class="card">

              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn-primary collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="font-size:30px; margin-top:5px;">
                    فواتير المشتريات
                  </button>
                </h5>
              </div>
          
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <table class="table" style="margin-top:3%">

                        <thead>
                          <tr>

                            <th scope="col"> # رقم الفاتورة </th>
                                                       
                            <th scope="col">التفاصيل</th>
                            <th scope="col">المبلغ</th>
                            <th scope="col">النوع</th>

                          </tr>
                        </thead>
        
                         @foreach ($p_invoices as $p_inv)
                        <tbody>
                          <tr>
                            <th scope="row"> {{ $p_inv->id }} </th>
  
                            <td> {{ $p_inv->name }} </td>

                            <td> {{ $p_inv->amount }} </td>

                            <td> {{ $p_inv->type }} </td>

                          </tr>
        
                        </tbody>
                        @endforeach 
                      </table>
                </div>
              </div> --}}
                                   
              {{--  End Purchases Invoices   --}}



              {{--   Sales Invoices   --}}
 
              {{-- <div class="card-header" id="heading2">
                    <h5 class="mb-0">
                      <button class="btn-primary collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2" style="font-size:30px; margin-top:8px;">
                        فواتير المبيعات 
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                    <div class="card-body">
                        <table class="table" style="margin-top:3%">
    
                            <thead>
                                <tr>
                                <th scope="col"> # رقم الفاتورة </th>
            
                                <th scope="col">التفاصيل</th>
                                <th scope="col">المبلغ</th>
                                <th scope="col">النوع</th>

                                </tr>
                            </thead>
            
                          @foreach ($s_invoices as $s_inv)
                            <tbody>
                              <tr>
                                    <th scope="row"> {{ $s_inv->id }} </th>
  
                                    <td> {{ $s_inv->name }} </td>
        
                                    <td> {{ $s_inv->amount }} </td>
        
                                    <td> {{ $s_inv->type }} </td>
                                
                              </tr>
            
                            </tbody>
                            @endforeach 
                          </table>
                    </div>
                  </div> 
     
                  {{-- End Sales Invoices   --}}
    

            {{-- </div>
        </div> --}} 
            
          




        {{--  --}}


        <ul class="nav nav-tabs" id="myTab" role="tablist">
         
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">فواتير المشتريات </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"> فواتير المبيعات  </a>
          </li>
       
        </ul>
        <div class="tab-content" id="myTabContent">
            {{-- fade show --}}
          <div class="tab-pane active fade" id="home" role="tabpanel" aria-labelledby="home-tab">

              <table class="table" style="margin-top:0%">

                  <thead>
                    <tr>

                      <th scope="col"> # رقم الفاتورة </th>
                                                 
                      <th scope="col">التفاصيل</th>
                      <th scope="col">المبلغ</th>
                      <th scope="col">النوع</th>

                    </tr>
                  </thead>
  
                   @foreach ($p_invoices as $p_inv)
                  <tbody>
                    <tr>
                      <th scope="row"> {{ $p_inv->id }} </th>

                      <td> {{ $p_inv->name }} </td>

                      <td> {{ $p_inv->amount }} </td>

                      <td> {{ $p_inv->type }} </td>

                    </tr>
  
                  </tbody>
                  @endforeach 
                </table>

                {{ $p_invoices->links() }}
          </div>


          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

              <table class="table">
    
                  <thead style="margin-top:0;">
                      <tr>
                      <th scope="col"> # رقم الفاتورة </th>
  
                      <th scope="col">التفاصيل</th>
                      <th scope="col">المبلغ</th>
                      <th scope="col">النوع</th>

                      </tr>
                  </thead>
  
                @foreach ($s_invoices as $s_inv)
                  <tbody>
                    <tr>
                          <th scope="row"> {{ $s_inv->id }} </th>

                          <td> {{ $s_inv->name }} </td>

                          <td> {{ $s_inv->amount }} </td>

                          <td> {{ $s_inv->type }} </td>
                      
                    </tr>
  
                  </tbody>
                  @endforeach 
                </table>
  
                {{ $s_invoices->links() }}
          </div>
  
          
        </div>


        {{--  --}}
        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection

