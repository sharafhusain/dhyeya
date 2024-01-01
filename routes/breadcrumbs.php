<?php

use App\Models\Achiever;
use App\Models\BatchDetail;
use App\Models\Category;
use App\Models\Center;
use App\Models\Course;
use App\Models\CourseInstallment;
use App\Models\FeeDetail;
use App\Models\Page;
use App\Models\Post;
use App\Models\PostMeta;
use App\Models\Slider;
use App\Models\StudentRegistration;
use App\Models\Team;
use App\Models\Test;
use App\Models\TestPaper;
use App\Models\TestSchedule;
use App\Models\Vacancy;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard'));
});

// Dashboard > Slider
Breadcrumbs::for('slider', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Slider', route('slider'));
});

// Dashboard > Slider > Create
Breadcrumbs::for('create-slider', function (BreadcrumbTrail $trail) {
    $trail->parent('slider');
    $trail->push('Create', route('create-slider'));
});

// Dashboard > Slider > Edit
Breadcrumbs::for('edit-slider', function (BreadcrumbTrail $trail, Slider $slider) {
    $trail->parent('slider');
    $trail->push('Edit', route('edit-slider', $slider->id));
});

// Dashboard > Achiever
Breadcrumbs::for('achievers', function (BreadcrumbTrail $trail, $type) {
    $trail->parent('dashboard');
    $trail->push('Achiever', route('achievers', $type));
});

// Dashboard > Achiever > Create
Breadcrumbs::for('create-achievers', function (BreadcrumbTrail $trail, $type) {
    $trail->parent('achievers', $type);
    $trail->push('Create', route('create-achievers', $type));
});

// Dashboard > Achiever > Edit
Breadcrumbs::for('edit-achievers', function (BreadcrumbTrail $trail, $type, Achiever $achiever) {
    $trail->parent('achievers', $type);
    $trail->push('Edit', route('edit-achievers', [$type, $achiever->id]));
});

// Dashboard > Topper
Breadcrumbs::for('toppers', function (BreadcrumbTrail $trail, $type) {
    $trail->parent('dashboard');
    $trail->push('Topper', route('toppers', $type));
});

// Dashboard > Topper > Create
Breadcrumbs::for('create-toppers', function (BreadcrumbTrail $trail, $type) {
    $trail->parent('toppers', $type);
    $trail->push('Create', route('create-toppers', $type));
});

// Dashboard > Topper > Edit
Breadcrumbs::for('edit-toppers', function (BreadcrumbTrail $trail, $type, Achiever $achiever) {
    $trail->parent('toppers', $type);
    $trail->push('Edit', route('edit-toppers', [$type, $achiever->id]));
});

// Dashboard > Courses
Breadcrumbs::for('courses', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Courses', route('courses'));
});

// Dashboard > Courses > Create
Breadcrumbs::for('create-courses', function (BreadcrumbTrail $trail) {
    $trail->parent('courses');
    $trail->push('Create', route('create-courses'));
});

// Dashboard > Courses > Edit
Breadcrumbs::for('edit-courses', function (BreadcrumbTrail $trail, Course $course) {
    $trail->parent('courses');
    $trail->push('Edit', route('edit-courses', $course->id));
});

// Dashboard > Courses > Feature
Breadcrumbs::for('feature', function (BreadcrumbTrail $trail, Course $course) {
    $trail->parent('courses');
    $trail->push('Feature', route('feature', $course->id));
});

// Dashboard > Courses > Feature > Create
Breadcrumbs::for('create-feature', function (BreadcrumbTrail $trail, Course $course) {
    $trail->parent('feature', $course);
    $trail->push('Create', route('create-feature', $course->id));
});

// Dashboard > Courses > Feature > Edit
Breadcrumbs::for('edit-feature', function (BreadcrumbTrail $trail, Course $course, PostMeta $feature) {
    $trail->parent('feature', $course);
    $trail->push('Edit', route('edit-feature', [$course->id, $feature->id]));
});

// Dashboard > Courses > Installment
Breadcrumbs::for('courses-installment', function (BreadcrumbTrail $trail, Course $course) {
    $trail->parent('courses');
    $trail->push('Installment', route('courses-installment', $course->id));
});

// Dashboard > Courses > Installment > Create
Breadcrumbs::for('create-courses-installment', function (BreadcrumbTrail $trail, Course $course) {
    $trail->parent('courses-installment', $course);
    $trail->push('Create', route('create-courses-installment', $course->id));
});

// Dashboard > Courses > Installment > Edit
Breadcrumbs::for('edit-courses-installment', function (BreadcrumbTrail $trail, Course $course, CourseInstallment $installment) {
    $trail->parent('courses-installment', $course);
    $trail->push('Edit', route('edit-courses-installment', [$course->id, $installment->id]));
});

// Dashboard > Courses > FAQs
Breadcrumbs::for('courses-faq', function (BreadcrumbTrail $trail, Course $course) {
    $trail->parent('courses');
    $trail->push('FAQs', route('courses-faq', $course->id));
});

// Dashboard > Courses > FAQs > Create
Breadcrumbs::for('create-courses-faq', function (BreadcrumbTrail $trail, Course $course) {
    $trail->parent('courses-faq', $course);
    $trail->push('Create', route('create-courses-faq', $course->id));
});

// Dashboard > Courses > FAQs > Edit
Breadcrumbs::for('edit-courses-faq', function (BreadcrumbTrail $trail, Course $course, PostMeta $faq) {
    $trail->parent('courses-faq', $course);
    $trail->push('Edit', route('edit-courses-faq', [$course->id, $faq->id]));
});

// Dashboard > Notification
Breadcrumbs::for('notification', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Notification', route('notification'));
});

// Dashboard > Batch Details
Breadcrumbs::for('batch', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Batch Details', route('batch'));
});

// Dashboard > Batch Details > Create
Breadcrumbs::for('create-batch', function (BreadcrumbTrail $trail) {
    $trail->parent('batch');
    $trail->push('Create', route('create-batch'));
});

// Dashboard > Batch Details > Edit
Breadcrumbs::for('edit-batch', function (BreadcrumbTrail $trail, BatchDetail $batch) {
    $trail->parent('batch');
    $trail->push('Edit', route('edit-batch', $batch->id));
});

// Dashboard > Test Series
Breadcrumbs::for('test', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Test Series', route('test'));
});

// Dashboard > Test Series > Create
Breadcrumbs::for('create-test', function (BreadcrumbTrail $trail) {
    $trail->parent('test');
    $trail->push('Create', route('create-test'));
});

// Dashboard > Test Series > Edit
Breadcrumbs::for('edit-test', function (BreadcrumbTrail $trail, Test $test) {
    $trail->parent('test');
    $trail->push('Edit', route('edit-test', $test->id));
});

// Dashboard > Test Series > Feature
Breadcrumbs::for('test-feature', function (BreadcrumbTrail $trail, Test $test) {
    $trail->parent('test');
    $trail->push('Feature', route('test-feature', $test->id));
});

// Dashboard > Test Series > Feature > Create
Breadcrumbs::for('create-test-feature', function (BreadcrumbTrail $trail, Test $test) {
    $trail->parent('test-feature', $test);
    $trail->push('Create', route('create-test-feature', $test->id));
});

// Dashboard > Test Series > Feature > Edit
Breadcrumbs::for('edit-test-feature', function (BreadcrumbTrail $trail, Test $test, PostMeta $feature) {
    $trail->parent('test-feature', $test);
    $trail->push('Edit', route('edit-test-feature', [$test->id, $feature->id]));
});

// Dashboard > Test Series > Fee Details
Breadcrumbs::for('fee-detail', function (BreadcrumbTrail $trail, Test $test) {
    $trail->parent('test');
    $trail->push('Fee Details', route('fee-detail', $test->id));
});

// Dashboard > Test Series > Fee Details > Create
Breadcrumbs::for('create-fee-detail', function (BreadcrumbTrail $trail, Test $test) {
    $trail->parent('fee-detail', $test);
    $trail->push('Create', route('create-fee-detail', $test->id));
});

// Dashboard > Test Series > Fee Details > Edit
Breadcrumbs::for('edit-fee-detail', function (BreadcrumbTrail $trail, Test $test, FeeDetail $feeDetail) {
    $trail->parent('fee-detail', $test);
    $trail->push('Edit', route('edit-fee-detail', [$test->id, $feeDetail->id]));
});

// Dashboard > Test Series > Test Paper
Breadcrumbs::for('test-paper', function (BreadcrumbTrail $trail, Test $test) {
    $trail->parent('test');
    $trail->push('Test Paper', route('test-paper', $test->id));
});

// Dashboard > Test Series > Test Paper > Create
Breadcrumbs::for('create-test-paper', function (BreadcrumbTrail $trail, Test $test) {
    $trail->parent('test-paper', $test);
    $trail->push('Create', route('create-test-paper', $test->id));
});

// Dashboard > Test Series > Test Paper > Edit
Breadcrumbs::for('edit-test-paper', function (BreadcrumbTrail $trail, Test $test, TestPaper $paper) {
    $trail->parent('test-paper', $test);
    $trail->push('Edit', route('edit-test-paper', [$test->id, $paper->id]));
});

// Dashboard > Test Series > Test Paper > Schedule
Breadcrumbs::for('schedule', function (BreadcrumbTrail $trail, Test $test, TestPaper $paper) {
    $trail->parent('test-paper', $test);
    $trail->push('Schedule', route('schedule', [$test->id, $paper->id]));
});

// Dashboard > Test Series > Test Paper > Schedule > Create
Breadcrumbs::for('create-schedule', function (BreadcrumbTrail $trail, Test $test, TestPaper $paper) {
    $trail->parent('schedule', $test, $paper);
    $trail->push('Create', route('create-schedule', [$test->id, $paper->id]));
});

// Dashboard > Test Series > Test Paper > Schedule > Edit
Breadcrumbs::for('edit-schedule', function (BreadcrumbTrail $trail, Test $test, TestPaper $paper, TestSchedule $schedule) {
    $trail->parent('schedule', $test, $paper);
    $trail->push('Edit', route('edit-schedule', [$test->id, $paper->id, $schedule]));
});

// Dashboard > Current Affair
Breadcrumbs::for('affairs', function (BreadcrumbTrail $trail, $post) {
    $trail->parent('dashboard');
    $trail->push('Current Affairs', route('affairs', $post));
});


// Dashboard > Current Affair > Create
//Breadcrumbs::for('create-affairs', function (BreadcrumbTrail $trail, Post $post){
//    $trail->parent('affairs');
//    $trail->push('Current Affairs', route('create-affairs', $post->id));
//});

// Dashboard > Exam
Breadcrumbs::for('exam', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Exam', route('exam'));
});

// Dashboard > Exam > Create
Breadcrumbs::for('create-exam', function (BreadcrumbTrail $trail) {
    $trail->parent('exam');
    $trail->push('Create', route('create-exam'));
});

// Dashboard > Exam > Edit
Breadcrumbs::for('edit-exam', function (BreadcrumbTrail $trail, Post $exam) {
    $trail->parent('exam');
    $trail->push('Edit', route('edit-exam', $exam->id));
});

// Dashboard > Exam > Category
Breadcrumbs::for('exam-category', function (BreadcrumbTrail $trail, $level) {
    $trail->parent('exam');
    $trail->push('Category level ' . $level, route('exam-category'));
});

// Dashboard > Center
Breadcrumbs::for('center', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Center', route('center'));
});

// Dashboard > Center > Create
Breadcrumbs::for('create-center', function (BreadcrumbTrail $trail) {
    $trail->parent('center');
    $trail->push('Create', route('create-center'));
});

// Dashboard > Center > Edit
Breadcrumbs::for('edit-center', function (BreadcrumbTrail $trail, Center $center) {
    $trail->parent('center');
    $trail->push('Edit', route('edit-center', $center->id));
});

// Dashboard > Team
Breadcrumbs::for('team', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Team', route('team'));
});

// Dashboard > Team > Create
Breadcrumbs::for('create-team', function (BreadcrumbTrail $trail) {
    $trail->parent('team');
    $trail->push('Create', route('create-team'));
});

// Dashboard > Team > Edit
Breadcrumbs::for('edit-team', function (BreadcrumbTrail $trail, Team $team) {
    $trail->parent('team');
    $trail->push('Edit', route('edit-team', $team->id));
});

// Dashboard > Menu
Breadcrumbs::for('menu', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Menu', route('menu'));
});

// Dashboard > Post
Breadcrumbs::for('post', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Post', route('post'));
});

// Dashboard > Post > Create
Breadcrumbs::for('create-post', function (BreadcrumbTrail $trail) {
    $trail->parent('post');
    $trail->push('Create', route('create-post'));
});

// Dashboard > Post > Edit
Breadcrumbs::for('edit-post', function (BreadcrumbTrail $trail, Post $post) {
    $trail->parent('post');
    $trail->push('Edit', route('edit-post', $post->id));
});

// Dashboard > Page
Breadcrumbs::for('pages', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Page', route('pages'));
});

// Dashboard > Page > Edit
Breadcrumbs::for('edit-page', function (BreadcrumbTrail $trail, Page $page) {
    $trail->parent('pages');
    $trail->push('Edit', route('edit-page', $page->id));
});

// Dashboard > Category
Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $level, $categoryP) {
    $trail->parent('dashboard', $level, $categoryP);
//    $trail->push(is_null($categoryP) ? 'Category':'Category level '.$categoryP+1, route('category', $level));
    $trail->push('Category level '.$level, route('category', $level));

    /*$trail->parent('dashboard', $category);
    $trail->push(is_null($category) ? 'Category' : $category->level, route('category', $category->id));
    $trail->push(is_null($category) ? 'Category' : $category, route('category', [$level, $category]));
    $trail->parent('dashboard');
    if ($category->parent) {
        $trail->push(is_null($category) ? '':$category->level);
    } else {
        $trail->parent('dashboard');
    $trail->push('Category');
    }*/
});

// Dashboard > Vacancy
Breadcrumbs::for('vacancies', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Vacancy', route('vacancies'));
});

// Dashboard > Vacancy > Create
Breadcrumbs::for('create-vacancies', function (BreadcrumbTrail $trail) {
    $trail->parent('vacancies');
    $trail->push('Create', route('create-vacancies'));
});

// Dashboard > Vacancy > Edit
Breadcrumbs::for('edit-vacancies', function (BreadcrumbTrail $trail, Vacancy $vacancies) {
    $trail->parent('vacancies');
    $trail->push('Edit', route('edit-vacancies', $vacancies->id));
});

// Dashboard > Subject
Breadcrumbs::for('subject', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Subject', route('subject'));
});

// Dashboard > Registered Student
Breadcrumbs::for('registeredStudent', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Registered Student', route('registeredStudent'));
});

// Dashboard > Registered Student > Edit
Breadcrumbs::for('edit-registeredStudent', function (BreadcrumbTrail $trail, StudentRegistration $registration) {
    $trail->parent('registeredStudent');
    $trail->push('Edit', route('edit-registeredStudent', $registration->id));
});
