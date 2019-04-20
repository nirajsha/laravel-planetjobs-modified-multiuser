<?php
/* * ******  Job Start ********** */

Route::match(['get','post'],'admin/job/create','JobController@addJob')->name('admin.job.create');
Route::match(['get','post'],'admin/job/view-jobs','JobController@viewJobs')->name('admin.job.view');
Route::match(['get','post'],'admin/edit-job/{id}','JobController@edit')->name('admin.job.edit');
Route::match(['get','post'],'admin/delete-job/{id}','JobController@delete')->name('admin.job.delete');
Route::match(['get','post'],'admin/delete-job-image/{id}','JobController@deleteJobImage')->name('admin.job.image.delete');
/* * ******  Job End ********** */
?>