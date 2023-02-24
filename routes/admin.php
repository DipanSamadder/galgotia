<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Setting\BusinessSettingsController;
use App\Http\Controllers\UploadsMediaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Page\PagesController;
use App\Http\Controllers\User\UsersController;
use App\Http\Controllers\Setting\RolesController;
use App\Http\Controllers\Setting\RolePermissionsController;
use App\Http\Controllers\Setting\MenuController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Post\PostCategoryController;
use App\Http\Controllers\Page\PageSectionController;
use App\Http\Controllers\Setting\ContactFormController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Institute\InstituteController;
use App\Http\Controllers\Institute\InstituteTypeController;
use App\Http\Controllers\Program\ProgramSessionController;
use App\Http\Controllers\Program\ProgramSemesterController;
use App\Http\Controllers\Program\ProgramController;
use App\Http\Controllers\Institute\ClassRoomController;
use App\Http\Controllers\Faculty\FacultyTypeController;
use App\Http\Controllers\Faculty\FacultyController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Institute\DepartmentController;
use App\Http\Controllers\Setting\AddressController;
use App\Http\Controllers\Library\LibraryAuthorController;
use App\Http\Controllers\Library\LibraryBookController;
use App\Http\Controllers\Library\LibraryBookIssueController;
use App\Http\Controllers\Library\LibraryCategoryController;
use App\Http\Controllers\Library\LibraryPublisherController;

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
 

    //Library

    //Library Author
    Route::get('library-authors', [LibraryAuthorController::class, 'index'])->name('library.authors.index');
    Route::post('library-authors/edit', [LibraryAuthorController::class, 'edit'])->name('library.authors.edit');
    Route::post('library-authors/store', [LibraryAuthorController::class, 'store'])->name('library.authors.store');
    Route::post('get-all-library-authors', [LibraryAuthorController::class, 'get_ajax_library_authors'])->name('ajax_library_authors');
    Route::post('library-authors/destory', [LibraryAuthorController::class, 'destory'])->name('library.authors.destory');
    Route::post('library-authors/status', [LibraryAuthorController::class, 'status'])->name('library.authors.status');
    Route::post('library-authors/update', [LibraryAuthorController::class, 'update'])->name('library.authors.update');


    //Library Category
    Route::get('library-categories', [LibraryCategoryController::class, 'index'])->name('library.categories.index');
    Route::post('library-categories/edit', [LibraryCategoryController::class, 'edit'])->name('library.categories.edit');
    Route::post('library-categories/store', [LibraryCategoryController::class, 'store'])->name('library.categories.store');
    Route::post('get-all-library-categories', [LibraryCategoryController::class, 'get_ajax_library_categories'])->name('ajax_library_categories');
    Route::post('library-categories/destory', [LibraryCategoryController::class, 'destory'])->name('library.categories.destory');
    Route::post('library-categories/status', [LibraryCategoryController::class, 'status'])->name('library.categories.status');
    Route::post('library-categories/update', [LibraryCategoryController::class, 'update'])->name('library.categories.update');



    //Library Publisher
    Route::get('library-publisher', [LibraryPublisherController::class, 'index'])->name('library.publisher.index');
    Route::post('library-publisher/edit', [LibraryPublisherController::class, 'edit'])->name('library.publisher.edit');
    Route::post('library-publisher/store', [LibraryPublisherController::class, 'store'])->name('library.publisher.store');
    Route::post('get-all-library-publisher', [LibraryPublisherController::class, 'get_ajax_library_publisher'])->name('ajax_library_publisher');
    Route::post('library-publisher/destory', [LibraryPublisherController::class, 'destory'])->name('library.publisher.destory');
    Route::post('library-publisher/status', [LibraryPublisherController::class, 'status'])->name('library.publisher.status');
    Route::post('library-publisher/update', [LibraryPublisherController::class, 'update'])->name('library.publisher.update');


    //Library Issue
    Route::get('library-issues', [LibraryBookIssueController::class, 'index'])->name('library.issues.index');
    Route::post('library-issues/edit', [LibraryBookIssueController::class, 'edit'])->name('library.issues.edit');
    Route::post('library-issues/store', [LibraryBookIssueController::class, 'store'])->name('library.issues.store');
    Route::post('get-all-library-issues', [LibraryBookIssueController::class, 'get_ajax_library_issues'])->name('ajax_library_issues');
    Route::post('library-issues/destory', [LibraryBookIssueController::class, 'destory'])->name('library.issues.destory');
   Route::post('library-issues/update', [LibraryBookIssueController::class, 'update'])->name('library.issues.update');

    
    //Library Book
    Route::get('library-books', [LibraryBookController::class, 'index'])->name('library.books.index');
    Route::post('library-books/edit', [LibraryBookController::class, 'edit'])->name('library.books.edit');
    Route::post('library-books/store', [LibraryBookController::class, 'store'])->name('library.books.store');
    Route::post('get-all-library-books', [LibraryBookController::class, 'get_ajax_library_books'])->name('ajax_library_books');
    Route::post('library-books/destory', [LibraryBookController::class, 'destory'])->name('library.books.destory');
    Route::post('library-books/status', [LibraryBookController::class, 'status'])->name('library.books.status');
    Route::post('library-books/update', [LibraryBookController::class, 'update'])->name('library.books.update');

    //AddressController City
    Route::get('cities', [AddressController::class, 'cities_index'])->name('cities.index');
    Route::post('cities/edit', [AddressController::class, 'cities_edit'])->name('cities.edit');
    Route::post('cities/store', [AddressController::class, 'cities_store'])->name('cities.store');
    Route::post('get-all-cities', [AddressController::class, 'get_ajax_cities'])->name('ajax_cities');
    Route::post('cities/destory', [AddressController::class, 'cities_destory'])->name('cities.destory');
    Route::post('cities/status', [AddressController::class, 'cities_status'])->name('cities.status');
    Route::post('cities/update', [AddressController::class, 'cities_update'])->name('cities.update');

    //AddressController Country
    Route::get('countries', [AddressController::class, 'countries_index'])->name('countries.index');
    Route::post('countries/edit', [AddressController::class, 'countries_edit'])->name('countries.edit');
    Route::post('countries/store', [AddressController::class, 'countries_store'])->name('countries.store');
    Route::post('get-all-countries', [AddressController::class, 'get_ajax_countries'])->name('ajax_countries');
    Route::post('countries/destory', [AddressController::class, 'countries_destory'])->name('countries.destory');
    Route::post('countries/status', [AddressController::class, 'countries_status'])->name('countries.status');
    Route::post('countries/update', [AddressController::class, 'countries_update'])->name('countries.update');


    //AddressController States
    Route::get('states', [AddressController::class, 'states_index'])->name('states.index');
    Route::post('states/edit', [AddressController::class, 'states_edit'])->name('states.edit');
    Route::post('states/store', [AddressController::class, 'states_store'])->name('states.store');
    Route::post('get-all-states', [AddressController::class, 'get_ajax_states'])->name('ajax_states');
    Route::post('states/destory', [AddressController::class, 'states_destory'])->name('states.destory');
    Route::post('states/status', [AddressController::class, 'states_status'])->name('states.status');
    Route::post('states/update', [AddressController::class, 'states_update'])->name('states.update');

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
    Route::post('program-session/edit', [ProgramSessionController::class, 'edit'])->name('program_session.edit');
    Route::post('program-session/store', [ProgramSessionController::class, 'store'])->name('program_session.store');
    Route::post('get-all-program_session', [ProgramSessionController::class, 'get_ajax_program_session'])->name('ajax_program_session');
    Route::post('program-session/destory', [ProgramSessionController::class, 'destory'])->name('program_session.destory');
    Route::post('program-session/status', [ProgramSessionController::class, 'status'])->name('program_session.status');
    Route::post('program-session/update', [ProgramSessionController::class, 'update'])->name('program_session.update');


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

    //Student 
    Route::get('students', [StudentController::class, 'index'])->name('students.index');
    Route::post('students/edit', [StudentController::class, 'edit'])->name('students.edit');
    Route::post('students/store', [StudentController::class, 'store'])->name('students.store');
    Route::post('get-all-students', [StudentController::class, 'get_ajax_students'])->name('ajax_students');
    Route::post('students/destory', [StudentController::class, 'destory'])->name('students.destory');
    Route::post('students/status', [StudentController::class, 'status'])->name('students.status');
    Route::post('students/update', [StudentController::class, 'update'])->name('students.update');


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


