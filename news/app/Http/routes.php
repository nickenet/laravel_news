<?php

use App\News;
use Illuminate\Http\Request;


/**
 * LastNews вывод списка новостей
 */
Route::get('/', function () {
    return view('welcome');
});

/**
 * Get admin_news - Список новостей для администрирования
 */

Route::get('/admin', function(){
    $news = News::orderBy('created_at', 'asc')->get();
    
  return view('newsadmin', [
    'news' => $news
  ]);
});
/*
 * show_concret news - показать конкретную новость
 */
Route::post('/news/{id}', function($id){
    
});

/**
 * Добавить новую новость
 */
Route::post('/admin', function (Request $request) {
    $validator = Validator::make($request->all(), [
                'items' => 'required|max:255',
                'description' =>'required',
    ]);

    if ($validator->fails()) {
        return redirect('/admin')
                        ->withInput()
                        ->withErrors($validator);
    }
    $news = new News;
    $news->items = $request->items;
    $news->description = $request->description;
    $news->save();

    return redirect('/admin');
});

/**
 * Удалить существующую новость
 */
Route::delete('/admin/{id}', function ($id) {
    News::findOrFail($id)->delete();
    return redirect('/admin');
});