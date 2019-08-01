
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

            <form action="/dashboard/bonds" method="POST">

                @csrf

            <div class="form-row col-md-12" style="margin-bottom:20px;" >
             <h3>@lang('site.received_bond')</h3>
            </div>

            <div class="form-row">

                <div class="form-group col-md-6">
                <label for="name">استلمنا من السيد</label>
                <input type="text" class="form-control" name="name" required>
                </div>

                <div class="form-group col-md-6">
                <label for="amount">@lang('site.amount')</label>
                <input type="text" class="form-control" name="amount" required>
                </div>

                <div class="form-group col-md-12">
                <label for="amount-in-letters">المبلغ بالحروف</label>
                <input type="text" class="form-control" name="amount_letters" required>
                </div>


                <div class="form-group col-md-12">
                <label for="mobile">@lang('site.mobile')</label>
                <input type="text" class="form-control" name="mobile_num" required>
                </div>

                <div class="form-group col-md-6">
                <label for="payment_against">ذلك مقابل</label>
                <input type="text" class="form-control" name="payment_against" required>
                </div>
            
              
                <div class="form-group col-md-6">
                    <label class="" for="bank">مسحوب علي بنك </label>
                    <select class="form-control" id="">
                      <option selected>اختار</option>
                      <option value="Ahly_bank">بنك الاهلي</option>
                      <option value="Rajhi_bank">بنك الراجحي</option>
                      <option value="Riyadh_bank">بنك الرياض</option>
                    </select>
                </div>



             </div>
     
             
             <div class="form-group col-md-12">
                <fieldset >
                   
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="gridRadios1" value="cash" checked>
                        <label class="form-check-label" for="gridRadios1">
                            @lang('site.cash')
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="gridRadios2" value="cheque" >
                        <label class="form-check-label" for="gridRadios2">
                            @lang('site.cheque')
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="gridRadios3" value="deposit" >
                        <label class="form-check-label" for="gridRadios3">
                           ايداع
                        </label>
                      </div>

                </fieldset>

               </div> 
                
               <div class="col-md-12">
               <button type="submit" class="btn btn-success">@lang('site.add') @lang('site.bond')</button>
               </div>

           </form>
        
          </div>
            <!-- <div class="box box-primary"> -->

                <!-- <div class="box-header">
                    <h3 class="box-title"> Here is head @lang('')</h3>
                </div> end of box header -->
<!-- 
                <div class="box-body">

                                 Here is Body       


                </div>end of box body --> 

            <!-- </div> -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection


   <!-- {{-- <div class="form-check col-md-3">
                <input class="form-check-input" type="radio" name=""  value="">
                <label class="form-check-label" for="cheque">
                @lang('site.cheque')
                </label>
                </div>

                <div class="form-check col-md-3">
                <input class="form-check-input" type="radio" name="" value="">
                <label class="form-check-label" for="cash">
                @lang('site.cash')
                </label>
                </div> --}} -->





