<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\ChamDiemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ToChucController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Mail;

Route::get('send-mail',[SampleController::class,'sendMail']);

Route::get('/user', [UserController::class, 'index']);



Route::get('admin/dangnhap',[AdminController::class,'getDangNhapAdmin']);
Route::post('admin/dangnhap',[AdminController::class,'postDangNhapAdmin']);
Route::get('admin/dangxuat',[AdminController::class,'dangXuatAdmin']);

Route::group(['prefix'=>'admin'], function () {     
      Route::group(['prefix'=>'quanly'], function () {
      Route::get('danhsach',[AdminController::class, 'getDanhSach']);
      Route::get('them',[AdminController::class, 'getThem']);
      Route::post('them',[AdminController::class, 'postThem']);
      Route::get('sua/{id}',[AdminController::class, 'getSua']);
      Route::post('sua/{id}',[AdminController::class, 'postSua']);
      Route::get('xemchitiet/{id}',[ChamDiemController::class, 'getXemChiTiet']);
      Route::get('{idUser}/anh/{id}',[ChamDiemController::class, 'getChamDiem']);
      Route::post('{idUser}/anh/{id}',[ChamDiemController::class, 'postChamDiem']);

      });
});

Route::get('BanToChuc/dangnhap',[ToChucController::class,'getDangNhapToChuc']);
Route::post('BanToChuc/dangnhap',[ToChucController::class,'postDangNhapToChuc']);
Route::get('BanToChuc/dangxuat',[ToChucController::class,'dangXuatToChuc']);

Route::group(['prefix'=>'BanToChuc'], function () {
      Route::get('danhsach',[ToChucController::class, 'getDanhSach']);
      Route::get('xuatdanhsach',[ToChucController::class, 'getXuatDanhSach']);
      Route::get('sendmail',[ToChucController::class, 'getSendMail']);
      Route::get('xemdiemthisinh',[ToChucController::class, 'getDanhSachDiem']);
      Route::get('xemdiemanh',[ToChucController::class, 'getXemDiemAnh']);
      Route::get('them',[ToChucController::class, 'getThem']);
      Route::post('them',[ToChucController::class, 'postThem']);
      Route::get('xemchitiet/{id}',[ChamDiemController::class, 'getXemChiTiet']);
      Route::get('{idUser}/anh/{id}',[ChamDiemController::class, 'getChamDiem']);
      Route::post('{idUser}/anh/{id}',[ChamDiemController::class, 'postChamDiem']);
      Route::post('anhtrienlam',[ToChucController::class, 'postXemDiemAnh']);
      Route::get('xemanhtrienlam',[ToChucController::class, 'getAnhTrienLam']);
      Route::get('xoaanhtrienlam/{id}',[ToChucController::class, 'getXoaAnhTrienLam']);
      Route::get('danhsachchuatrienlam',[ToChucController::class, 'getAnhChuaTrienLam']);
      Route::get('thongke',[HomeController::class,'getChart']);
     
});

Route::get('GiamKhao/dangnhap',[UserController::class,'dangNhapGiamKhao']);
Route::post('GiamKhao/dangnhap',[UserController::class,'postDangNhapGiamKhao']);
Route::get('GiamKhao/dangxuat',[UserController::class,'logoutGiamKhao']);


Route::group(['prefix'=>'GiamKhao'], function () {
      Route::get('thongke',[HomeController::class,'getChart']);
      
      Route::group(['prefix'=>'ChamDiemUser'], function () {
      
      Route::get('danhsach',[ChamDiemController::class, 'getDanhSach']);

      Route::get('xemanhnop',[ChamDiemController::class, 'getXemAnh']);

      Route::get('xemanhdacham',[ChamDiemController::class, 'getXemAnhDaCham']);
      Route::get('xemanhchuacham',[ChamDiemController::class, 'getXemAnhChuaCham']);
      
      Route::get('thisinhduanh',[ChamDiemController::class, 'getXemAnhDu']);
      Route::get('thisinhchuaduanh',[ChamDiemController::class, 'getXemChuaAnhDu']);
      Route::get('xemdiem',[ChamDiemController::class, 'getXemDiem']);
      Route::get('xemdiem/{id}',[ChamDiemController::class, 'getXemDiemUser']);
      Route::get('xemchitiet/{id}',[ChamDiemController::class, 'getXemChiTiet']);
      Route::get('{idUser}/anh/{tieudekhongdau}{id}.html',[ChamDiemController::class, 'getChamDiem']);
      Route::post('{idUser}/anh/{tieudekhongdau}{id}.html',[ChamDiemController::class, 'postChamDiem']);
       Route::get('{idUser}/{tieudekhongdau}{id}.html',[ChamDiemController::class, 'getSuaDiem']);
      Route::post('{idUser}/{tieudekhongdau}{id}.html',[ChamDiemController::class, 'postSuaDiem']);
      
      });
     
      
});


Route::post('dangnhap',[PagesController::class,'postDangNhap']);
Route::get('dangxuat',[PagesController::class,'getDangXuat']);
Route::get('trangchu',[PagesController::class,'trangChu']);
Route::get('guianh',[PagesController::class,'guianh']);
Route::post('guianh/{id}',[PagesController::class,'postGuiAnh']);
Route::post('dangky',[PagesController::class,'postDangKy']);




