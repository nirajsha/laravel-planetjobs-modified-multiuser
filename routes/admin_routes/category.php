<?php
/* * ******  Category Start ********** */
Route::get('admin/category/create', 'CategoryController@create')->name('admin.category.create');
Route::get('admin/category/view', 'CategoryController@view')->name('admin.category.view');
Route::post('admin/category/store', 'CategoryController@store')->name('admin.category.store');
Route::match(['get','post'],'admin/edit-category/{id}','CategoryController@edit')->name('admin.category.edit');
Route::match(['get','post'],'admin/delete-category/{id}','CategoryController@delete')->name('admin.category.delete');
Route::match(['get','post'],'admin/trash-category/{id}','CategoryController@trash')->name('admin.category.trash');

/* * ******  Category End ********** */
?>