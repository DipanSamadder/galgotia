<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessSettingsController;
use App\Http\Controllers\UploadsMediaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\RolePermissionsController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PageSectionController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ProductContorller;
use App\Http\Controllers\MailController;
use App\Http\Controllers\InstituteController;
use App\Http\Controllers\InstituteTypeController;
use App\Http\Controllers\ProgramSessionController;
use App\Http\Controllers\ProgramSemesterController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ClassRoomController;
use App\Http\Controllers\FacultyTypeController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\DepartmentController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/
Route::get('/admin', [HomeController::class, 'admin_dashboard'])->middleware(['auth', 'verified'])->name('backend.admin');


Route::prefix('admin')->middleware(['auth', 'verified'])->group(function(){
    //Clear Cache
    Route::get('clear-cache', [HomeController::class, 'clear_cache'])->name('clear.cache');
    Route::get('send-test-mail', [MailController::class, 'testmail'])->name('testmail');
 

    //Institute
    Route::get('institutes', [InstituteController::class, 'index'])->name('institutes.index');
    Route::post('institute/edit', [InstituteController::class, 'edit'])->name('institutes.edit');
    Route::post('institute/store', [InstituteController::class, 'store'])->name('institutes.store');
    Route::post('get-all-institutes', [InstituteController::class, 'get_ajax_institutes'])->name('ajax_institutes');
    Route::post('institute/destory', [InstituteController::class, 'destory'])->name('institutes.destory');
    Route::post('institute/status', [InstituteController::class, 'status'])->name('institutes.status');
    Route::post('institute/update', [InstituteController::class, 'update'])->name('institutes.update');


    //Institute Type
    Route::get('institute-types', [InstituteTypeController::class, 'index'])->name('institute_types.index');
    Route::post('institute-types/edit', [InstituteTypeController::class, 'edit'])->name('institute_types.edit');
    Route::post('institute-types/store', [InstituteTypeController::class, 'store'])->name('institute_types.store');
    Route::post('get-all-institute-types', [InstituteTypeController::class, 'get_ajax_institute_types'])->name('ajax_institute_types');
    Route::post('institute-types/destory', [InstituteTypeController::class, 'destory'])->name('institute_types.destory');
    Route::post('institute-types/status', [InstituteTypeController::class, 'status'])->name('institute_types.status');
    Route::post('institute-types/update', [InstituteTypeController::class, 'update'])->name('institute_types.update');
 

    //Program session
    Route::get('program-session', [ProgramSessionController::class, 'index'])->name('program_session.index');
    Route::post('program-settion/edit', [ProgramSessionController::class, 'edit'])->name('program_session.edit');
    Route::post('program-settion/store', [ProgramSessionController::class, 'store'])->name('program_session.store');
    Route::post('get-all-program_session', [ProgramSessionController::class, 'get_ajax_program_session'])->name('ajax_program_session');
    Route::post('program-settion/destory', [ProgramSessionController::class, 'destory'])->name('program_session.destory');
    Route::post('program-settion/status', [ProgramSessionController::class, 'status'])->name('program_session.status');
    Route::post('program-settion/update', [ProgramSessionController::class, 'update'])->name('program_session.update');


    //Program Semester
    Route::get('program-semesters', [ProgramSemesterController::class, 'index'])->name('program_semesters.index');
    Route::post('program-semester/edit', [ProgramSemesterController::class, 'edit'])->name('program_semesters.edit');
    Route::post('program-semester/store', [ProgramSemesterController::class, 'store'])->name('program_semesters.store');
    Route::post('get-all-program_semesters', [ProgramSemesterController::class, 'get_ajax_program_semesters'])->name('ajax_program_semesters');
    Route::post('program-semester/destory', [ProgramSemesterController::class, 'destory'])->name('program_semesters.destory');
    Route::post('program-semester/status', [ProgramSemesterController::class, 'status'])->name('program_semesters.status');
    Route::post('program-semester/update', [ProgramSemesterController::class, 'update'])->name('program_semesters.update');


    //Program 
    Route::get('programs', [ProgramController::class, 'index'])->name('programs.index');
    Route::post('programs/edit', [ProgramController::class, 'edit'])->name('programs.edit');
    Route::post('programs/store', [ProgramController::class, 'store'])->name('programs.store');
    Route::post('get-all-programs', [ProgramController::class, 'get_ajax_programs'])->name('ajax_programs');
    Route::post('programs/destory', [ProgramController::class, 'destory'])->name('programs.destory');
    Route::post('programs/status', [ProgramController::class, 'status'])->name('programs.status');
    Route::post('programs/update', [ProgramController::class, 'update'])->name('programs.update');


    //Class Room 
    Route::get('class-room', [ClassRoomController::class, 'index'])->name('classes.index');
    Route::post('class-room/edit', [ClassRoomController::class, 'edit'])->name('classes.edit');
    Route::post('class-room/store', [ClassRoomController::class, 'store'])->name('classes.store');
    Route::post('get-all-class-room', [ClassRoomController::class, 'get_ajax_classes'])->name('ajax_classes');
    Route::post('class-room/destory', [ClassRoomController::class, 'destory'])->name('classes.destory');
    Route::post('class-room/status', [ClassRoomController::class, 'status'])->name('classes.status');
    Route::post('class-room/update', [ClassRoomController::class, 'update'])->name('classes.update');

    //Faculty Type 
    Route::get('faculty-type', [FacultyTypeController::class, 'index'])->name('faculty_type.index');
    Route::post('faculty-type/edit', [FacultyTypeController::class, 'edit'])->name('faculty_type.edit');
    Route::post('faculty-type/store', [FacultyTypeController::class, 'store'])->name('faculty_type.store');
    Route::post('get-all-faculty-type', [FacultyTypeController::class, 'get_ajax_faculty_type'])->name('ajax_faculty.type');
    Route::post('faculty-type/destory', [FacultyTypeController::class, 'destory'])->name('faculty_type.destory');
    Route::post('faculty-type/status', [FacultyTypeController::class, 'status'])->name('faculty_type.status');
    Route::post('faculty-type/update', [FacultyTypeController::class, 'update'])->name('faculty_type.update');

    //Faculty 
    Route::get('faculty', [FacultyController::class, 'index'])->name('faculty.index');
    Route::post('faculty/edit', [FacultyController::class, 'edit'])->name('faculty.edit');
    Route::post('faculty/store', [FacultyController::class, 'store'])->name('faculty.store');
    Route::post('get-all-faculty', [FacultyController::class, 'get_ajax_faculty'])->name('ajax_faculty');
    Route::post('faculty/destory', [FacultyController::class, 'destory'])->name('faculty.destory');
    Route::post('faculty/status', [FacultyController::class, 'status'])->name('faculty.status');
    Route::post('faculty/update', [FacultyController::class, 'update'])->name('faculty.update');


    //Department
    Route::get('departments', [DepartmentController::class, 'index'])->name('departments.index');
    Route::post('departments/edit', [DepartmentController::class, 'edit'])->name('departments.edit');
    Route::post('departments/store', [DepartmentController::class, 'store'])->name('departments.store');
    Route::post('get-all-departments', [DepartmentController::class, 'get_ajax_departments'])->name('ajax_departments');
    Route::post('departments/destory', [DepartmentController::class, 'destory'])->name('departments.destory');
    Route::post('departments/status', [DepartmentController::class, 'status'])->name('departments.status');
    Route::post('departments/update', [DepartmentController::class, 'update'])->name('departments.update');


    //Media library
    Route::get('media-library-admin', [UploadsMediaController::class, 'media_library_admin'])->name('media.library.admin');
    Route::post('media-uploads', [UploadsMediaController::class, 'uploads'])->name('media.uploads');
    Route::post('media-files_gets', [UploadsMediaController::class, 'files_gets_admin'])->name('media.gets.admin');
    Route::post('media-destroy-file', [UploadsMediaController::class, 'files_destroy_admin'])->name('media.destroy.admin');
    Route::post('media/update', [UploadsMediaController::class, 'update'])->name('media.update');
    Route::post('media/edit', [UploadsMediaController::class, 'edit'])->name('media.edit');

    //Pages
    Route::get('pages', [PagesController::class, 'index'])->name('pages.index');
    Route::get('page/edit/{id}', [PagesController::class, 'edit'])->name('pages.edit');
    Route::post('page/store', [PagesController::class, 'store'])->name('pages.store');
    Route::post('get-all-pages', [PagesController::class, 'get_ajax_pages'])->name('ajax_pages');
    Route::post('page/destory', [PagesController::class, 'destory'])->name('pages.destory');
    Route::post('page/status', [PagesController::class, 'status'])->name('pages.status');
    Route::post('page/update', [PagesController::class, 'update'])->name('pages.update');
    Route::post('page-extra-content/update', [PagesController::class, 'update_extra_content'])->name('pages_extra_content.update');
    
    
    //Contact Form
    Route::get('contact-form', [ContactFormController::class, 'index'])->name('contact_form.index');
    Route::post('contact-form/edit', [ContactFormController::class, 'edit'])->name('contact_form.edit');
    Route::get('contact-form-fields/edit/{id}', [ContactFormController::class, 'edit_fields'])->name('contact_form_fields.edit');
    Route::post('contact-form/store', [ContactFormController::class, 'store'])->name('contact_form.store');
    Route::post('get-all-contact-form', [ContactFormController::class, 'get_ajax_contact_forms'])->name('ajax_contact_forms');
    Route::post('contact-form/destory', [ContactFormController::class, 'destory'])->name('contact_form.destory');
    Route::post('contact-form/status', [ContactFormController::class, 'status'])->name('contact_form.status');
    Route::post('contact-form/update', [ContactFormController::class, 'update'])->name('contact_form.update');
    Route::post('contact-form-fields/update', [ContactFormController::class, 'edit_field_update'])->name('contact_form_fields.update');
    
    
    Route::get('contact-form/leads', [ContactFormController::class, 'contact_form_leads'])->name('contact_form.leads');
    Route::post('get-all-contact-form-leads', [ContactFormController::class, 'get_ajax_contact_forms_leads'])->name('ajax_contact_forms_leads');
    Route::post('contact-form-leads/destory', [ContactFormController::class, 'leads_destory'])->name('contact_form_leads.destory');
    Route::get('contact-form/leads-export/{id}',[ContactFormController::class, 'exportCfLeads'])->name('cf-export-leads');

    //Office Listing
    Route::get('offices', [OfficeController::class, 'index'])->name('office.index');
    Route::post('office/edit', [OfficeController::class, 'edit'])->name('office.edit');
    Route::post('office/store', [OfficeController::class, 'store'])->name('office.store');
    Route::post('get-all-office', [OfficeController::class, 'get_ajax_offices'])->name('ajax_offices');
    Route::post('office/update', [OfficeController::class, 'update'])->name('office.update');

    
    //History of YKK
    Route::get('history-of-timeline', [TimelineController::class, 'index'])->name('history.timeline.index');
    Route::post('history-of-timeline/edit', [TimelineController::class, 'edit'])->name('history.timeline.edit');
    Route::post('history-of-timeline/store', [TimelineController::class, 'store'])->name('history.timeline.store');
    Route::post('get-all-history-of-timeline', [TimelineController::class, 'get_ajax_history_of_timeline'])->name('ajax_history_of_timelines');
    Route::post('history-of-timeline/update', [TimelineController::class, 'update'])->name('history.timeline.update');
    

    //Page Section
    Route::get('page-sections', [PageSectionController::class, 'index'])->name('pages_section.index');
    Route::post('page-sections/edit', [PageSectionController::class, 'edit'])->name('pages_section.edit');
    Route::get('page-sections-fields/edit/{id}', [PageSectionController::class, 'edit_fields'])->name('pages_section_fields.edit');
    Route::post('page-sections/store', [PageSectionController::class, 'store'])->name('pages_section.store');
    Route::post('get-all-page-sections', [PageSectionController::class, 'get_ajax_page_sections'])->name('ajax_page_sections');
    Route::post('page-sections/destory', [PageSectionController::class, 'destory'])->name('pages_section.destory');
    Route::post('page-sections/status', [PageSectionController::class, 'status'])->name('pages_section.status');
    Route::post('page-sections/update', [PageSectionController::class, 'update'])->name('pages_section.update');
    Route::post('page-sections-fields/update', [PageSectionController::class, 'edit_field_update'])->name('pages_section_fields.update');
    
    //Users
    Route::get('users', [UsersController::class, 'index'])->name('users.index');
    Route::get('user/edit/{id}', [UsersController::class, 'edit'])->name('users.edit');
    Route::post('user/store', [UsersController::class, 'store'])->name('users.store');
    Route::post('get-all-users', [UsersController::class, 'get_ajax_users'])->name('ajax_users');
    Route::post('user/destory', [UsersController::class, 'destory'])->name('users.destory');
    Route::post('user/status', [UsersController::class, 'status'])->name('users.status');
    Route::post('user/update', [UsersController::class, 'update'])->name('users.update');

    //Profile Users
    Route::get('profiles', [UsersController::class, 'profiles'])->name('profiles.index');
    Route::post('profiles/update', [UsersController::class, 'profiles_update'])->name('profiles.update');

    //Roles
    Route::get('roles', [RolesController::class, 'index'])->name('roles.index');
    Route::get('role/edit/{id}', [RolesController::class, 'edit'])->name('roles.edit');
    Route::post('role/store', [RolesController::class, 'store'])->name('roles.store');
    Route::post('get-all-roles', [RolesController::class, 'get_ajax_roles'])->name('ajax_roles');
    Route::post('role/destory', [RolesController::class, 'destory'])->name('roles.destory');
    Route::post('role/update', [RolesController::class, 'update'])->name('roles.update');

    //Permissions
    Route::get('permissions', [RolePermissionsController::class, 'index'])->name('permissions.index');
    Route::get('permissions/edit/{id}', [RolePermissionsController::class, 'edit'])->name('permissions.edit');
    Route::post('permissions/store', [RolePermissionsController::class, 'store'])->name('permissions.store');
    Route::post('get-all-permissions', [RolePermissionsController::class, 'get_ajax_permissions'])->name('ajax_permissions');
    Route::post('permissions/destory', [RolePermissionsController::class, 'destory'])->name('permissions.destory');
    Route::post('permissions/status', [RolePermissionsController::class, 'status'])->name('permissions.status');
    Route::post('permissions/update', [RolePermissionsController::class, 'update'])->name('permissions.update');


    //Menus
    Route::get('menus', [MenuController::class, 'index'])->name('menus.index');
    Route::get('menu/edit/{id}', [MenuController::class, 'edit'])->name('menus.edit');
    Route::post('menu/store', [MenuController::class, 'store'])->name('menus.store');
    Route::post('get-all-menus', [MenuController::class, 'get_ajax_menus'])->name('ajax_menus');
    Route::post('menu/destory', [MenuController::class, 'destory'])->name('menus.destory');
    Route::post('menu/update', [MenuController::class, 'update'])->name('menus.update');
    Route::post('menus/status', [MenuController::class, 'status'])->name('menus.status');
    Route::get('menus-ordering/edit/{type}', [MenuController::class, 'menus_ordering'])->name('menus.ordering');
    Route::post('menus-ordering/update/', [MenuController::class, 'menus_ordering_update'])->name('menus.ordering.update');

    //Post
    Route::get('posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('post/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
    Route::post('post/store', [PostController::class, 'store'])->name('posts.store');
    Route::post('get-all-posts', [PostController::class, 'get_ajax_posts'])->name('ajax_posts');
    Route::post('post/destory', [PostController::class, 'destory'])->name('posts.destory');
    Route::post('post/status', [PostController::class, 'status'])->name('posts.status');
    Route::post('post/update', [PostController::class, 'update'])->name('posts.update');

    //Product
    Route::get('products', [ProductContorller::class, 'index'])->name('products.index');
    Route::get('product/edit/{id}', [ProductContorller::class, 'edit'])->name('products.edit');
    Route::post('product/store', [ProductContorller::class, 'store'])->name('products.store');
    Route::post('get-all-products', [ProductContorller::class, 'get_ajax_products'])->name('ajax_products');
    Route::post('product/destory', [ProductContorller::class, 'destory'])->name('products.destory');
    Route::post('product/status', [ProductContorller::class, 'status'])->name('products.status');
    Route::post('product/update', [ProductContorller::class, 'update'])->name('products.update');

   //Post Category
   Route::get('posts-cat', [PostCategoryController::class, 'index'])->name('posts_cat.index');
   Route::get('post-cat/edit/{id}', [PostCategoryController::class, 'edit'])->name('posts_cat.edit');
   Route::post('post-cat/store', [PostCategoryController::class, 'store'])->name('posts_cat.store');
   Route::post('get-all-posts-cat', [PostCategoryController::class, 'get_ajax_posts_cat'])->name('ajax_posts_cat');
   Route::post('post-cat/destory', [PostCategoryController::class, 'destory'])->name('posts_cat.destory');
   Route::post('post-cat/status', [PostCategoryController::class, 'status'])->name('posts_cat.status');
   Route::post('post-cat/update', [PostCategoryController::class, 'update'])->name('posts_cat.update');

    //Backend setting
    Route::get('backend-setting', [BusinessSettingsController::class, 'backend_setting'])->name('backend.setting');
    Route::get('frontend-setting', [BusinessSettingsController::class, 'frontend_setting'])->name('frontend.setting');
    Route::get('backend-header', [BusinessSettingsController::class, 'backend_header'])->name('backend.header');
    Route::get('backend-footer', [BusinessSettingsController::class, 'backend_footer'])->name('backend.footer');
    Route::post('business-setting-update', [BusinessSettingsController::class, 'update'])->name('business.setting.update');
});


