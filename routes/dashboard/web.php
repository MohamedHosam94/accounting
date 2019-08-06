<?php 

  Route::prefix('dashboard')->name('dashboard.')->group( function() { 

    
      Route::get('/index' , 'DashboardController@index')->name('index');

      Route::get('/bonds/index' , 'BondsController@index')->name('bonds.index');
   
      Route::get('/bonds/create' , 'BondsController@create')->name('bonds.create');
    

    //  Route::get('/bonds/index' , 'ReceivedBondController@index');
      Route::post('/bonds', 'ReceivedBondController@store');
      
        // Given bond routes
      Route::get('/givenbonds/create' , 'GivenBondController@create')->name('g-bond.create');

      Route::post('/givenbonds' , 'GivenBondController@store');


      // Invoices Routes 

      Route::get('/invoices/index' , 'InvoicesController@index')->name('invoices.index');


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
     



    }); 
      
