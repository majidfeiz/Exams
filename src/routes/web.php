<?php
use Illuminate\Support\Facades\Route;
use majidfeiz\Exams\Http\controllers\ExamsController;

Route::get('test', function(){
    return 'Hello from the contact form package';
});

Route::prefix('exams')->group(function (){
    Route::get('/',[ExamsController::class,'index'])->name('exams.index');
    Route::get('add',[ExamsController::class,'add'])->name('exams.add');
    Route::get('/{exam}',[ExamsController::class,'show'])->name('exams.show');
    Route::post('/',[ExamsController::class,'store'])->name('exams.store');

});
