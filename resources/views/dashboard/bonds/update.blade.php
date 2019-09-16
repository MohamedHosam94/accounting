
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

          <form action="/dashboard/bond/{{ $bond->id }}" method="POST">
               
                @method('PATCH')
                @csrf

            <div class="form-row col-md-12" style="margin-bottom:20px;" >
             <h3>   سند رقم  {{ $bond->id }}</h3>
            </div>

            <div class="form-row">

                <div class="form-group col-md-6">
                <label for="name">استلمنا من السيد</label>
                <input type="text" class="form-control" name="name" value="{{ $bond->name }}" required>
                </div>

                <div class="form-group col-md-6">
                <label for="amount">@lang('site.amount')</label>
                <input type="text" class="form-control" name="amount" value="{{ $bond->amount }}" required>
                </div>

                <div class="form-group col-md-6">
                <label for="amount-in-letters">المبلغ بالحروف</label>
                <input type="text" class="form-control" name="amount_in_letters" value="{{ $bond->amount_in_letters }}" required>
                </div>

                <div class="form-group col-md-6">
                <label for="date">التاريخ</label>
                <input type="date" class="form-control" name="date" value="{{ $bond->date }}" required>
                </div>

      
                <div class="form-group col-md-6">
                <label for="payment_against">ذلك مقابل</label>
                <input type="text" class="form-control" name="payment_against" value="{{ $bond->payment_against }}" required>
                </div>
            
              
                <div class="form-group col-md-6">
                    <label class="" for="bank">مسحوب علي بنك </label>
                   
                 <select class="form-control" name="bank">
                    <option>اختار</option>
                   
                    <option value="Ahly_bank" 
                    {{ $bond->bank == "Ahly_bank" ? 'selected' : ''}}>
                    بنك الاهلي 
                    </option>
                  
                    <option value="Rajhi_bank"
                     {{ $bond->bank == "Rajhi_bank" ? 'selected' : ''}}>
                     بنك الراجحي     
                    </option>
                   
                    <option value="Riyadh_bank" 
                     {{ $bond->bank == "Riyadh_bank" ? 'selected' : ''}}>
                     بنك الرياض
                    </option>
                   
                </select>
                </div>


                <div class="form-group col-md-6">
                    <label class="" for="bank">نوع السند  </label>
                      <select class="form-control" name="bondtype">
                      <option>اختار</option>
                      
                      <option value="g-bond"
                     {{ $bond->bondtype == "g-bond" ? 'selected' : ''}}>صرف</option>
                      
                      <option value="r-bond" 
                     {{ $bond->bondtype == "r-bond" ? 'selected' : ''}}>قبض</option>
                      
                    </select>
                </div>


             </div>
     
             
             <div class="form-group col-md-12">
                <fieldset >
                   
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="gridRadios1" value="cash"
                         {{ $bond->type == "cash" ? 'checked' : ''}}>
                        <label class="form-check-label" for="gridRadios1">
                            @lang('site.cash')
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="gridRadios2" value="cheque" 
                        {{ $bond->type == "cheque" ? 'checked' : ''}}>
                        <label class="form-check-label" for="gridRadios2">
                            @lang('site.cheque')
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="gridRadios3" value="deposit" 
                        {{ $bond->type == "deposit" ? 'checked' : ''}}>
                        <label class="form-check-label" for="gridRadios3">
                           ايداع
                        </label>
                      </div>

                </fieldset>

               </div> 
                
               <div class="col-md-12">
               <button type="submit" class="btn btn-success"> حفظ التعديل </button>
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







