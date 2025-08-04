<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BrandController;
use App\Http\Middleware\AuthPermission;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\BranchController;



Route::get('/admin', function () {
    return view('admin/login');
});
Route::post('adminlogin', [AdminController::class, 'adminlogin']);
Route::get('logout', [AdminController::class, 'logout']);

Route::middleware(AuthPermission::class)->group(function () {

Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('brands', [BrandController::class, 'list']);
Route::get('addbrand', [BrandController::class, 'brandform']);
Route::post('insertbrand', [BrandController::class, 'insert']);
Route::get('editbrand/{id}', [BrandController::class, 'edit']);
Route::post('brand/update/{id}', [BrandController::class, 'update'])->name('brand.update');
Route::post('bulkDelete', [BrandController::class, 'bulkDelete']);


Route::get('services', [ServiceController::class, 'list']);
Route::get('addservice', [ServiceController::class, 'serviceform']);
Route::post('insertservice', [ServiceController::class, 'insert']);
Route::get('editservice/{id}', [ServiceController::class, 'edit']);
Route::post('services/update/{id}', [ServiceController::class, 'update'])->name('service.update');
Route::post('bulkDelete', [ServiceController::class, 'bulkDelete']);



Route::get('platforms', [PlatformController::class, 'list']);
Route::get('addplatform', [PlatformController::class, 'platformform']);
Route::post('insertplatform', [PlatformController::class, 'insert']);
Route::get('editplatform/{id}', [PlatformController::class, 'edit']);
Route::post('platforms/update/{id}', [PlatformController::class, 'update'])->name('platform.update');
Route::post('bulkDelete', [PlatformController::class, 'bulkDelete']);


Route::get('industries', [IndustryController::class, 'list']);
Route::get('addindustry', [IndustryController::class, 'industryform']);
Route::post('insertindustry', [IndustryController::class, 'insert']);
Route::get('editindustry/{id}', [IndustryController::class, 'edit']);
Route::post('industries/update/{id}', [IndustryController::class, 'update'])->name('industry.update');
Route::post('bulkDelete', [IndustryController::class, 'bulkDelete']);


Route::get('technologies', [TechnologyController::class, 'list']);
Route::get('addtechnology', [TechnologyController::class, 'technologyform']);
Route::post('inserttechnology', [TechnologyController::class, 'insert']);
Route::get('edittechnology/{id}', [TechnologyController::class, 'edit']);
Route::post('technologies/update/{id}', [TechnologyController::class, 'update'])->name('technology.update');
Route::post('bulkDelete', [TechnologyController::class, 'bulkDelete']);


Route::get('portfolios', [PortfolioController::class, 'list']);
Route::get('addportfolio', [PortfolioController::class, 'portfolioform']);
Route::post('insertportfolio', [PortfolioController::class, 'insert']);
Route::get('editportfolio/{id}', [PortfolioController::class, 'edit']);
Route::post('portfolios/update/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
Route::post('bulkDelete', [PortfolioController::class, 'bulkDelete']);


Route::get('branches', [BranchController::class, 'list']);
Route::get('addbranch', [BranchController::class, 'branchform']);
Route::post('insertbranch', [BranchController::class, 'insert']);
Route::get('editbranch/{id}', [BranchController::class, 'edit']);
Route::post('branches/update/{id}', [BranchController::class, 'update'])->name('branch.update');
Route::post('bulkDelete', [BranchController::class, 'bulkDelete']);




});
