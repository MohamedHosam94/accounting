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


         <div style="margin-bottom:5%">
          
          <a style="margin:1%" class="btn btn-primary" href="{{ route('dashboard.bonds.create') }}" role="button"><i class="fa fa-plus"></i> @lang('site.add') @lang('site.received_bond')</a>

          <a style="margin:1%" class="btn btn-success" href="{{ route('dashboard.g-bond.create') }}" role="button"><i class="fa fa-plus"></i> @lang('site.add') @lang('site.given_bond')</a>
        
         </div>


          <div>
            
           
             <h3>كشف حساب السندات</h3>


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

                @foreach ($recv_bond as $r_bond)
                <tbody>
                  <tr>
                    <th scope="row"> {{ $r_bond->id }} </th>
                    <td> {{ $r_bond->name }} </td>
                    <td> {{ $r_bond->mobile_num }} </td>
                    <td> {{ $r_bond->amount }} </td>
                    <td> {{ $r_bond->type }} </td>
                  </tr>

                </tbody>
                @endforeach
              </table>

          
               


          </div>
        
          

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection

