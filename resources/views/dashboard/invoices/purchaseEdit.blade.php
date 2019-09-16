
@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1></h1>

          

            <ol class="breadcrumb">
              
                    <a><i class="fa fa-dashboard"></i> </a>

            </ol>
        </section>

      <section class="content">

          <div>

        <form action="/dashboard/invoices/purchasesInvoice/{{ $purchasesInv->id }}" method="POST">
                @method('PATCH')
                @csrf

            <div class="form-row col-md-12" style="margin-bottom:20px;" >
             <h3>تعديل فاتورة مشتريات</h3>
            </div>

            <div class="form-row">

                <div class="form-group col-md-6">
                <label for="name">@lang('site.name')</label>
                <input type="text" class="form-control" name="name"
                 value="{{ $purchasesInv->name }}" required>
                </div>

                <div class="form-group col-md-6">
                <label for="amount">@lang('site.amount')</label>
                <input type="text" class="form-control" name="amount"
                value="{{ $purchasesInv->amount }}" required>
                </div>


                <div class="form-group col-md-12">
                <label for="mobile">@lang('site.mobile')</label>
                <input type="text" class="form-control" name="mobile_num"
                value="{{ $purchasesInv->mobile_num }}" required>
                </div>

                <div class="form-group col-md-6">
                <label for="mobile">المنتجات</label>
                <input type="text" class="form-control" name="products" 
                value="{{ $purchasesInv->products }}" required>
                </div>

                <div class="form-group col-md-6">
                <label for="mobile">الكمية</label>
                <input type="text" class="form-control" name="quantity"
                value="{{ $purchasesInv->quantity }}" required>
                </div>
             
           
             </div>
     
             
             <div class="form-group col-md-12">
                <fieldset >
                   
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="gridRadios1" value="cash" 
                        {{ $purchasesInv->type == "cash" ? 'checked' : ''}}>
                        <label class="form-check-label" for="gridRadios1">
                            @lang('site.cash')
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="gridRadios2" value="cheque" 
                        {{ $purchasesInv->type == "cheque" ? 'checked' : ''}}>
                        <label class="form-check-label" for="gridRadios2">
                            @lang('site.cheque')
                        </label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="gridRadios3" value="deposit" 
                        {{ $purchasesInv->type == "deposit" ? 'checked' : ''}}>
                        <label class="form-check-label" for="gridRadios3">
                           ايداع
                        </label>
                      </div>

                </fieldset>

               </div> 

               <button type="submit" class="btn btn-success">تعديل الفاتورة</button>
    
           </form>
        
          </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection







