
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

          <div>

            <form action="">
             
            <div class="form-row">

                <div class="form-group col-md-4">
                <label for="name">@lang('site.name')</label>
                <input type="text" class="form-control"  required>
                </div>

                <div class="form-group col-md-4">
                <label for="amount">@lang('site.amount')</label>
                <input type="text" class="form-control"  required>
                </div>


                <div class="form-group col-md-5">
                <label for="mobile">@lang('site.mobile')</label>
                <input type="text" class="form-control"  required>
                </div>
             
              <div class="form-row">
             
                <div class="form-group form-check col-md-3">
                <input class="form-check-input" type="radio" name=""  value="">
                <label class="form-check-label" for="cheque">
                @lang('site.cheque')
                </label>
                </div>

                <div class="form-group form-check col-md-3">
                <input class="form-check-input" type="radio" name="" value="">
                <label class="form-check-label" for="cash">
                @lang('site.cash')
                </label>
                </div>
             
                </div>
                
            </div>
 
           </form>
        
          </div>
            <!-- <div class="box box-primary"> -->

                <!-- <div class="box-header">
                    <h3 class="box-title"> Here is head @lang('')</h3>
                </div><!-- end of box header -->
<!-- 
                <div class="box-body">

                                 Here is Body       


                </div>end of box body --> 

            <!-- </div> -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection








