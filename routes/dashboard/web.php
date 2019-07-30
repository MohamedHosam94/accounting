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


   }); 
      
