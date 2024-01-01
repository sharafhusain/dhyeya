<?php

use App\Http\Controllers\BookSectionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryForExamController;
use App\Http\Controllers\DownloadCategoryController;
use App\Http\Controllers\DownloadSectionController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\AchieverController;
use App\Http\Controllers\Front\AffairController;
use App\Http\Controllers\Front\BatchDetailController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\CategorypageController;
use App\Http\Controllers\Front\CentersController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\CourseController;
use App\Http\Controllers\Front\DhyeyaTvController;
use App\Http\Controllers\Front\DownloadController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\NotificationsController;
use App\Http\Controllers\Front\SinglePageController;
use App\Http\Controllers\Front\SinglePostController;
use App\Http\Controllers\Front\StoresController;
use App\Http\Controllers\Front\StudentController;
use App\Http\Controllers\Front\StudentZoneController;
use App\Http\Controllers\Front\TeamsController;
use App\Http\Controllers\Front\TemplateController;
use App\Http\Controllers\Front\TestsController;

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AffairsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('testing', function () {
//    return view('testing');
//})->name('single-post2');// used for testing views only
Route::get('/', function () {
    return redirect(app()->getLocale());
});

//Route::middleware('guest')->group(function () {
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('register', [RegistrationController::class, 'index'])->name('register');
Route::post('register', [RegistrationController::class, 'store']);
Route::get('download_contents/{attachmentTranslationId}', [AffairsController::class, 'downloadContent'])->name("download_contents");

//});

Route::prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}'])
    ->middleware('setlocale')
    ->group(function () {
        Route::middleware('guest')->group(function () {
////            only for guests
            Route::get('login-guest', [StudentController::class, 'create_guest'])->name('login-guest');
            Route::post('login-guest', [StudentController::class, 'authenticate']);
            Route::post('signup-guest', [StudentController::class, 'store'])->name('signup-guest');
        });

        Route::get('post/{type?}/{post:slug?}', [SinglePostController::class, 'index'])->name('single-post'); // customization in process

        Route::get('/', [HomeController::class, 'landing_page'])->name('landing-page');
        Route::get('daily-static-mcqs', [AffairController::class, 'daily_static_mcqs'])->name('daily_static_mcqs');
        Route::get('current-affairs/{type?}', [AffairController::class, 'current_affairs'])->name('front-affairs');

        Route::get('current-affairs/perfect-7-magazine/{post_slug}', function ($category, $post_slug) {
            return redirect()->route("magazine-section-single-page", ["perfect-7", $post_slug]);
        });

        Route::get('/{type?}', [AffairController::class, 'current_affairs'])->whereIn("type", ["brain-booster"])->name("brain-booster");
        Route::get('/{type?}/{post:slug?}', [SinglePostController::class, 'index'])->whereIn("type", ["brain-booster"])->name('brain-booster-post');
        Route::get('current-affairs/AIR-Debate/{attachment:slug}', [SinglePostController::class, 'air_debate_attachment'])->name('air-debate');
        Route::get('current-affairs/daily-pre-pare/{attachment:slug}', [AffairsController::class, 'download'])->name('daily-pre-pare');
        Route::get('current-affairs/download/{attachment}', [AffairsController::class, 'download'])->name('downloadfile');
        Route::get('current-affairs/{type?}/{post:slug?}/{attachment:slug?}', [SinglePostController::class, 'index'])->name('affair-single-post'); // customization in process

        // All Templates Route START
        Route::get('Dhyeya-IAS-Udaan', [TemplateController::class, 'udaan'])->name('dhyeya-ias-udaan');
        Route::get('courses/distance-learning-programme', [TemplateController::class, 'dlp'])->name('dlp');
        Route::prefix('distance-learning-programme')->group(function () {
            Route::get('/', [TemplateController::class, 'dlp'])->name('dlp');
            Route::get('upsc', [TemplateController::class, 'upsc'])->name('dlp_upsc');
            Route::get('uppcs', [TemplateController::class, 'uppcs'])->name('dlp_uppcs');
            Route::get('bpsc', [TemplateController::class, 'bpsc'])->name('dlp_bpsc');
        });
        // All Templates Route END

        Route::get('home', [HomeController::class, 'index'])->name('front-home');
        Route::prefix('about-us')->group(function () {
            Route::get('our-mission', [AboutController::class, 'mission'])->name('mission');
            Route::get('aims-and-objectives', [AboutController::class, 'aim'])->name('aim');
            Route::get('methodology-and-mechanism', [AboutController::class, 'methodology'])->name('methodology');
            Route::get('why-dhyeya-ias', [AboutController::class, 'why'])->name('why');
        });
        Route::get('gallery', [AboutController::class, 'gallery'])->name('front-gallery');
        Route::get('achievements', [AchieverController::class, 'index'])->name('front-achievers');
        Route::get('current-affairs/daily-current-affairs/{category:category_slug}', [AffairController::class, 'daily_news_analisis_sub_category'])
            ->whereIn("category",["economy-geography-and-disaster",
            "IR-and-internal-security",
            "science-tech-environment",
            "polity-governance-and-society"])
            ->name('daily_news_analisis_sub_category');

        //    Route::get('dhyeya-batch-details', [BatchDetailController::class, 'index'])->name('front-batches');
        Route::get('blogs', [BlogController::class, 'index'])->name('front-blogs');
        Route::get('centers', [CentersController::class, 'index'])->name('front-centers');
        Route::get('centers/face-to-face', [CentersController::class, 'indexf2f']);
        Route::get('centers/live-stream', [CentersController::class, 'indexLivestreaming']);

        Route::prefix('courses')->group(function () {
            Route::get('/', [CourseController::class, 'index'])->name('front-courses');
            Route::get('online', [CourseController::class, 'courseList'])->name('front-online-courses');
            Route::get('pen-drive-courses', [CourseController::class, 'courseList'])->name('front-pendrive-course');
        });

        //    Route::get('important-notifications', [NotificationsController::class, 'index'])->name('front-notifications'); //deprecated
        Route::get('store', [StoresController::class, 'index'])->name('front-stores'); //integration

        Route::get('student-zone', [StudentZoneController::class, 'index'])->name('front-student-zone');
        Route::get('upcoming-batch-details/{center?}', [StudentZoneController::class, 'batch'])->name('front-student-zone-batch');
        Route::get('fee-details', [StudentZoneController::class, 'fee'])->name('front-student-zone-fee');
        Route::get('books', [StudentZoneController::class, 'book'])->name('front-student-zone-book');
        //    Route::get('faqs', [StudentZoneController::class, 'faq'])->name('front-student-zone-faq');
        Route::get('exams/{category:category_slug?}', [CategorypageController::class, 'get_exam_primary_cat'])->name('front-student-zone-exam');
        Route::get('prospectus', [StudentZoneController::class, 'brochure'])->name('front-student-zone-brochure');
        Route::get('latest-notifications', [StudentZoneController::class, 'notification'])->name('front-student-zone-notification');
        Route::get('student-zone/test-series-result', [StudentZoneController::class, 'result'])->name('front-student-zone-result');
        Route::get('student-zone/test-series-result/{testid}', [StudentZoneController::class, 'download_result'])->name('download_result');

        Route::prefix('team')->group(function () {
            Route::get('/', [TeamsController::class, 'index'])->name('front-teams');
            Route::get('directors', [TeamsController::class, 'directors'])->name('directors');
            Route::get('advisory-board', [TeamsController::class, 'advisory'])->name('advisory');
            Route::get('administration', [TeamsController::class, 'administration'])->name('administration');
            Route::get('faculty', [TeamsController::class, 'faculty'])->name('faculty');
        });
        Route::get('interview-panelist', [TeamsController::class, 'panelist'])->name('team-panelist');

        Route::get('test-series', [TestsController::class, 'archive'])->name('front-tests');
        Route::get('test-series/{cats_type?}', [TestsController::class, 'cat_type'])->name('front-tests-type');
        Route::get('test-series/archive/{group_search_string}', [TestsController::class, 'listing'])->name('front-tests-archive');
        Route::get('test-series/{post:slug}', [TestsController::class, 'single_show'])->name('front-test');


        //    Route::get('dhyeya-toppers-words', [TopperController::class, 'index'])->name('front-toppers');
        Route::get('youtube', [DhyeyaTvController::class, 'index'])->name('front-youtube'); //integration
        Route::get('contact-us', [ContactController::class, 'index'])->name('contact');
        Route::post('contact-us', [ContactController::class, 'store']);
        Route::get('career', [ContactController::class, 'career'])->name('career');
        Route::get('career/dizvik-technologies', [ContactController::class, 'dizvik'])->name('dizvik');


        Route::get('course/{post:slug}', [SinglePageController::class, 'single_course'])->name("single_course");
        Route::get('course/pen-drive-courses/{post:slug}', [SinglePageController::class, 'single_course'])->name("single_penDrive_course");

        //    show all sub categorys
        Route::get('download', [DownloadController::class, 'index'])->name('download');
        //    show only a single post
        Route::get('download/post/{post:slug}', [DownloadController::class, 'blog'])->name('single-download-post');


//            donwload post's attachment
        Route::get('download/post/download-attachment/{attachment:slug}', [DownloadController::class, 'download'])->name('download-attachment');

        //    show only sub Categorys
        Route::get('download/{parent_categroy:category_slug}', [DownloadController::class, 'downloadDetail'])->name('download-detail');

        Route::get('download/{category:category_slug?}', [CategorypageController::class, 'get_download_primary_cat'])->name('download-page');

        //    =====================================Only to Copying Exact URLS =====================================
        Route::get('Class-Notes', [CategorypageController::class, 'class_notes'])->name('class_notes');
        Route::get('NCERT-Books', [CategorypageController::class, 'ncert_books'])->name('ncert_books');

        //      {perfect-7}
        Route::get('magazine/perfect-7-weekly-magazine/{post_slug}', function ($category, $post_slug) {
            return redirect()->route("magazine-section-single-page", ["perfect-7", $post_slug]);
        });

        Route::get('magazine/{category}', [CategorypageController::class, 'magazine'])->name('magazine');
        Route::get('magazine/{category}/{post:slug}', [DownloadController::class, 'magazine_section_single_page'])
            ->name('magazine-section-single-page');

        //archinve
        Route::get('papers/', [CategorypageController::class, 'papers'])->name('papers-archive');
        Route::get('{subcategory?}/papers', [CategorypageController::class, 'papers'])->name('papers');
        //    =====================================Only to Copying Exact URLS =====================================


        Route::get('{category}/papers/{post:slug}', [DownloadController::class, 'donload_section_single_page'])
            ->name('donload-section-single-page')->whereIn("category", ["uppsc", "BPSC", "MPPSC", "papers"]);

        Route::get('{category}/{post:slug}', [DownloadController::class, 'donload_section_single_page'])
            ->name('donload-section-single-page');

        // Route::get('papers/{subcategory?}/{post:slug}', [DownloadController::class, 'paper_section_single_page'])->name('paper-section-single-page');

//        Archive
//      {Pages}
        Route::get('{type}/papers', function () {
            return redirect()->route("papers");
        })->whereIn("type", ["uppsc", "BPSC", "MPPSC"]);

//        Pages
//      {page}
        Route::get('{type}/papers/{post}', function ($locale, $type, $post) {
            return redirect()->route("paper-section-single-page", $post);
        })->whereIn("type", ["uppsc", "BPSC", "MPPSC"]);

        //      {perfect-7}
    });
include 'admin.php';

Route::prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}'])
    ->middleware('setlocale')
    ->group(function () {
        Route::get('/{page:slug}', [SinglePageController::class, 'index'])->name("page");

        Route::get('downloads/{category:category_slug}', [CategorypageController::class, 'category_page'])->name("category_or_post");
    });
