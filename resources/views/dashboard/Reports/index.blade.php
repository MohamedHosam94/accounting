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


            <h1 class="title"> التقارير </h1>

        <div style="margin-top:7%">
        
            <a style="margin:1%" class="btn btn-primary" 
            href="{{ route('dashboard.bondReport.index') }}" role="button"> تقارير السندات  </a>
 
            <a style="margin:1%" class="btn btn-primary" 
            href="{{ route('dashboard.invoiceReport.index') }}" role="button"> تقارير الفواتير </a>
            
        
        </div>


        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection

