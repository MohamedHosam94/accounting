@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1></h1>

            {{-- @lang('site.users') --}}

            <ol class="breadcrumb">
                <li>

                        {{-- href="{{ route('dashboard.welcome') }}" --}}
                    <a><i class="fa fa-dashboard"></i> </a>

                    {{-- @lang('site.dashboard') --}}
                {{-- </li>
                <li class="active">@lang('site.users')
                </li> --}}
            </ol>
        </section>

        <section class="content">

        <div class="row">

          <h1 class="title col-md-3"> تقارير السندات </h1>
          {{-- dashboard/reports/bonds/search --}}
          <form action="{{ route('dashboard.bondsReport.search') }}" 
          class="search-form col-md-9" method="GET" style="">
             
           <div class="row">

            <div class="col-md-5" style="">
             <i class="fa fa-search search-icon" 
             style="position:absolute; margin:35px;"></i>
            <input type="text" name="query" id="query"
             class="form-control" 
            value="{{ request()->input('query') }}"  placeholder="البحث برقم السند" style="text-align:center; border-radius:6px; margin:25px; width:60%">
 
           </div>


            <div class="col-md-4 input-group mb-3">
              
              <select class="custom-select" type="text" name="qPayment" id="qPayment" 
              style="width:51%; margin-top:9%;">
                <option selected> اختار طريقة الدفع </option>
                <option value="cash"> كاش </option>
                <option value="cheque"> شيك </option>
                <option value="deposit"> ايداع </option>
              </select>

              <button style="margin:7px; width:30%; margin-right:15px;" type="submit" class="btn btn-success">
                  بحث 
               </button>

            </div>


           </div>          
          
           {{-- <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                  <i class="fa fa-search search-icon" 
                  style="position:absolute; margin:35px;"></i>
              <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div> --}}
            {{-- <div class="col-md-2">     
            
             </div> --}}

          </form>
        </div>

         
        

          <div>
            

            <table class="table" style="margin-top:3%">

                <thead>
                  <tr>
                    <th scope="col"># رقم السند</th>
                    <th scope="col"> التفاصيل </th>
                    <th scope="col"> البنك </th>
                    <th scope="col">المبلغ</th>
                    <th scope="col">طريقة الدفع </th>
                  </tr>
                </thead>

              
              {{-- @if (count($requested_bonds) >= 1) --}}
              {{-- @isset($requested_bonds) --}}

                @if (isset($requested_bonds))  

                @foreach ($requested_bonds as $bond)
                <tbody>
                  <tr>
                    <th scope="row"> {{ $bond->id }} </th>
                    <td> {{ $bond->name }} </td>
                    <td> {{ $bond->bank }} </td>
                    <td> {{ $bond->amount }} </td>
                    <td> {{ $bond->type }} </td>
                  </tr>

                </tbody>
                @endforeach

              {{-- @endisset --}}
              {{-- @endif --}}
  
              {{-- @empty($requested_bonds)

              <h2> search </h2>

              @endempty               --}}

              </table>

              <div class="row">
                
                <div class="col-md-12 d-flex justify-content-center" style="margin-right:10px"> 
                 
                 {{-- @isset($requested_bonds) --}}
                 {{-- {{ $requested_bonds->links() }}                     --}}
                 {{-- @endisset --}}

                </div> 

              </div>

              
                  
              @elseif (isset($requested_bonds2))

              
              @foreach ($requested_bonds2 as $bond)
                <tbody>
                  <tr>
                    <th scope="row"> {{ $bond->id }} </th>
                    <td> {{ $bond->name }} </td>
                    <td> {{ $bond->bank }} </td>
                    <td> {{ $bond->amount }} </td>
                    <td> {{ $bond->type }} </td>
                  </tr>

                </tbody>
              @endforeach
              
              
                  
              @else 



              @foreach ($bonds as $bond)
                <tbody>
                  <tr>
                    <th scope="row"> {{ $bond->id }} </th>
                    <td> {{ $bond->name }} </td>
                    <td> {{ $bond->bank }} </td>
                    <td> {{ $bond->amount }} </td>
                    <td> {{ $bond->type }} </td>
                  </tr>

                </tbody>
              @endforeach

  

              </table>

              <div class="row">
                
                <div class="col-md-12 d-flex justify-content-center" style="margin-right:10px"> 
                
                 {{ $bonds->links() }}                    

                </div> 

              </div>
                  
              @endif
          
            </div>
        
          
        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection

