<?php 

  Route::prefix('dashboard')->name('dashboard.')->group( function() { 

    
      Route::get('/index' , 'DashboardController@index')->name('index');

                     // some bond routes 

      // Route::get('/bond/index2' , 'BondsController@index')
      // ->name('bond.index2');

      Route::post('/bond' , 'BondsController@store');

      Route::get('/bond/test' , 'BondsController@test');
      //

       // this route may needed to delete
     // Route::get('/bonds/index' , 'BondsController@index')->name('bonds.index');
   
      // this route may be needed to delete
     // Route::get('/bonds/create' , 'BondsController@create')->name('bonds.create');
    

    //  Route::get('/bonds/index' , 'ReceivedBondController@index');
      Route::post('/bonds', 'ReceivedBondController@store');
      
        // Given bond routes
      Route::get('/givenbonds/create' , 'GivenBondController@create')->name('g-bond.create');

      Route::post('/givenbonds' , 'GivenBondController@store');


      // Invoices Routes 

      Route::get('/invoices/index' , 'InvoicesController@index')->name('invoices.index');

      Route::get('/invoices/purchasesInvoice/show' , 'InvoicesController@purchaseShow')->name('purchasesInvoice.show');

      Route::get('/invoices/salesInvoice/show' , 'InvoicesController@salesShow')
      ->name('salesInvoice.show');


      Route::get('/invoices/purchasesInvoice/{purchasesInv}/edit' , 'PurchasesInvoicesController@edit');

      Route::get('/invoices/purchasesInvoice/search' , 'PurchasesInvoicesController@search')
      ->name('purchasesInvoice.search');

      Route::patch('/invoices/purchasesInvoice/{purchasesInv}' , 'PurchasesInvoicesController@update');


      Route::get('/invoices/create-purchase' , 'PurchasesInvoicesController@create')
      ->name('invoices.create-purchase');

      Route::post('/invoices/purchases' , 'PurchasesInvoicesController@store');
      

      Route::get('/invoices/create-sale' , 'SalesInvoicesController@create')
      ->name('invoices.create-sale');

      Route::post('/invoices/sales' , 'SalesInvoicesController@store');


      // Customers_account Routes 


      Route::get('/customers/index' , 'CustomersBalanceController@index')
      ->name('customers_balance.index');

      Route::get('/customers/create' , 'CustomersBalanceController@create')
      ->name('customers_balance.create');

      Route::post('/customers' , 'CustomersBalanceController@store');





      // Suppliers Balance Routes 


      Route::get('/suppliers/index' , 'SuppliersBalanceController@index')
      ->name('suppliers_balance.index');

      Route::get('/suppliers/create' , 'SuppliersBalanceController@create')
      ->name('suppliers_balance.create');

      Route::post('/suppliers' , 'SuppliersBalanceController@store');


      // Bank Routes and Some bond Routes


      Route::get('/bank/index' , 'BankController@index')
      ->name('bank.index');


      Route::get('/bond/index2' , 'BondsController@index')
      ->name('bonds.index2');

      Route::get('/bond/create' , 'BondsController@create')
      ->name('bonds.create2');

      Route::get('/bond/show' , 'BondsController@show')
      ->name('bonds.show');

      Route::get('/bond/search' , 'BondsController@search')
      ->name('bonds.search');

      Route::get('/bond/{bond}/edit' , 'BondsController@edit');

      Route::patch('/bond/{bond}' , 'BondsController@update');
      
      //Route::post('/bond' , 'BondsController@store');
      
          


              // box Routes
      
      Route::get('/box/index' , 'BoxController@index')->name('box.index');
      


               /*            Start of Reports Routes                    */


      Route::get('/reports/index' , 'BondReportController@index')->name('report.index');
      
      Route::get('/reports/index2' , 'BondReportController@index2')
      ->name('bondReport.index');
     
      Route::get('/reports/invoices' , 'InvoiceReportController@index')
      ->name('invoiceReport.index');

      Route::get('/reports/bonds/search' , 'BondReportController@search')
      ->name('bondsReport.search');

      
                /*            End of Reports Routes                    */




      // Admin Dashboard Routes 

      Route::get('/admin/index' , 'AdminController@index')->name('adminDashboard.index');

      // Update user active status

      Route::patch('/admin/{user}' , 'AdminController@update');
    

    }); 
      
