<?php
use App\post;
use App\User;
use App\country;
use App\photo;

//
////Route::get('/', function ()  {//clasname:: function
////    return view('welcome'); //closure function
////});
//////naming
////Route::get('/hi/{id}/{name?}', function ($id) {
//////    $url=route('hi');
////    return "<p> </p>";
////})->name('merna');
//////Laravel provides a route() helper to help reference the route by their names in front end by route method
////
//////controller
////Route::get('user/{id}','userController@index');
////Route::resource("res/",'userController');
//
//
////raw sql
////Route::get("insert",function(){
////    DB::insert("insert into posts (id)values(1)");
////});
////Route::get("select",function(){
////    $result=DB::select("select * from posts");
////    foreach ($result as $res) {
////        echo $res->id;
////    }
////});
//
////Route::get("update",function() {
////    $result = DB::update("update posts set id=2 where id=1");
////    echo $result;
////});
//
////eloquent orm
//
//Route::get("read",function(){
//    $res=post::find(1);
//    echo $res->title;
//});
//
//Route::get("all",function(){
//    $res=post::all();
//    foreach ($res as $r){
//        echo $r->id;
//    }
//});
//Route::get("findwhere",function(){
//    $res=post::where('id',2)->orderBy('id')->take(1)->get();
//    echo $res;
//});
//Route::get("more",function(){
//    $res=post::findOrfail(3);//or 404
//    echo $res;
//});
//Route::get("ins",function(){
//    $post=new post();
//    $post->id=5;
//    $post->title="merna adel";
//    $post->save();
//});
//Route::get("upd",function(){
//    $post=post::find(1);
//    $post->id=3;
//    $post->title="merna";
//    $post->save();
//});
////insert mass assig safe mode a2olo anhy l records l safe elii mmkn a access
//Route::get("insert",function(){
//    post::create(['title'=>'mano','id'=>'10']);//MassAssignmentException
//});
////update second method
//Route::get("update",function(){
//    post::where('id',10)->update(['title'=>'maro']);//bta5od associative array
//
//});
//Route::get("delete",function(){
//    post::where('id',3)->delete();
//    // post::destroy([4,5]);//m3 b3d
//
//});
////soft delete l user yms7o mesh database
//Route::get("rsoftdelete",function(){
//
//    $res=post::withTrashed()->where('id',3)->get(); //kol l ids ta3ha 3 w l trashed
//    echo $res;
//});
////restore not deleted any more
//Route::get("restore",function(){
//    post::withTrashed()->where('id',3)->restore();
//
//});
////delete per
//Route::get("force",function(){
//    post::withTrashed()->where('id',3)->forceDelete();
//
//});
//
////---------------------------> Relationships
////hasone
////belongsto
////hasmany
////user->find(1)->asml func w lw many a7ot for
////-------one to one relation
//Route::get('hason',function(){
//    echo User::find(3)->post;
//});
//Route::get('belong',function(){
//    echo post::find(3)->users;
//});
//
////-------one to many relation
//Route::get('many',function(){
//    $res= User::find(1)->posts;
//    foreach($res as $r){
//        echo $r;
//    }
//});
//Route::get('one/{id}',function($id){
//    $res=User::find($id)->post;
//    echo $res->content;
//});
////many to many
//
//Route::get('manytomany/{id}',function($id){ //hya btro7 btshof l relation fe table l piviot w btgbli l data
//    echo $id;
//    $res=User::find($id);
//    foreach($res->roles  as $r){
//        echo $r->name;
//    }
//});
////Route::get("through",function(){
////    $res=country::find(1);
////    foreach($res->posts as $r){
////        echo $r->name;
////    }
////});
//Route::get("poly",function(){ //
//    $user=user::find(1);
//    foreach($user->photos as $u){
//        echo $u;
//    }
//    return view("welcome");
//});
////how to get owner of the photo
//Route::get("polyinv",function(){ //owner post or user
//    $photo=photo::find(1);
//    echo $photo->imageable;
//    return view("welcome");
//});
////related posts and videos with many tags
////tag has posts and videos
////post has tags
//Route::get("polymanytomany",function(){ //
//    $post=post::find(1);
//    foreach($post->tags as $u){
//        echo $u;
//    }
//    return view("welcome");
//});
//tinker mmkn a3ml ay sql query mnha mn 8er ma aro7 l database
//1-insert with a tinker to database
//$post=app/post::create([associative array b 7agat l database])
//create post pobject and acess proerties
//#post=new App\post()
//$post->content="hii"
//$post->save()
//find object from database
//$post=App\find(1)
//$post=App\post::where("id",1)->get()
//update
//delete
//$post->delete()softdelete
//$post->forcedeleted()//pere
//relation with tinker
//$user->roles  ytl3 eh 3lakat l user da b role


// CRUD is actually an acronym for describing the four different actions of data storage: Create, Read, Update and Delete


/*
|--------------------------------------------------------------------------
| crud application
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource("/posts","postsController");
