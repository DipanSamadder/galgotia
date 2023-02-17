<section class="main-section follow-section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-12 align-self-center">
                <div class="follow-txt">
                    <div class="main-title wow fadeInUp  mb-5">
                        <h3 class="wow fadeInUp pb-2 title-tag-line">Follow Us</h3>
                        <p class="wow fadeInUp">{{ dsld_get_setting('site_footer_follow_us_content') }}</p>
                        </div>
                    </div>
                </div><!-- col -->
                <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="follow-us-icon">
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
        </div>
    </div>
</section>
<section class="main-section contact-section bg-site p-0">
    <div class="container-left">
        <div class="row mr-0">
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="contact-form white-placeholder pt-5 pb-5">
                    <h3 class="wow fadeInUp text-white">Customer Query</h3>
                   
                    @php include_form_by_id(45);  @endphp
                   
                </div>
            </div><!-- col -->
            <div class="col-lg-6 col-sm-6 col-xs-12 pr-0">
                <div class="cnt-info">
                    <div class="cnt-widget">
                        <h3 class="wow fadeInUp">Contact Us</h3>
                        <h6>{{ dsld_get_setting('site_footer_sub_heading') }}</h6>
                    <address class="address"> 
                        <span class="address-icon"> <i class="fas fa-map-marker-alt"></i> </span>
                        {{ dsld_get_setting('site_footer_address') }}
                    </address>
                    <address class="address">
                        <span class="address-icon"> <i class="fas fa-envelope"></i></span>
                        <a href="mailto:{{ dsld_get_setting('site_footer_email') }}" target="_blank">{{ dsld_get_setting('site_footer_email') }}</a> </address>
                    <address class="address">
                        <span class="address-icon"><i class="fas fa-phone"></i></span>
                        <a href="tel:{{ dsld_get_setting('site_footer_phone_number') }}">{{ dsld_get_setting('site_footer_phone_number') }}</a></address>
                    </div>
                    @php $gmap = dsld_get_setting('site_footer_google_map'); @endphp
                    @if($gmap != '')
                        <div class="map">
                            <iframe src="{{ $gmap }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    @endif
                </div>
            </div><!-- col -->
        </div>
    </div>
</section>
@php $copy_right = dsld_get_setting('site_footer_copyright'); @endphp
<div class="copyright">
    <div class="container text-center"><p class="mb-0"><?php echo htmlspecialchars_decode($copy_right); ?></p></div>
</div>
<a href="javascript:void(0);" id="scroll" class="back-to-top">
    <span><i class="lni lni-arrow-up"></i></span> 
</a>