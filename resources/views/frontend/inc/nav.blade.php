<header class="header">
    <div class="top-bar">
    <div class="container">
    <div class="row">
    <div class="col-lg-6 col-sm-12 col-xs-12">
        @if(dsld_get_setting('site_header_marguee') != '')
            <div class="top-marquee bg-site roboto">
                <marquee>{{ dsld_get_setting('site_header_marguee') }}</marquee>
            </div>
        @endif
        <div class="social-icon">
            <ul class="list-style mb-0">
            @if(dsld_get_setting('social_link_url') != '' )
                @foreach(json_decode(dsld_get_setting('social_link_url'), true) as $key => $value)
                    @php
                        $url = json_decode(dsld_get_setting('social_link_url'), true)[$key];
                        $name = json_decode(dsld_get_setting('social_link_name'), true)[$key];
                    @endphp
                    @if($name == 'fb')
                        <li><a href="{{ $url }}" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                    @endif
                    @if($name == 'li')
                        <li><a href="{{ $url }}"  target="_blank" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                    @endif
                    @if($name == 'In')
                        <li><a href="{{ $url }}"  target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
                    @endif
                    @if($name == 'yt')
                        <li><a href="{{ $url }}" target="_blank"  class="youtube"><i class="fab fa-youtube"></i></a>
                    @endif
                @endforeach
             @endif
            </ul>
        </div>
    </div><!-- col -->

        <div class="col-lg-6 col-sm-6 col-xs-12">
    <div class="header-info text-right">
    <ul class="list-style mb-0">
        <li>
            @if(dsld_get_setting('site_header_phone_number') != '')
            <a href="tel:{{ dsld_get_setting('site_header_phone_number') }}">
                <span class="info-icon"><i class="fas fa-phone"></i> </span>
                <p><strong class="roboto">Call Us</strong>{{ dsld_get_setting('site_header_phone_number') }}
                </p>
            </a>
            @endif
        </li>
        <li>
            @if(dsld_get_setting('site_header_address') != '')
            <a href="javascript:void(0)">
                <span class="info-icon"><i class="fas fa-map-marker-alt"></i></span>
                @php $str = dsld_get_setting('site_header_address'); @endphp
                <p><?php echo htmlspecialchars_decode($str); ?></p>
            </a>
            @endif
        </li>
    </ul>
    </div>
    </div><!-- col -->
    </div>

    </div>
    </div>
    <div class="main-header">
    <div class="container">
    <div class="main-bar">
    <div class="bottom-line"></div>
    <div class="row">
    <div class="col-lg-3 col-sm-3 col-xs-6">
        <div class="site-logo">
            @if(dsld_get_setting('site_logo') > 0)
                <a href="{{ route('home') }}"><img src="{{ dsld_uploaded_asset(dsld_get_setting('site_logo')) }}"  alt="{{ dsld_upload_file_title(dsld_get_setting('site_logo')) }}"></a>
            @else
                <a href="{{ route('home') }}"><img src="{{ dsld_static_asset('backend/assets/images/logo.svg') }}" alt='{{ env("APP_NAME", "Backend New" ) }}'></a>
            @endif
        </div>
    </div><!-- col -->
    <div class="col-lg-9 col-sm-9 col-xs-6">
        <nav class="nav">
        <ul>  
        @if($header_menu != '')
            @foreach($header_menu as $key => $value)
                @if($value->level == 1)

                <li class="">
                    <a href="{{ $value->url != '' ? $value->url : '#' }}"  @if(json_decode($value->setting, true)['target'] !='0') target="_blank" @endif  @if(json_decode($value->setting, true)['class'] !='null') class="{{ json_decode($value->setting, true)['class'] }}" @endif>{{ $value->name != ''? $value->name : 'Title Empty' }}</a>
                      
                    @php
                        $header_menu2 = App\Models\Menu::where('parent', $value->id)->where('status', 0)->where('level', 2)->orderBy('order', 'asc')->get();
                        
                    @endphp
                    @if(is_array($header_menu2) || count($header_menu2) > 0)
                        <ul>
                            @foreach($header_menu2 as $key2 => $value2)
                            
                            <li><a href="{{ $value2->url != '' ? $value2->url : '#' }}">{{ $value2->name != ''? $value2->name : 'Title Empty' }}</a></li>
                        
                            @endforeach
                        </ul>
                    @endif
                </li>
                @endif
            @endforeach
        @endif
        </ul>
        </nav>
    </div><!-- col -->
    </div>
    </div>
    </div>
    </div>
</header>