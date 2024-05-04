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


Route::get('/disclaimer', function() {
    return view('frontend.Disclaimer.index');
});

Route::get('/Privacy-policy', function() {
    return view('frontend.Privacy-policy.index');
});



Route::get('/events', function() {
    return view('frontend.events.index');
});

Route::get('/about-us/team', function() {
    return view('frontend.about-us.team');
});
Route::get('/news-and-updates/news', function() { 
    return view('frontend.news-and-updates.news');
});
Route::get('/news-and-updates', function() {
    return view('frontend.news-and-updates.index');
});

Route::get('/services', function() {
    return view('frontend.services.index');
});

Route::get('/products', function() {
    return view('frontend.products.index');
});
Route::get('/products/generalpurposewagon', function() {
    return view('frontend.products.generalpurposewagon');
});


Route::get('/products/containeroperationwagon', function() {
    return view('frontend.products.containeroperationwagon');
});


Route::get('/products/autocarcarierwagon', function() {
    return view('frontend.products.autocarcarierwagon');
});


Route::get('/products/specialpurposewagon', function() {
    return view('frontend.products.specialpurposewagon');
});


Route::get('/products/innovativedesignbyjindalrail', function() {
    return view('frontend.products.innovativedesignbyjindalrail');
});

Route::get('/products/innovativedesignsbyjindalrail/forinplantmovement', function() {
    return view('frontend.products.innovativedesignsbyjindalrail.forinplantmovement');
});

Route::get('/products/innovativedesignsbyjindalrail/fordomestic', function() {
    return view('frontend.products.innovativedesignsbyjindalrail.fordomestic');
});

Route::get('/products/innovativedesignsbyjindalrail/exportwagon', function() {
    return view('frontend.products.innovativedesignsbyjindalrail.exportwagon');
});

Route::get('/products/innovativedesignsbyjindalrail/otherofferings', function() {
    return view('frontend.products.innovativedesignsbyjindalrail.otherofferings');
});




Route::get('/about-us', function() {
    return view('frontend.about-us.index');
});
Route::get('/mission-vision', function() {
    return view('frontend.about-us.missionvision');
});
Route::get('/success-story', function() {
    return view('frontend.about-us.success-story');
});
Route::get('/our-journey', function() {
    return view('frontend.about-us.our-journey');
});




Route::get('/certification', function() {
    return view('frontend.who-we-are.certification');
});
Route::get('/affiliation-award', function() {
    return view('frontend.who-we-are.awards');
});



// Route::get('/products/general-purpose-wagons', function() {
//     return view('frontend.products.general-purpose-wagons');
// });




Route::get('/plant-infrastructure', function() {
    return view('frontend.key-differentiator.plant-infrastructure');
});




Route::get('/location-advantage', function() {
    return view('frontend.key-differentiator.location-advantage');
});
Route::get('/manpower-advantage', function() {
    return view('frontend.key-differentiator.manpower-advantage');
});



Route::get('/what-we-do/msw-handling', function() {
    return view('frontend.what-we-do.msw-handling');});

Route::get('/what-we-do/pre-processing', function() {
    return view('frontend.what-we-do.pre-processing');
});
Route::get('/what-we-do/waste-to-energy', function() {
    return view('frontend.what-we-do.waste-to-energy');
});
Route::get('/what-we-do/waste-to-city-compost', function() {
    return view('frontend.what-we-do.waste-to-city-compost');
});


Route::get('/sustainability/ehs', function() {
    return view('frontend.sustainability.ehs');
});
Route::get('/sustainability/ehs-activities', function() {
    return view('frontend.sustainability.ehs');
});
Route::get('/sustainability/ehs-policy', function() {
    return view('frontend.sustainability.ehs-policy');
});
Route::get('/sustainability/ehs-compliance', function() {
    return view('frontend.sustainability.ehs-compliance');
});
Route::get('/sustainability/17-sdg', function() {
    return view('frontend.sustainability.pillers');
});

Route::get('/sustainability/swachh-bharat-abhiyan', function() {
    return view('frontend.sustainability.swachh-bharat-abhiyan');
});
Route::get('/sustainability/landfill-vs-wte', function() {
    return view('frontend.sustainability.landfill-vs-wte');
});


Route::get('/csr', function() {
    return view('frontend.financials.csr-policy');
});

Route::get('/who-we-are/policy', function() {
    return view('frontend.who-we-are.policy');
});
Route::get('/who-we-are/our-business', function() {
    return view('frontend.who-we-are.our-business');
});
Route::get('/who-we-are/employee-speak', function() {
    return view('frontend.who-we-are.employee-speak');
});
Route::get('/who-we-are/organogram', function() {
    return view('frontend.who-we-are.organogram');
});
Route::get('/who-we-are/our-leadership', function() {
    return view('frontend.who-we-are.our-leadership');
}); 
Route::get('/who-we-are/our-esteemed-guests2', function() {
    return view('frontend.who-we-are.our-esteemed-guests');
});


Route::get('/who-we-are/awards', function() {
    return view('frontend.who-we-are.awards');
});
Route::get('/gallery', function() {
    return view('frontend.gallery.index');
});

Route::get('/career', function() {
    return view('frontend.career.index');
});
Route::get('/career/show', function() {
    return view('frontend.career.show');
});

Route::get('/employee-speak', function() {
    return view('frontend.employee-speak.index');
});


Route::get('/financials/list-of-independent-directors', function() {
    return view('frontend.financials.indgependent-directors');
});


Route::resource('wagon-search', \App\Http\Controllers\Frontend\InvestorRelationController::class)->only(['index']);




Route::resource('/', \App\Http\Controllers\Frontend\IndexController::class)->only(['index',]);
Route::resource('/environment-compliance', \App\Http\Controllers\Frontend\EnvironmentComplianceController::class)->only(['index']);
Route::resource('financials/balance-sheets', \App\Http\Controllers\Frontend\BalanceSheetsController::class)->only(['index']);
Route::resource('financials/investor-relations', \App\Http\Controllers\Frontend\InvestorRelationController::class)->only(['index']);
Route::resource('/who-we-are/our-esteemed-guests', \App\Http\Controllers\Frontend\EsteemedGuestsController::class)->only(['index']);
Route::resource('/our-gallery', \App\Http\Controllers\Frontend\OurGalleryController::class)->only(['index']);



Route::resource('/blog', \App\Http\Controllers\Frontend\BlogController::class)->only([
    'index',
    'show',
]);

Route::resource('/contact', \App\Http\Controllers\Frontend\ContactController::class)->only([
    'index',
    'store',
]);

Route::resource('/career', \App\Http\Controllers\Frontend\CareerController::class)->only([
    'index',
    'show',
    'store',
]);
Route::resource('/career', \App\Http\Controllers\Frontend\CareerController::class)->only([
    'index',
    'show',
    'store',
]);

Route::prefix('/dashboard')->as('dashboard.')->middleware('auth')->group(function() {
    
    Route::prefix('/user-management')->as('user-management.')->group(function() {


        Route::resource('/users', \App\Http\Controllers\Backend\UserManagement\UsersController::class);
        Route::patch('/users/{id}/restore', [
            \App\Http\Controllers\Backend\UserManagement\UsersController::class,
            'restore',
        ])->name('users.restore');
        Route::delete('/users/{id}/force-delete', [
            \App\Http\Controllers\Backend\UserManagement\UsersController::class,
            'forceDelete',
        ])->name('users.force-delete');

        Route::patch('/role/{id}/restore', [
            \App\Http\Controllers\Backend\UserManagement\RolesController::class,
            'restore',
        ])->name('roles.restore');
        Route::delete('/role/{id}/force-delete', [
            \App\Http\Controllers\Backend\UserManagement\RolesController::class,
            'forceDelete',
        ])->name('roles.force-delete');
        Route::resource('/roles', \App\Http\Controllers\Backend\UserManagement\RolesController::class);
    });
    
    
    
    Route::resource('/', \App\Http\Controllers\Backend\DashboardController::class);
    Route::prefix('/career-management')->as('career-management.')->group(function() {
        Route::patch('/job-posting/{job_posting}/restore', [
            \App\Http\Controllers\Backend\CareerManagement\JobPostingController::class,
            'restore',
        ])->name('job-posting.restore');
        Route::delete('/job-posting/{job_posting}/force-delete', [
            \App\Http\Controllers\Backend\CareerManagement\JobPostingController::class,
            'forceDelete',
        ])->name('job-posting.force-delete');
        Route::resource('/job-posting', \App\Http\Controllers\Backend\CareerManagement\JobPostingController::class);

        Route::resource('/job-posting.candidate', \App\Http\Controllers\Backend\CareerManagement\JobPostingCandidateController::class)->only([
            'index',
        ]);

        Route::patch('/candidate/{candidate}/restore', [
            \App\Http\Controllers\Backend\CareerManagement\CandidateController::class,
            'restore',
        ])->name('candidate.restore');
        Route::delete('/candidate/{candidate}/force-delete', [
            \App\Http\Controllers\Backend\CareerManagement\CandidateController::class,
            'forceDelete',
        ])->name('candidate.force-delete');
        Route::resource('/candidate', \App\Http\Controllers\Backend\CareerManagement\CandidateController::class)->only([
            'index',
            'destroy',
        ]);
    });
    Route::prefix('/blogging')->as('blogging.')->group(function() {
        Route::patch('/blog/{blog}/restore', [
            \App\Http\Controllers\Backend\Blogging\BlogController::class,
            'restore',
        ])->name('blog.restore');
        Route::delete('/blog/{blog}/force-delete', [
            \App\Http\Controllers\Backend\Blogging\BlogController::class,
            'forceDelete',
        ])->name('blog.force-delete');
        Route::resource('/blog', \App\Http\Controllers\Backend\Blogging\BlogController::class);

        Route::patch('/blog-category/{blog_category}/restore', [
            \App\Http\Controllers\Backend\Blogging\BlogCategoryController::class,
            'restore',
        ])->name('blog-category.restore');
        Route::delete('/blog-category/{blog_category}/force-delete', [
            \App\Http\Controllers\Backend\Blogging\BlogCategoryController::class,
            'forceDelete',
        ])->name('blog-category.force-delete');
        Route::resource('/blog-category', \App\Http\Controllers\Backend\Blogging\BlogCategoryController::class);
    });
    Route::prefix('/seo')->as('seo.')->group(function() {
        Route::resource('/', \App\Http\Controllers\Backend\SEOController::class)->only([
            'index',
            'store',
        ]);
        Route::resource('/sitemap', \App\Http\Controllers\Backend\SitemapController::class)->only([
            'create',
        ]);
    });
    Route::resource('/header-footer-code-manager', \App\Http\Controllers\Backend\HeaderFooterCodeManagerController::class);
    Route::resource('/media-library', \App\Http\Controllers\Backend\MediaLibraryController::class);
    Route::resource('/contact', \App\Http\Controllers\Backend\ContactController::class)->only([
        'index',
    ]);
    
    Route::prefix('/pages')->as('pages.')->group(function() {
        Route::resource('/homepage', \App\Http\Controllers\Backend\Pages\HomepageController::class);
        Route::resource('/home-slider', \App\Http\Controllers\Backend\Pages\HomepageSliderController::class);
        Route::resource('/home-our-gallery', \App\Http\Controllers\Backend\Pages\OurGalleryController::class);
        Route::patch('/home-our-gallery/{id}/restore', [
            \App\Http\Controllers\Backend\Pages\OurGalleryController::class,
            'restore',
        ])->name('home-our-gallery.restore');
        Route::delete('/home-our-gallery/{id}/force-delete', [
            \App\Http\Controllers\Backend\Pages\OurGalleryController::class,
            'forceDelete',
        ])->name('home-our-gallery.force-delete');
        Route::resource('/home-success-timeline', \App\Http\Controllers\Backend\Pages\SuccessTimelineController::class);
        Route::patch('/home-success-timeline/{id}/restore', [
            \App\Http\Controllers\Backend\Pages\SuccessTimelineController::class,
            'restore',
        ])->name('home-success-timeline.restore');
        Route::delete('/home-success-timeline/{id}/force-delete', [
            \App\Http\Controllers\Backend\Pages\SuccessTimelineController::class,
            'forceDelete',
        ])->name('home-success-timeline.force-delete');
        Route::resource('/home-testimonial', \App\Http\Controllers\Backend\Pages\TestimonialController::class);
        Route::patch('/home-testimonial/{id}/restore', [
            \App\Http\Controllers\Backend\Pages\TestimonialController::class,
            'restore',
        ])->name('home-testimonial.restore');
        Route::delete('/home-testimonial/{id}/force-delete', [
            \App\Http\Controllers\Backend\Pages\TestimonialController::class,
            'forceDelete',
        ])->name('home-testimonial.force-delete');
        Route::resource('/environmentcompliancepage', \App\Http\Controllers\Backend\Pages\EnvironmentComplianceController::class);
        Route::patch('/environmentcompliancepage/{id}/restore', [
            \App\Http\Controllers\Backend\Pages\EnvironmentComplianceController::class,
            'restore',
        ])->name('environmentcompliancepage.restore');
        Route::delete('/environmentcompliancepage/{id}/force-delete', [
            \App\Http\Controllers\Backend\Pages\EnvironmentComplianceController::class,
            'forceDelete',
        ])->name('environmentcompliancepage.force-delete');
        Route::resource('/environmentcompliancepage', \App\Http\Controllers\Backend\Pages\EnvironmentComplianceController::class);


        Route::resource('/esteemed-guests', \App\Http\Controllers\Backend\Pages\EsteemedGuestsController::class);
        Route::patch('/esteemed-guests/{id}/restore', [
            \App\Http\Controllers\Backend\Pages\EsteemedGuestsController::class,
            'restore',
        ])->name('esteemed-guests.restore');
        Route::delete('/esteemed-guests/{id}/force-delete', [
            \App\Http\Controllers\Backend\Pages\EsteemedGuestsController::class,
            'forceDelete',
        ])->name('esteemed-guests.force-delete');

        Route::resource('/balancesheet', \App\Http\Controllers\Backend\Pages\BalanceSheetController::class);
        Route::patch('/balancesheet/{id}/restore', [
            \App\Http\Controllers\Backend\Pages\BalanceSheetController::class,
            'restore',
        ])->name('balancesheet.restore');
        Route::delete('/balancesheet/{id}/force-delete', [
            \App\Http\Controllers\Backend\Pages\BalanceSheetController::class,
            'forceDelete',
        ])->name('balancesheet.force-delete');
        Route::resource('/balancesheet', \App\Http\Controllers\Backend\Pages\BalanceSheetController::class);
        
        
        
        Route::resource('/investor-relation', \App\Http\Controllers\Backend\Pages\InvestorRelationController::class);
        Route::patch('/investor-relation/{id}/restore', [
            \App\Http\Controllers\Backend\Pages\InvestorRelationController::class,
            'restore',
        ])->name('investor-relation.restore');
        Route::patch('/investor-relation/file-upload', [
            \App\Http\Controllers\Backend\Pages\InvestorRelationController::class,
            'upload',
        ])->name('investor-relation.upload');
        Route::delete('/investor-relation/{id}/force-delete', [
            \App\Http\Controllers\Backend\Pages\InvestorRelationController::class,
            'forceDelete',
        ])->name('investor-relation.force-delete');
        
        
        Route::resource('/investor-relation-year', \App\Http\Controllers\Backend\Pages\InvestorRelationYearController::class);
        Route::patch('/investor-relation-year/{id}/restore', [
            \App\Http\Controllers\Backend\Pages\InvestorRelationYearController::class,
            'restore',
        ])->name('investor-relation-year.restore');
        Route::delete('/investor-relation-year/{id}/force-delete', [
            \App\Http\Controllers\Backend\Pages\InvestorRelationYearController::class,
            'forceDelete',
        ])->name('investor-relation-year.force-delete');
        
        
        Route::resource('/investor-relation-tab', \App\Http\Controllers\Backend\Pages\InvestorRelationTabController::class);
        Route::patch('/investor-relation-tab/{id}/restore', [
            \App\Http\Controllers\Backend\Pages\InvestorRelationTabController::class,
            'restore',
        ])->name('investor-relation-tab.restore');
        Route::delete('/investor-relation-tab/{id}/force-delete', [
            \App\Http\Controllers\Backend\Pages\InvestorRelationTabController::class,
            'forceDelete',
        ])->name('investor-relation-tab.force-delete');
        
        
          
        ////Route::get('tabs', '\App\Http\Controllers\Backend\Pages\InvestorRelationController@tabs')->name('investor-relation.tabs');
        ////Route::get('years', '\App\Http\Controllers\Backend\Pages\InvestorRelationController@years')->name('investor-relation.years');
    });
});

Auth::routes(['register' => FALSE]);
