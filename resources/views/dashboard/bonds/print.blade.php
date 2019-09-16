<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <!-- Fonts -->
         {{-- <link href="css/app.css" rel="stylesheet"> --}}
   <link rel="stylesheet" href="dashboard_files/css/bootstrap.min.css">

        
    {{-- @if (app()->getLocale() == 'ar') --}}
   <link rel="stylesheet" href="dashboard_files/css/font-awesome-rtl.min.css">
    <link rel="stylesheet" href="dashboard_files/css/AdminLTE-rtl.min.css">
    <link rel="stylesheet" href="dashboard_files/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="dashboard_files/css/rtl.css">

     <style>
        /* body, h1, h2, h3, h4, h5, h6 {
            font-family: 'Cairo', sans-serif !important;
        } */

        .na {
            width: 50%; 
            height: 100px;
           margin-top: 7px;
        }
        .left {
          float: left;
        }
        .right {
            float: right;
        }

        .hr-bottom {
            position: relative;
            top: 90px;
        }
    </style> 
   
    </head>


    <body>

     <header> </header>

        <section class="container">

                  
           <div style="text-align:center;"> <h2> مؤسسة البرمجيات </h2></div>
           
           <hr>

           <div style="margin:10px;">
             <h3> {{ $bondtype == 'g-bond' ? "سند صرف" : " سند قبض" }} : </h3>
          </div>
           
           <div class="na right">
             <h4> الاسم :</h4>
             <p> {{ $name }}</p>
           </div>

           <div class="na left">
            <h4> المبلغ : </h4>
            <p> {{ $amount }} </p>
          </div>

           <div class="na right">
            <h4> المبلغ بالحروف : </h4>
            <p> {{ $amount_in_letters }} </p>
          </div>
          
          <div class="na left">
            <h4> التاريخ : </h4>
            <p> {{ $date }} </p>
          </div>

          <div class="na right">
            <h4> ذلك مقابل : </h4>
            <p> {{ $payment_against }} </p>
          </div>

          <div class="na left">
            <h4> مسحوب علي بنك : </h4>
          <p> {{ $bank }} </p>
          </div>

          <div class="na right">
            <h4> نوع السند : </h4>
          <p> {{ $bondtype == 'g-bond' ? "سند صرف" : " سند قبض" }} </p>
          </div>

          <div class="na left">
            <h4> طريقة الدفع : </h4>
            <p> {{ $type  }} </p>
          </div>

        
      </section>

     <footer> </footer>

    </body>
</html>
