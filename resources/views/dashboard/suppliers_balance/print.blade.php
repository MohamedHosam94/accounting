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
             <h3> حساب مورد : </h3>
          </div>
           
           <div class="na right">
             <h4> الاسم :</h4>                           
             <p> {{ $name }}</p>
           </div>

           <div class="na left">
            <h4> الايميل : </h4>
            <p> {{ $email }} </p>
          </div>

           <div class="na right">
            <h4> رقم الموبايل : </h4>
            <p> {{ $mobile_num }} </p>
          </div>
          
          <div class="na left">
            <h4> العنوان : </h4>
            <p> {{ $address }} </p>
          </div>

          <div class="na right">
            <h4> رقم الحساب : </h4>
            <p> {{ $account_num }} </p>
          </div>
        
      </section>

     <footer> </footer>

    </body>
</html>
