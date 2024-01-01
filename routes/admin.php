<?php

use App\Http\Controllers\BookSectionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryForExamController;
use App\Http\Controllers\DownloadCategoryController;
use App\Http\Controllers\DownloadSectionController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\Front\StudentController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QnaController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SlugRedirectionController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\TestFeatureController;
use App\Http\Controllers\TestScheduleController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\FeeDetailController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestPaperController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VacanciesController;
use App\Http\Controllers\YoutubeController;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AchieversController;
use App\Http\Controllers\AffairsController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CourseInstallmentController;
use App\Http\Controllers\CourseFAQController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SeederController;

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
Route::get("/seedpages", [SeederController::class, "seedPages"]);
Route::get("/abcd", function () {
    return view("current-affairs.layout.our_book_section");
});

Route::prefix('dashboard')->middleware('auth')->group(function () {

    Route::get('get_post_for_menu', [MenuController::class, "get_posts_ajax_query"])->name("get_posts_ajax_query");

    Route::get('add-post-to-menu/{post}', function (Post $post) {
        $menu = new Menu();
        $post->menu()->save($menu);
        return ['msg' => 'Record has been added to menu list successfully'];
    })->name('add-to-menu');

    Route::get('remove-post-from-menu/{post}', function (Post $post) {
        $post->menu()->delete();
        return ['msg' => 'Record has been removed from menu list successfully'];
    })->name('remove-from-menu');


    Route::get('add-page-to-menu/{page}', function (Page $page) {
        $menu = new Menu();
        $page->menu()->save($menu);
        return ['msg' => 'Record has been added to menu list successfully'];
    })->name('add-page-to-menu');

    Route::get('remove-page-from-menu/{page}', function (Page $page) {
        $page->menu()->delete();
        return ['msg' => 'Record has been removed from menu list successfully'];
    })->name('remove-page-from-menu');


    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('logout-guest', [StudentController::class, 'logout'])->name('logout-guest');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('users')->group(function () {
        Route::get('/', [UsersController::class, 'index'])->name('users');
        Route::get('create', [UsersController::class, 'create'])->name('create-user');
        Route::post('create', [UsersController::class, 'store']);
        Route::get('edit/{user}', [UsersController::class, 'edit'])->name('edit-user');
        Route::post('edit/{user}', [UsersController::class, 'update']);
        Route::get('delete/{user}', [UsersController::class, 'destroy'])->name('delete-user');
    });

    Route::prefix('slider')->group(function () {
        Route::get('/', [SliderController::class, 'index'])->name('slider');
        Route::get('create', [SliderController::class, 'create'])->name('create-slider');
        Route::post('create', [SliderController::class, 'store']);
        Route::get('edit/{slider}', [SliderController::class, 'edit'])->name('edit-slider');
        Route::post('edit/{slider}', [SliderController::class, 'update']);
        Route::get('delete/{slider}', [SliderController::class, 'destroy'])->name('delete-slider');
    });

    Route::prefix('gallery')->group(function () {
        Route::get('/', [GalleryController::class, 'index'])->name('gallery');
        Route::get('create', [GalleryController::class, 'create'])->name('create-gallery');
        Route::post('create', [GalleryController::class, 'store']);
        Route::get('edit/{gallery}', [GalleryController::class, 'edit'])->name('edit-gallery');
        Route::post('edit/{gallery}', [GalleryController::class, 'update']);
        Route::get('delete/{gallery}', [GalleryController::class, 'destroy'])->name('delete-gallery');
    });

    Route::prefix('achievers/{type}')->group(function () {
        Route::get('/', [AchieversController::class, 'index'])->name('achievers');
        Route::get('create', [AchieversController::class, 'create'])->name('create-achievers');
        Route::post('create', [AchieversController::class, 'store']);
        Route::get('edit/{achiever}', [AchieversController::class, 'edit'])->name('edit-achievers');
        Route::post('edit/{achiever}', [AchieversController::class, 'update']);
        Route::get('delete/{achiever}', [AchieversController::class, 'destroy'])->name('delete-achievers');
    });
    Route::prefix('toppers/{type}')->group(function () {
        Route::get('/', [AchieversController::class, 'index'])->name('toppers');
        Route::get('create', [AchieversController::class, 'create'])->name('create-toppers');
        Route::post('create', [AchieversController::class, 'store']);
        Route::get('edit/{achiever}', [AchieversController::class, 'edit'])->name('edit-toppers');
        Route::post('edit/{achiever}', [AchieversController::class, 'update']);
        Route::get('delete/{topper}', [AchieversController::class, 'destroy'])->name('delete-toppers');
    });
    Route::prefix('ajaxcource')->group(function () {
        Route::get('{id}/{type}/features/', [FeatureController::class, 'ajaxindex'])->name("featureAjax");
        Route::post('{id}/features/create', [FeatureController::class, 'ajaxcreate'])->name("createFeatureAjax");
        Route::get('features/delete/{featureid}', [FeatureController::class, 'ajaxcdelete'])->name("deleteFeatureAjax");
        Route::post('features/update/{feature}', [FeatureController::class, 'update'])->name("edit-feature");

        Route::get('installments/{course}', [CourseInstallmentController::class, 'ajaxindex'])->name('installmentsAjax');
        Route::post('installments/create/{course}', [CourseInstallmentController::class, 'ajaxcreate'])->name('createInstallmentsAjax');
        Route::get('installments/delete/{installment}', [CourseInstallmentController::class, 'ajaxdelete'])->name('deleteInstallmentsAjax');
        Route::post('installments/edit/{installment}', [CourseInstallmentController::class, 'update'])->name('edit-courses-installment');

        Route::get('faq/{course}', [CourseFAQController::class, 'ajaxindex'])->name('faqAjax');
        Route::post('faq/create/{course}', [CourseFAQController::class, 'ajaxcreate'])->name('createfaqAjax');
        Route::get('faq/delete/{faq}', [CourseFAQController::class, 'destroy'])->name('deletefaqAjax');
    });


//    AJAX for Test
    Route::prefix('ajaxtest/{test?}')->group(function () {
        Route::get('feedetails/', [FeeDetailController::class, 'ajaxindex'])->name('getfeedetails');
        Route::post('feedetails/create', [FeeDetailController::class, 'ajaxcreate'])->name('createfeedetailAjax');
        Route::get('feedetails/delete/{id}', [FeeDetailController::class, 'ajaxdelete'])->name('deleteInstallmentsAjax');
        Route::post('feedetails/edit/{id}', [FeeDetailController::class, 'updateajax'])->name('edit-feedetail');
    });

    Route::prefix('courses')->group(function () {
        Route::get('/', [CoursesController::class, 'index'])->name('courses');
        Route::get('create', [CoursesController::class, 'create'])->name('create-courses');
        Route::post('create', [CoursesController::class, 'store']);
        Route::get('edit/{course}', [CoursesController::class, 'edit'])->name('edit-courses');
        Route::post('edit/{course}', [CoursesController::class, 'update']);
        Route::get('delete/{course}', [CoursesController::class, 'destroy'])->name('delete-courses');

        Route::prefix('{course}/features')->group(function () {
            Route::post('create', [FeatureController::class, 'store'])->name('create-feature');
//            Route::post('edit/{feature}', [FeatureController::class, 'update'])->name('edit-feature');
            Route::get('delete/{features}', [FeatureController::class, 'destroy'])->name('delete-feature');
        });
//            Route::prefix('{course}/installments')->group(function () {
//                Route::post('create', [CourseInstallmentController::class, 'store'])->name('create-courses-installment');
//            });
        Route::prefix('faq/{course}')->group(function () {
            Route::post('create', [CourseFAQController::class, 'store'])->name('create-courses-faq');
            Route::post('edit/{faq}', [CourseFAQController::class, 'update'])->name('edit-courses-faq');
        });

    });

    Route::prefix('notification')->group(function () {
        Route::get('/', [NotificationController::class, 'index'])->name('notification');
        Route::get('/add-to-notification/{post}', [NotificationController::class, 'add'])->name('add-to-notification');
        Route::get('/remove-from-notification/{post}', [NotificationController::class, 'remove'])->name('remove-from-notification');
    });

    Route::prefix('batch-details')->group(function () {
        Route::get('/', [BatchController::class, 'index'])->name('batch');
        Route::get('create', [BatchController::class, 'create'])->name('create-batch');
        Route::post('create', [BatchController::class, 'store']);
        Route::get('edit/{batch}', [BatchController::class, 'edit'])->name('edit-batch');
        Route::post('edit/{batch}', [BatchController::class, 'update']);
        Route::get('delete/{batch}', [BatchController::class, 'destroy'])->name('delete-batch');
    });

    Route::prefix('test-series')->group(function () {
        Route::get('/', [TestController::class, 'index'])->name('test');
        Route::get('create', [TestController::class, 'create'])->name('create-test');
        Route::post('create', [TestController::class, 'store']);
        Route::get('edit/{test}', [TestController::class, 'edit'])->name('edit-test');
        Route::post('edit/{test}', [TestController::class, 'update']);
        Route::get('delete/{test}', [TestController::class, 'destroy'])->name('delete-test');
        Route::post('publish_results', [TestController::class, 'publish_results'])->name('publish_results');

//        Route::prefix('{test}/features')->group(function () {
//            Route::get('/', [TestFeatureController::class, 'index'])->name('test-feature');
//            Route::get('create', [TestFeatureController::class, 'create'])->name('create-test-feature');
//            Route::post('create', [TestFeatureController::class, 'store']);
//            Route::get('edit/{feature}', [TestFeatureController::class, 'edit'])->name('edit-test-feature');
//            Route::post('edit/{feature}', [TestFeatureController::class, 'update']);
//            Route::get('delete/{feature}', [TestFeatureController::class, 'destroy'])->name('delete-test-feature');
//        });
        Route::prefix('{test}/fee-details')->group(function () {
            Route::get('/', [FeeDetailController::class, 'index'])->name('fee-detail');
            Route::get('create', [FeeDetailController::class, 'create'])->name('create-fee-detail');
            Route::post('create', [FeeDetailController::class, 'store']);
            Route::get('edit/{fee_detail}', [FeeDetailController::class, 'edit'])->name('edit-fee-detail');
            Route::post('edit/{fee_detail}', [FeeDetailController::class, 'update']);
            Route::get('delete/{fee_detail}', [FeeDetailController::class, 'destroy'])->name('delete-fee-detail');
        });
        Route::prefix('{test}/test_papers')->group(function () {
            Route::get('/', [TestPaperController::class, 'index'])->name('test-paper');
            Route::post('/', [TestPaperController::class, 'uploadFile']);
            Route::get('create', [TestPaperController::class, 'create'])->name('create-test-paper');
            Route::post('create', [TestPaperController::class, 'store']);
            Route::get('edit/{paper}', [TestPaperController::class, 'edit'])->name('edit-test-paper');
            Route::post('edit/{paper}', [TestPaperController::class, 'update']);
            Route::get('delete/{paper}', [TestPaperController::class, 'delete'])->name('delete-test-paper');
            Route::prefix('{paper}/schedule')->group(function () {
                Route::get('/', [TestScheduleController::class, 'index'])->name('schedule');
                Route::get('create', [TestScheduleController::class, 'create'])->name('create-schedule');
                Route::post('create', [TestScheduleController::class, 'store']);
                Route::get('edit/{schedule}', [TestScheduleController::class, 'edit'])->name('edit-schedule');
                Route::post('edit/{schedule}', [TestScheduleController::class, 'update']);
                Route::get('delete/{schedule}', [TestScheduleController::class, 'delete'])->name('delete-schedule');
            });
        });
    });


    Route::prefix('current-affairs/{type?}')->group(function () {
        Route::get('/', [AffairsController::class, 'index'])->name('affairs');

        Route::prefix('qna')->group(function () {
            Route::get('/{subject}', [QnaController::class, 'show_qnas'])->name('qnas');
            Route::get('create/{subject}', [QnaController::class, 'createmcq'])->name('createmcq');
            Route::post('create/{subject}', [QnaController::class, 'addQuestion'])->name('addQuestion');
            Route::get('edit/{subject}/{mcq}', [QnaController::class, 'update_view_mcq'])->name("updatemcq");
            Route::post('edit/{subject}/{mcq}', [QnaController::class, 'updatemcq']);
            Route::get('delete/{qna}', [QnaController::class, 'deleteqna'])->name('deleteqna');
        });
        Route::post('storesubject', [QnaController::class, 'storesubject'])->name('storesubject');
        Route::post('editsubject/{subject}', [QnaController::class, 'editsubject'])->name('editsubject');
        Route::get('deletesubject/{subject}', [QnaController::class, 'deletesubject'])->name('deletesubject');

        Route::get('create/{hiEn?}', [AffairsController::class, 'create'])->name('create-affairs');
        Route::get('edit/{post}/{hiEn?}', [AffairsController::class, 'edit'])->name('edit-affairs');
        Route::post('create', [AffairsController::class, 'store']);
        Route::post('store_daily_prepare', [AffairsController::class, 'store_daily_prepare'])->name("store_daily_prepare");
        Route::post('update/{attachment}', [AffairsController::class, 'update'])->name("update-attachment");
        Route::get('delete/{post}/{attachment}', [AffairsController::class, 'destroy'])->name('delete-affairs');
    });

    Route::prefix('book-section')->group(function () {
        Route::get('/', [BookSectionController::class, 'index'])->name('books');
        Route::post('create', [BookSectionController::class, 'store_books'])->name('create-book');
        Route::get('delete/{attachment}', [BookSectionController::class, 'destroy'])->name('delete-book');
    });

    Route::prefix('subject')->group(function () {
        Route::get('/', [SubjectController::class, 'index'])->name('subject');
        Route::post('create', [SubjectController::class, 'store'])->name('create-subject');
        Route::post('add-teacher/{attachAbleSubject}', [SubjectController::class, 'attachTeacher'])->name('add-teacher');
        Route::get('delete/{subject}', [SubjectController::class, 'destroy'])->name('delete-subject');
        Route::get('detach-teacher/{subject}/{teacher}', [SubjectController::class, 'detachTeacher'])->name('detach-teacher');
    });

    Route::prefix('center')->group(function () {
        Route::get('/', [CenterController::class, 'index'])->name('center');
        Route::get('create', [CenterController::class, 'create'])->name('create-center');
        Route::post('create', [CenterController::class, 'store']);
        Route::get('edit/{center}', [CenterController::class, 'edit'])->name('edit-center');
        Route::post('edit/{center}', [CenterController::class, 'update']);
        Route::get('delete/{center}', [CenterController::class, 'destroy'])->name('delete-center');
    });

    Route::prefix('youtube')->group(function () {
        Route::get('/', [YoutubeController::class, 'index'])->name('youtube');
    });

    Route::prefix('store')->group(function () {
        Route::get('/', [StoreController::class, 'index'])->name('store');
    });

    Route::prefix('team')->group(function () {
        Route::get('/', [TeamController::class, 'index'])->name('team');
        Route::get('create', [TeamController::class, 'create'])->name('create-team');
        Route::post('create', [TeamController::class, 'store']);
        Route::get('edit/{team}', [TeamController::class, 'edit'])->name('edit-team');
        Route::post('edit/{team}', [TeamController::class, 'update']);
        Route::get('delete/{team}', [TeamController::class, 'destroy'])->name('delete-team');
    });

    Route::prefix('menu')->group(function () {
        Route::get('/', [MenuController::class, 'index'])->name('menu');
//        Ajax request handler
        Route::get('/location-items/{location}', [MenuController::class, 'locationItems'])->name('location-items');

        Route::post('create', [MenuController::class, 'store'])->name('store-menus');

    });

    Route::prefix('post')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('post');
        Route::get('create/{hiEn?}', [PostController::class, 'create'])->name('create-post');
        Route::post('create/{hiEn?}', [PostController::class, 'store']);
        Route::get('edit/{post}/{hiEn?}', [PostController::class, 'edit'])->name('edit-post');
        Route::post('edit/{post}/{hiEn?}', [PostController::class, 'update']);
        Route::get('delete/{post}', [PostController::class, 'destroy'])->name('delete-post');
    });

//    Get Category ID AJAX
    Route::get('get_category_childrens/{categoryid}', [DownloadCategoryController::class, 'get_category_childrens'])->name('get_category_childrens');

    Route::prefix('downloads-section')->group(function () {
        Route::get('create/{parent_category}/{sub_category}/{hiEn?}', [DownloadSectionController::class, 'create'])->name('create-downloads');
        Route::post('create/{parent_category}/{sub_category}/{hiEn?}', [DownloadSectionController::class, 'store']);
        Route::get('edit/{post}/{hiEn?}', [DownloadSectionController::class, 'edit'])->name('edit-downloads');
        Route::post('edit/{post}/{hiEn?}', [DownloadSectionController::class, 'update']);
        Route::get('delete/{post}', [DownloadSectionController::class, 'destroy'])->name('delete-downloads');
        Route::get('/{parent_category}/{sub_category?}', [DownloadSectionController::class, 'index'])->name('view-downloads');

    });
    Route::prefix('download-category/{level?}')->group(function () {
        Route::get('/{categoryP?}', [DownloadCategoryController::class, 'index'])->name('download-category');
        Route::post('create/{categoryP?}', [DownloadCategoryController::class, 'store'])->name('download-create-category');
        Route::post('edit/{category}', [DownloadCategoryController::class, 'update'])->name('download-edit-category');
    });


    Route::prefix('exam')->group(function () {
        Route::get('/', [ExamController::class, 'index'])->name('exam');
        Route::get('create/{hiEn?}', [ExamController::class, 'create'])->name('create-exam');
        Route::post('create/{hiEn?}', [ExamController::class, 'store']);
        Route::get('edit/{exam}/{hiEn?}', [ExamController::class, 'edit'])->name('edit-exam');
        Route::post('edit/{exam}/{hiEn?}', [ExamController::class, 'update']);
        Route::get('delete/{exam}', [ExamController::class, 'destroy'])->name('delete-exam');

        Route::prefix('category/{level?}')->group(function () {
            Route::post('create/{categoryP?}/{category_type?}', [CategoryForExamController::class, 'store'])->name('exam-create-category');
            Route::get('/{categoryP?}/{category_type?}', [CategoryForExamController::class, 'index'])->name('exam-category');
            Route::post('edit/{category}', [CategoryForExamController::class, 'update'])->name('exam-edit-category');
        });
    });

    Route::prefix('category/{level?}')->group(function () {
        Route::post('create/{categoryP?}', [CategoryController::class, 'store'])->name('create-category');
        Route::get('/{categoryP?}', [CategoryController::class, 'index'])->name('category');
        Route::post('edit/{category}', [CategoryController::class, 'update'])->name('edit-category');
//      used by both CategoryForExamController and CategoryController as they use same Model Database
        Route::get('delete/{category}', [CategoryController::class, 'destroy'])->name('delete-category');
    });


    Route::prefix('pages')->group(function () {
        Route::get('/', [PageController::class, 'index'])->name('pages');
        Route::get('edit/{page}/{hiEn?}', [PageController::class, 'edit'])->name('edit-page');
        Route::post('edit/{page}/{hiEn?}', [PageController::class, 'update']);
    });

    Route::prefix('static_pages')->group(function () {
        Route::get('/', [StaticPageController::class, 'index'])->name('static-pages');
        Route::get('create', [StaticPageController::class, 'create'])->name('create-static-pages');
        Route::post('create', [StaticPageController::class, 'store']);
        Route::get('edit/{staticPage}', [StaticPageController::class, 'edit'])->name('edit-static-pages');
        Route::post('edit/{staticPage}', [StaticPageController::class, 'update']);
        Route::get('delete/{staticPage}', [StaticPageController::class, 'destroy'])->name('delete-static-pages');
    });

    Route::prefix('job-vacancies')->group(function () {
        Route::get('/', [VacanciesController::class, 'index'])->name('vacancies');
        Route::get('create', [VacanciesController::class, 'create'])->name('create-vacancies');
        Route::post('create', [VacanciesController::class, 'store']);
        Route::get('edit/{vacancies}', [VacanciesController::class, 'edit'])->name('edit-vacancies');
        Route::post('edit/{vacancies}', [VacanciesController::class, 'update']);
        Route::get('delete/{vacancies}', [VacanciesController::class, 'destroy'])->name('delete-vacancies');
    });

    Route::prefix('registered-students')->group(function () {
        Route::get('/', [RegistrationController::class, 'show'])->name('registeredStudent');
        Route::get('edit/{registration}', [RegistrationController::class, 'edit'])->name('edit-registeredStudent');
        Route::post('edit/{registration}', [RegistrationController::class, 'update']);
        Route::get('delete/{registration}', [RegistrationController::class, 'destroy'])->name('delete-registeredStudent');
    });

    Route::get("settings", [SettingController::class, "index"])->name("settings");
    Route::post("social-media-settings", [SettingController::class, "update_social_media"])->name("social-media-settings");
    Route::post("side-settings", [SettingController::class, "update_side_settings"])->name("side-settings");
});
