
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

            <form action="/dashboard/suppliers" method="POST">

                @csrf

            <div class="form-row col-md-12" style="margin-bottom:20px;" >
             <h3>اضف حساب مورد</h3>
            </div>

            <div class="form-row">

                <div class="form-group col-md-6">
                <label for="name">@lang('site.name')</label>
                <input type="text" class="form-control" name="name" required>
                </div>

            
                <div class="form-group col-md-6">
                <label for="mobile">@lang('site.mobile')</label>
                <input type="text" class="form-control" name="mobile_num" required>
                </div>


                <div class="form-group col-md-6">
                <label for="address">المنطقة</label>
                <input type="text" class="form-control" name="address" required>
                </div>
             
                <div class="form-group col-md-6">
                <label for="email">البريد</label>
                <input type="text" class="form-control" name="email" required>
                </div>

                <div class="form-group col-md-6">
                <label for="account_num"> رقم حساب المورد </label>
                <input type="text" class="form-control" name="account_num" required>
                </div>  

             </div>

               <div class="col-md-12">
               <button style="margin:7px;" type="submit" class="btn btn-success">اضف حساب مورد</button>
               </div>

           </form>
        
          </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection







