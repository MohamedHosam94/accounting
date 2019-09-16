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


         <div style="margin-top:5%">
          
          <a style="margin:1%" class="btn btn-primary" href="{{ route('dashboard.bonds.create2') }}" role="button"><i class="fa fa-plus"></i> اضف سند</a>

         <a style="margin:1%" class="btn btn-info" href="{{ route('dashboard.bonds.show') }}" role="button"><i class="fa fa-plus"></i> تعديل سند </a>
{{-- 
          <a style="margin:1%" class="btn btn-success" href="{{ route('dashboard.g-bond.create') }}" role="button"><i class="fa fa-plus"></i> @lang('site.add') @lang('site.given_bond')</a> --}}
        
         </div>


          <div>
            
             {{-- the bonds are now sent to the bank and box  --}}
           
             {{-- <h3>كشف حساب السندات</h3>


            <table class="table" style="margin-top:3%">

                <thead>
                  <tr>
                    <th scope="col"># رقم السند</th>
                    <th scope="col">الاسم</th>
                
                    <th scope="col">المبلغ</th>
                    <th scope="col">النوع</th>
                  </tr>
                </thead>

         
              </table>

          
               


          </div> --}}
        
          

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection

