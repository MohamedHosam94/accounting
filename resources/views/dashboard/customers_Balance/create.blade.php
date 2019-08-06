
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

            <form action="/" method="POST">

                @csrf

            <div class="form-row col-md-12" style="margin-bottom:20px;" >
             <h3>اضف حساب عميل</h3>
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
                <label for="mobile">المنطقة</label>
                <input type="text" class="form-control" name="address" required>
                </div>
             
                <div class="form-group col-md-6">
                <label for="mobile">البريد</label>
                <input type="text" class="form-control" name="email" required>
                </div>


             </div>


               <button style="margin:10px;" type="submit" class="btn btn-success">اضف حساب العميل</button>
    
           </form>
        
          </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection







