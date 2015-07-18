<?php

Route::get('/', array('as'=>'index','uses'=>'PortfolioController@index'));

Route::get('contacts', array('as'=>'contacts','uses'=>'PortfolioController@contacts'));
Route::post('contacts', array('as'=>'contacts','uses'=>'PortfolioController@contacts'));

Route::get('partners', array('as'=>'partners','uses'=>'PortfolioController@clients'));