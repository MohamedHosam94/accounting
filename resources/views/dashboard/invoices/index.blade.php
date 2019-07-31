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
          
          <a style="margin:1%" class="btn btn-primary" href="{{ route('dashboard.invoices.create-purchase') }}" role="button"><i class="fa fa-plus"></i>اضف فاتورة مشتريات </a>

          <a style="margin:1%" class="btn btn-success" href="{{ route('dashboard.invoices.create-sale') }}" role="button"><i class="fa fa-plus"></i> اضف فاتورة مبيعات</a>
        
         </div>

          

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection

