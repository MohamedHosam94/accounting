
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

            <h3 class="col-md-3"> تعديل فواتير المشتريات </h3>

            {{-- form for search bonds  --}}
    
    
            <form action="{{ route('dashboard.purchasesInvoice.search') }}" class="search-form col-md-9" method="GET">
                 
                <div class="row">
                  <i class="fa fa-search search-icon" 
                  style="position:absolute; margin:35px;"></i>
                 <input type="text" name="query" id="query"
                  class="form-control" 
                 value="{{ request()->input('query') }}"  placeholder="البحث برقم الفاتورة" style="text-align:center; border-radius:6px; margin:25px; width:30%">
                </div>          
               
            </form>

        </div>

        {{-- end of the form  --}}




        <table class="table" style="margin-top:3%">

            <thead>
              <tr>
                <th scope="col"> رقم الفاتورة </th>
                <th scope="col"> الاسم </th>
                <th scope="col">المبلغ</th>
                <th scope="col"> المنتج </th>
                <th scope="col">تعديل </th>
              </tr>
            </thead>
          
            @isset($purchasesInv)
                            
            @foreach ($purchasesInv as $pInv)
            <tbody>
              <tr>
                <th scope="row"> {{ $pInv->id }} </th>
                <td> {{ $pInv->name }} </td>                
                <td> {{ $pInv->amount }} </td>
                <td> {{ $pInv->products }} </td>

                <td> 
              
                <a class="btn btn-info" 
                href="/dashboard/invoices/purchasesInvoice/{{ $pInv->id }}/edit" role="button"> تعديل </a>
              
                </td>
              </tr>

            </tbody>
            @endforeach

            @endisset
          </table>

          @isset($purchasesInv) 
          {{ $purchasesInv->links() }}                    
          @endisset 
        

            <!-- </div> -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection







