<!-- Right Icon menu Sidebar -->
<div class="navbar-right">
    <ul class="navbar-nav">
        <button type="submit" class="btn btn-primary rv-btn-toggle"><i class="zmdi zmdi-settings"></i></button>
        <li><a href="{{ route('home') }}" target="_blank" title="Add Media"><i class="zmdi zmdi-hc-fw"></i></a></li>

        @if(dsld_have_user_permission('media_add') == 1)  
        <li><a href="javascript:void(0);" data-toggle="modal" data-target="#DSLDImageUpload" title="Add Media"><i class="zmdi zmdi-camera"></i></a></li>
        @endif

        <li><a href="javascript:void(0);" title="Clear Cache" onclick="clear_cache()"><i class="zmdi zmdi-hc-fw"></i></a></li>

        @if(dsld_have_user_permission('backend-setting') == 1)  
        <li>
            <a href="{{ route('backend.setting') }}"  title="Setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>
        </li>
        @endif

        <li>
            <a href="javascript::void(0);" class="mega-menu" title="Sign Out" onclick="logout()"><i class="zmdi zmdi-power"></i></a>
        </li>
        
    </ul>
</div>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="{{ route('backend.admin') }}">
            @if(dsld_get_setting('dashboard_logo') > 0)
                <img src="{{ dsld_uploaded_asset(dsld_get_setting('dashboard_logo')) }}"  alt="{{ dsld_upload_file_title(dsld_get_setting('dashboard_logo')) }}" width="25">
            @else
                <img src="{{ dsld_static_asset('backend/assets/images/logo.svg') }}" width="25" alt='{{ env("APP_NAME", "Backend New" ) }}'>
            @endif
        <span class="m-l-10">{{ dsld_get_setting('dashboard_title') }}</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">

                    @if(Auth::user()->avatar_original !='')
                        <a class="image" href="{{ route('profiles.index') }}">
                            <img src="{{ dsld_uploaded_asset(Auth::user()->avatar_original) }}" class="rounded-circle shadow mr-2" alt="profile-image" width="35">
                        </a>
                    @else
                        <img src="{{ dsld_static_asset('backend/assets/images/profile_av.jpg') }}" class="rounded-circle shadow  mr-2" alt="profile-image" width="35">
                    @endif
                    <div class="detail">
                        <h4>{{ Auth::user()->name }}</h4>
                        <small>{{ Auth::user()->id == 1 ? 'Super Admin' : Auth::user()->roles->name }}</small>                        
                    </div>
                </div>
            </li>
            <li class="{{ dsld_is_route_active(['backend.admin'], 'active open') }}"><a href="{{ route('backend.admin') }}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>

            @if(dsld_have_user_permission('media'))
            <li class="{{ dsld_is_route_active(['media.library.admin'], 'active open') }}"><a href="{{ route('media.library.admin') }}"><i class="zmdi zmdi-folder"></i><span>Media</span></a></li>
            @endif

            @if(dsld_have_user_permission('institute') == 1 || dsld_have_user_permission('institute') == 1)
            <li class="{{ dsld_is_route_active(['institutes.index', 'classes.index', 'institute_types.index', 'program_session.index', 'program_semesters.index', 'program.index', 'departments.index', 'faculty.index', 'faculty_type.index'], 'active open') }}"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-hc-fw"></i><span>Organization</span></a>
                <ul class="ml-menu">
                    
                    @if(dsld_have_user_permission('institute') == 1 || dsld_have_user_permission('institute-types') == 1)
                        <li class="{{ dsld_is_route_active(['institutes.index', 'institute_types.index'], 'active open') }} level-2"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-hc-fw"></i> <span>Institutes</span></a>
                            <ul class="ml-menu">
                                @if(dsld_have_user_permission('institute') == 1)
                                <li class="{{ dsld_is_route_active(['institutes.index']) }}"><a href="{{ route('institutes.index') }}">All Institutes</a>
                                
                                </li>
                                @endif
                                @if(dsld_have_user_permission('institute-types') == 1)
                                <li class="{{ dsld_is_route_active(['institute_types.index']) }}"><a href="{{ route('institute_types.index') }}">Type</a>
                                
                                </li>
                                @endif  
                            </ul>
                        </li> 
                    @endif 

                    @if(dsld_have_user_permission('class-room') == 1)
                        <li class="{{ dsld_is_route_active(['classes.index'], 'active open') }} level-2"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-hc-fw"></i> <span>Classes</span></a>
                            <ul class="ml-menu">

                                @if(dsld_have_user_permission('class-room') == 1)
                                    <li class="{{ dsld_is_route_active(['classes.index']) }}"><a href="{{ route('classes.index') }}">All Classes</a>
                                </li>
                                @endif
                                 
                            </ul>
                        </li> 
                    @endif 



                    @if(dsld_have_user_permission('faculty') == 1 || dsld_have_user_permission('faculty-type') == 1)
                        <li class="{{ dsld_is_route_active(['faculty.index', 'faculty_type.index'], 'active open') }} level-2"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-hc-fw"></i> <span>Faculty</span></a>
                            <ul class="ml-menu">

                                @if(dsld_have_user_permission('faculty') == 1)
                                <li class="{{ dsld_is_route_active(['faculty.index']) }}"><a href="{{ route('faculty.index') }}">All Faculties</a></li>
                                @endif

                                @if(dsld_have_user_permission('faculty-type') == 1)
                                <li class="{{ dsld_is_route_active(['faculty_type.index']) }}"><a href="{{ route('faculty_type.index') }}">Type</a></li>
                                @endif 
  
                            </ul>
                        </li> 
                    @endif
                    
                </ul>
            </li> 
            @endif

            @if(dsld_have_user_permission('class-room') == 1)
                <li class="{{ dsld_is_route_active(['departments.index'], 'active open') }} level-2"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-hc-fw"></i> <span>Departments</span></a>
                    <ul class="ml-menu">

                        @if(dsld_have_user_permission('class-room') == 1)
                            <li class="{{ dsld_is_route_active(['departments.index']) }}"><a href="{{ route('departments.index') }}">Lists</a>
                            </li>
                        @endif
                            
                    </ul>
                </li> 
            @endif 

            @if(dsld_have_user_permission('programs') == 1 || dsld_have_user_permission('programs') == 1)
                <li class="{{ dsld_is_route_active(['program_session.index', 'program_semesters.index', 'programs.index'], 'active open') }}"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-hc-fw"></i> <span>Program</span></a>
                    <ul class="ml-menu">
                        @if(dsld_have_user_permission('programs') == 1)
                        <li class="{{ dsld_is_route_active(['program.index']) }}"><a href="{{ route('program.index') }}">All Programs</a>
                        
                        </li>
                        @endif
                        @if(dsld_have_user_permission('institute') == 1)
                        <li class="{{ dsld_is_route_active(['program_session.index']) }}"><a href="{{ route('program_session.index') }}">Sessions</a>
                        
                        </li>
                        @endif
                        @if(dsld_have_user_permission('institute-types') == 1)
                        <li class="{{ dsld_is_route_active(['program_semesters.index']) }}"><a href="{{ route('program_semesters.index') }}">Semesters</a></li>
                        @endif  
                    </ul>
                </li> 
            @endif 


            @if(dsld_have_user_permission('student') == 1 || dsld_have_user_permission('student') == 1)
            <li class="{{ dsld_is_route_active(['students.index'], 'active open') }}"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-hc-fw"></i> <span>Students</span></a>
                <ul class="ml-menu">
                    
                    
                    @if(dsld_have_user_permission('students') == 1)
                        <li class="{{ dsld_is_route_active(['students.index']) }}"><a href="{{ route('students.index') }}">All Students</a></li>
                    @endif

                </ul>
            </li> 
            @endif

            @if(dsld_have_user_permission('library') == 1 || dsld_have_user_permission('library') == 1)
            <li class="{{ dsld_is_route_active(['library.books.index', 'library.categories.index','library.authors.index','library.publisher.index', 'library.issues.index', 'library.setups.index'], 'active open') }}"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-hc-fw"></i> <span>Library</span></a>
                <ul class="ml-menu">
                    
                    @if(dsld_have_user_permission('library-issue') == 1)
                        <li class="{{ dsld_is_route_active(['library.issues.index']) }}"><a href="{{ route('library.issues.index') }}">Issues List</a></li>
                    @endif
                    
                    @if(dsld_have_user_permission('library-book') == 1)
       
                        <li class="level-2 {{ dsld_is_route_active(['library.books.index', 'library.books.index'], 'active open') }}"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-hc-fw"></i><span>Books List</span></a>
                        <ul class="ml-menu">
                            <li class="{{ dsld_is_route_active(['library.books.index']) }}"><a href="{{ route('library.books.index') }}">All Books</a></li>

                            @if(dsld_have_user_permission('library-category') == 1)
                                <li class="{{ dsld_is_route_active(['library.categories.index']) }}"><a href="{{ route('library.categories.index') }}">Category List</a></li>
                            @endif

                            @if(dsld_have_user_permission('library-author') == 1)
                                <li class="{{ dsld_is_route_active(['library.authors.index']) }}"><a href="{{ route('library.authors.index') }}">Author List</a></li>
                            @endif

                            @if(dsld_have_user_permission('library-publisher') == 1)
                                <li class="{{ dsld_is_route_active(['library.publisher.index']) }}"><a href="{{ route('library.publisher.index') }}">Publisher List</a></li>
                            @endif
                        </ul>
                    </li> 
                    @endif

                    @if(dsld_have_user_permission('library-setup') == 1)
                        <li class="{{ dsld_is_route_active(['library.setups.index']) }}"><a href="{{ route('library.setups.index') }}">Library Setup</a></li>
                    @endif


                </ul>
            </li> 
            @endif
            
            @if(dsld_have_user_permission('backend-setting') || dsld_have_user_permission('frontend-setting'))  
            <li class="{{ dsld_is_route_active(['backend.setting', 'backend.header', 'backend.footer', 'frontend.setting'], 'active open') }}"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Settings</span></a>
                <ul class="ml-menu">
                    
                    @if(dsld_have_user_permission('backend-setting'))  
                    <li class="{{ dsld_is_route_active(['backend.setting']) }}"><a href="{{ route('backend.setting') }}">Backend</a></li>
                    @endif
                    
                    @if(dsld_have_user_permission('frontend-setting'))
                    <li class="{{ dsld_is_route_active(['frontend.setting']) }}"><a href="{{ route('frontend.setting') }}">Frontend</a></li>
                    @endif

                    @if(dsld_have_user_permission('menus')) 
                        <li class="{{ dsld_is_route_active(['menus.index', 'menus.edit']) }}"><a href="{{ route('menus.index') }}">All Menus</a></li>
                    @endif
                </ul>
            </li> 
            @endif
            
            <li><a href="javascript:void(0);" class="menu-toggle {{ dsld_is_route_active(['contact_form.index', 'contact_form.leads','posts.index', 'posts.edit', 'posts.store', 'posts_cat.index', 'posts_cat.store', 'posts_cat.edit', 'pages.index', 'pages.edit', 'pages.store', 'pages_section.index',   'pages_section_fields.edit','office.index',   'office.edit', 'history.timeline.index','cities.index','states.index','countries.index', 'program.index'], 'toggled') }}"><i class="zmdi zmdi-hc-fw"></i><span> Website</span></a>
                <ul class="ml-menu">
                @if(dsld_have_user_permission('contact-forms') == 1 || dsld_have_user_permission('contact-form-leads') == 1)  
                    <li class="level-2 {{ dsld_is_route_active(['contact_form.index', 'contact_form.leads'], 'active open') }}"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-hc-fw"></i><span>Forms</span></a>
                        <ul class="ml-menu">
                            @if(dsld_have_user_permission('contact-forms') == 1)
                            <li class="{{ dsld_is_route_active(['contact_form.index', 'contact_form_fields.edit', 'contact_form_fields.update']) }}"><a href="{{ route('contact_form.index') }}">All Forms</a></li>
                            @endif
                            @if(dsld_have_user_permission('contact-form-leads') == 1)
                            <li class="{{ dsld_is_route_active(['contact_form.leads']) }}"><a href="{{ route('contact_form.leads') }}">All Leads</a></li>
                            @endif
                        </ul>
                    </li> 
                    @endif

                    @if(dsld_have_user_permission('posts'))
                        <li class="level-2 {{ dsld_is_route_active(['posts.index', 'posts.edit', 'posts.store', 'posts_cat.index', 'posts_cat.store', 'posts_cat.edit'], 'active open') }}"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-hc-fw"></i><span>Posts</span></a>
                            <ul class="ml-menu">
                                <li class="{{ dsld_is_route_active(['posts.index', 'posts.edit']) }}"><a href="{{ route('posts.index') }}">All Posts</a></li>
                            </ul>
                        </li> 
                        @endif
                        @if(dsld_have_user_permission('pages') || dsld_have_user_permission('sections') || dsld_have_user_permission('timelines') || dsld_have_user_permission('office'))
                        <li class="level-2 {{ dsld_is_route_active(['pages.index', 'pages.edit', 'pages.store', 'pages_section.index',   'pages_section_fields.edit','office.index',   'office.edit', 'history.timeline.index', 'program.index'], 'active open') }}"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Pages</span></a>
                            <ul class="ml-menu">
                                @if(dsld_have_user_permission('pages'))
                                <li class="{{ dsld_is_route_active(['pages.index', 'pages.edit']) }}"><a href="{{ route('pages.index') }}">All Pages</a>
                                
                                </li>
                                @endif
                                @if(dsld_have_user_permission('sections'))
                                <li class="{{ dsld_is_route_active(['pages_section.index',   'pages_section_fields.edit']) }}"><a href="{{ route('pages_section.index') }}">All Sections</a></li>
                                @endif 
                                @if(dsld_have_user_permission('testimonials'))
                                <li class="{{ dsld_is_route_active(['testimonials.index',   'testimonials.edit']) }}"><a href="{{ route('testimonials.index') }}">Testimonials</a></li>
                                @endif 
                                @if(dsld_have_user_permission('newsevents'))
                                <li class="{{ dsld_is_route_active(['news_event.index',   'news_event.edit']) }}"><a href="{{ route('news_event.index') }}">News & Event</a></li>
                                @endif  
                            </ul>
                        </li> 
                    @endif
                    
                    @if(dsld_have_user_permission('city') || dsld_have_user_permission('state') || dsld_have_user_permission('country'))
                        <li class="level-2 {{ dsld_is_route_active(['cities.index','states.index','countries.index'], 'active open') }}"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-hc-fw"></i> <span>Address</span></a>
                            <ul class="ml-menu">
                                <li class="{{ dsld_is_route_active(['cities.index']) }}"><a href="{{ route('cities.index') }}">City</a></li>
                                <li class="{{ dsld_is_route_active(['states.index']) }}"><a href="{{ route('states.index') }}">State</a></li>
                                <li class="{{ dsld_is_route_active(['countries.index']) }}"><a href="{{ route('countries.index') }}">Country</a></li>
                            </ul>
                        </li> 
                    @endif   
                </ul>
            </li>

            @if(dsld_have_user_permission('users'))
            <li class="{{ dsld_is_route_active(['users.index', 'users.edit', 'users.store'], 'active open') }}"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-hc-fw"></i><span>Users</span></a>
                <ul class="ml-menu">
                    <li class="{{ dsld_is_route_active(['users.index', 'users.edit']) }}"><a href="{{ route('users.index') }}">All Users</a></li>
                </ul>
            </li>   
            @endif

            @if(dsld_have_user_permission('roles') || dsld_have_user_permission('permissions'))
                <li  class="{{ dsld_is_route_active(['roles.index', 'roles.edit', 'roles.store', 'permissions.index', 'permissions.edit', 'permissions.store'], 'active open') }}"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-hc-fw"></i><span>Roles</span></a>
                    <ul class="ml-menu">
                        
                        @if(dsld_have_user_permission('roles'))
                        <li class="{{ dsld_is_route_active(['roles.index', 'roles.edit']) }}"><a href="{{ route('roles.index') }}">All Roles</a></li>
                        @endif
                        
                        @if(dsld_have_user_permission('permissions'))
                        <li class="{{ dsld_is_route_active(['permissions.index', 'permissions.edit']) }}"><a href="{{ route('permissions.index') }}">All Permissions</a></li>
                        @endif

                    </ul>
                </li>  
            @endif
            <li class="{{ dsld_is_route_active(['profiles.index'], 'active open') }}"><a href="{{ route('profiles.index') }}"><i class="zmdi zmdi-account"></i><span>Profile</span></a></li> 
        </ul>
    </div>
</aside>

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs sm">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat"><i class="zmdi zmdi-comments"></i></a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="setting">
            <div class="slim_scroll">
                <div class="card">
                    <h6>Theme Option</h6>
                    <div class="light_dark">
                        <div class="radio">
                            <input type="radio" name="radio1" id="lighttheme" value="light" checked="">
                            <label for="lighttheme">Light Mode</label>
                        </div>
                        <div class="radio mb-0">
                            <input type="radio" name="radio1" id="darktheme" value="dark">
                            <label for="darktheme">Dark Mode</label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h6>Color Skins</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple"><div class="purple"></div></li>
                        <li data-theme="blue"><div class="blue"></div></li>
                        <li data-theme="cyan"><div class="cyan"></div></li>
                        <li data-theme="green"><div class="green"></div></li>
                        <li data-theme="orange"><div class="orange"></div></li>
                        <li data-theme="blush" class="active"><div class="blush"></div></li>
                    </ul>                                        
                </div>
                <div class="card">
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <div class="checkbox rtl_support">
                                <input id="checkbox1" type="checkbox" value="rtl_view">
                                <label for="checkbox1">RTL Version</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox ms_bar">
                                <input id="checkbox2" type="checkbox" value="mini_active">
                                <label for="checkbox2">Mini Sidebar</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox3" type="checkbox" checked="">
                                <label for="checkbox3">Notifications</label>
                            </div>                        
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox4" type="checkbox">
                                <label for="checkbox4">Auto Updates</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox5" type="checkbox" checked="">
                                <label for="checkbox5">Offline</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox6" type="checkbox" checked="">
                                <label for="checkbox6">Location Permission</label>
                            </div>
                        </li>
                    </ul>
                </div>                
            </div>                
        </div>       
        <div class="tab-pane right_chat" id="chat">
            <div class="slim_scroll">
                <div class="card">
                    <ul class="list-unstyled">
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="{{ dsld_static_asset('backend/assets/images/xs/avatar4.jpg') }}" alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia <small class="float-right">11:00AM</small></span>
                                        <span class="message">There are many variations of passages of Lorem Ipsum available</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="{{ dsld_static_asset('backend/assets/images/xs/avatar5.jpg') }}" alt="">
                                    <div class="media-body">
                                        <span class="name">Grayson <small class="float-right">11:30AM</small></span>
                                        <span class="message">All the Lorem Ipsum generators on the</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="{{ dsld_static_asset('backend/images/xs/avatar2.jpg') }}" alt="">
                                    <div class="media-body">
                                        <span class="name">Isabella <small class="float-right">11:31AM</small></span>
                                        <span class="message">Contrary to popular belief, Lorem Ipsum</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="me">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="{{ dsld_static_asset('backend/assets/images/xs/avatar1.jpg') }}" alt="">
                                    <div class="media-body">
                                        <span class="name">John <small class="float-right">05:00PM</small></span>
                                        <span class="message">It is a long established fact that a reader</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="{{ dsld_static_asset('backend/assets/images/xs/avatar3.jpg') }}" alt="">
                                    <div class="media-body">
                                        <span class="name">Alexander <small class="float-right">06:08PM</small></span>
                                        <span class="message">Richard McClintock, a Latin professor</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>
