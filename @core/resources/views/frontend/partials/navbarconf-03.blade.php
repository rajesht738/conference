@if (!empty(get_static_option('home_page_support_bar_section_status')))
    <div class="topbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="topbar-inner">
                        <div class="left-contnet">
                            <ul class="social-icon">
                                @foreach ($all_social_item as $data)
                                    <li><a href="{{ $data->url }}"><i class="{{ $data->icon }}"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="right-contnet">
                            <ul class="info-menu">
                                {!! render_menu_by_id($top_menu_id) !!}
                            </ul>
                            @if (!empty(get_static_option('hide_frontend_language_change_option')))
                                <div class="language_dropdown" id="languages_selector">
                                    <div class="selected-language">{{ get_language_name_by_slug(get_user_lang()) }} <i
                                            class="fas fa-caret-down"></i></div>
                                    <ul>
                                        @foreach ($all_language as $lang)
                                            <li data-value="{{ $lang->slug }}">{{ $lang->name }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

<div class="info-bar-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="info-bar-inner">
                    <div class="logo-wrapper desktop-logo">
                        <a href="{{ url('/') }}" class="logo">
                            {!! render_image_markup_by_attachment_id(get_static_option('site_logo')) !!}
                        </a>
                    </div>
                    <div class="right-content">
                        <ul class="info-items">
                            @foreach ($all_support_item as $data)
                                <li>
                                    <div class="single-info-item">
                                        <div class="icon">
                                            <i class="{{ $data->icon }}"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="title">{{ $data->title }}</h5>
                                            <span class="details">{{ $data->details }}</span>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                        <div class="request-quote">
                            <ul class="info-items">
                                <li>
                                    <div class="single-info-item">
                                        <div class="icon">
                                            <i class="xg-flaticon-home-3"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Office:</h5>
                                            <p class=""
                                                style="padding: 0px !important;margin: 0;font-size: 13px;font-weight: 700;color: gray;">
                                                98z St. Paul St, N1 7DZ, </p>
                                            <p class=""
                                            style="padding: 0px !important;margin: 0;font-size: 13px;font-weight: 700;color: gray;">
                                                Hackney, London, United Kingdom.</p>

                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="request-quote"> --}}
                        {{-- @php $quote_btn_url = !empty(get_static_option('navbar_button_custom_url_status')) ? get_static_option('navbar_button_custom_url') : route('frontend.request.quote'); @endphp --}}
                        {{-- <a href="{{$quote_btn_url}}" class="rq-btn">{{get_static_option('top_bar_'.$user_select_lang_slug.'_button_text')}}</a> --}}
                        {{-- </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-area navbar-expand-lg nav-style-01">
    <div class="container nav-container">
        <div class="responsive-mobile-menu">
            <div class="logo-wrapper mobile-logo">
                <a href="{{ url('/') }}" class="logo">
                    {!! render_image_markup_by_attachment_id(get_static_option('site_logo')) !!}
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
            <ul class="navbar-nav conf-navv">
                {{-- {!! render_menu_by_id($primary_menu_id) !!} --}}
                {{-- {!! render_menu_by_id(34) !!} --}}
               
                 
                <li>
                    <a href="{{  url('') }}/conferences/{{ Request::segment(2) }}/what-we-are"> What we are</a>
                </li>
               
                <li>
                    <a href="{{  url('') }}/conferences/{{ Request::segment(2) }}/ocm">OCM</a>
                </li>
               
                <li>
                    <a href="{{  url('') }}/conferences/{{ Request::segment(2) }}/speakers">Speakers</a>
                </li>
                <li>
                    <a href="{{  url('') }}/conferences/{{ Request::segment(2) }}/abstract-submission" target="_self">Abstract Submission</a>
                </li>
                <li>
                    <a href="{{  url('') }}/conferences/{{ Request::segment(2) }}/venue">Venue</a>
                </li>
                <li>
                    <a href="{{  url('') }}/conferences/{{ Request::segment(2) }}/sponshership">Sponsorship</a>
                </li>
                <li>
                    <a href="{{  url('') }}/conferences/{{ Request::segment(2) }}/#conf-topic">Guidelines</a>
                </li>
                <li>
                    {{-- <a href="{{  url('') }}/conferences/{{ Request::segment(2) }}/key-dates">Key Dates</a> --}}
                    <a href="https://biocoreopen.org/conferences/biotech2023/online_registration.php" target="_blank">Registration</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
