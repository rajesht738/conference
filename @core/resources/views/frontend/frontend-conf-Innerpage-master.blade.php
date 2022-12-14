@include('frontend.partials.conf-header')
{{-- @php $inner_page_navbar = get_static_option('site_header_type') ? get_static_option('site_header_type') : 'navbar'; @endphp --}}
 @php $inner_page_navbar = 'navbarconf-03' @endphp
 @include('frontend.partials.'.$inner_page_navbar)
<section class="breadcrumb-area breadcrumb-bg {{$inner_page_navbar}}"
@php
    $site_breadcrumb_bg = get_attachment_image_by_id($work_item->banner_image,"full",false);
@endphp
@if (!empty($site_breadcrumb_bg))
style="background-image: url({{$site_breadcrumb_bg['img_url']}});"
@endif
>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner">
                    <h1 class="page-title">@yield('page-title')</h1>
                    <ul class="page-list">
                        <li><a href="{{url('/')}}">{{__('Home')}}</a></li>
                        @if(request()->is(get_static_option('blog_page_slug').'/*') || request()->is(get_static_option('blog_page_slug').'-category'.'/*'))
                            <li><a href="{{url('/').'/'.get_static_option('blog_page_slug')}}">{{get_static_option('blog_page_' . $user_select_lang_slug . '_name')}}</a></li>
                        @elseif(request()->is(get_static_option('work_page_slug').'/*'))
                            <li><a href="{{url('/').'/'.get_static_option('work_page_slug')}}">{{get_static_option('work_page_' . $user_select_lang_slug . '_name')}}</a></li>
                        @elseif(request()->is(get_static_option('service_page_slug').'/*'))
                            <li><a href="{{url('/').'/'.get_static_option('service_page_slug')}}">{{get_static_option('service_page_' . $user_select_lang_slug . '_name')}}</a></li>
                        @elseif(request()->is(get_static_option('product_page_slug').'/*') || request()->is(get_static_option('product_page_slug').'-cart') || request()->is(get_static_option('product_page_slug').'-category'.'/*'))
                            <li><a href="{{url('/').'/'.get_static_option('product_page_slug')}}">{{get_static_option('product_page_' . $user_select_lang_slug . '_name')}}</a></li>
                        @elseif(request()->is(get_static_option('career_with_us_page_slug').'/*') || request()->is(get_static_option('career_with_us_page_slug').'-category'.'/*'))
                            <li><a href="{{url('/').'/'.get_static_option('career_with_us_page_slug')}}">{{get_static_option('career_with_us_page_' . $user_select_lang_slug . '_name')}}</a></li>
                        @elseif(request()->is(get_static_option('events_page_slug').'/*') || request()->is(get_static_option('events_page_slug')) || request()->is(get_static_option('events_page_slug').'-category'.'/*'))
                            <li><a href="{{url('/').'/'.get_static_option('events_page_slug')}}">{{get_static_option('events_page_' . $user_select_lang_slug . '_name')}}</a></li>
                        @elseif(request()->is(get_static_option('knowledgebase_page_slug').'/*') || request()->is(get_static_option('knowledgebase_page_slug').'-category'.'/*'))
                            <li><a href="{{url('/').'/'.get_static_option('knowledgebase_page_slug')}}">{{get_static_option('knowledgebase_page_' . $user_select_lang_slug . '_name')}}</a></li>
                        @elseif(request()->is(get_static_option('donation_page_slug').'/*') || request()->is(get_static_option('donation_page_slug')))
                            <li><a href="{{url('/').'/'.get_static_option('donation_page_slug')}}">{{get_static_option('donation_page_' . $user_select_lang_slug . '_name')}}</a></li>
                        @elseif(request()->is(get_static_option('gig_page_slug').'/*') || request()->is(get_static_option('gig_page_slug').'-search'))
                            <li><a href="{{url('/').'/'.get_static_option('gig_page_slug')}}">{{get_static_option('gig_page_' . $user_select_lang_slug . '_name')}}</a></li>
                        @endif
                        @yield('breadcrumb')
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@yield('content')

@include('frontend.partials.footer-conf')