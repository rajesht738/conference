@extends('frontend.frontend-confpage-master')
@php $img_url = '';@endphp

@section('og-meta')
    <meta property="og:url" content="{{ route('frontend.work.single', $work_item->slug) }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $work_item->title }}" />
    {!! render_og_meta_image_by_attachment_id($work_item->image) !!}
@endsection
@section('site-title')
    {{ $work_item->title }} - {{ get_static_option('work_page_' . $user_select_lang_slug . '_name') }}
@endsection
@section('page-title')
    {{ get_static_option('work_page_' . $user_select_lang_slug . '_name') }}: {{ $work_item->title }}
@endsection
@section('breadcrumb')
    <li>{{ $work_item->title }}</li>
@endsection
@section('meta-tags')
    <meta name="description" content="{{ $work_item->meta_tags }}">
    <meta name="tags" content="{{ $work_item->meta_description }}">
@endsection
@section('edit_link')
    <li><a target="_blank" href="{{ route('admin.work.edit', $work_item->id) }}"><i class="far fa-edit"></i>
            {{ __('Edit Works') }}</a></li>
@endsection
@section('slider')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            @php $gallery_item = $work_item->gallery ? explode('|',$work_item->gallery) : []; @endphp
            @if (!empty($gallery_item))
                <div class="case-study-gallery-wrapper margin-bottom-30 margin-top-40">
                    <div class="case-study-gallery-carousel owl-carousel">

                        @foreach ($gallery_item as $gall)
                            <div class="single-gallery-item">
                                <div id="slideButton"
                                    style="position: absolute;
                                z-index: 1;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                width: 100%;
                                height: 100%;
                                gap: 5px;
                                ">
                                    <button class="btn btn-boxed btn-primary">Final Programm 2022</button>
                                    <button class="btn btn-boxed btn-primary">Submit Abstract</button>
                                </div>
                                {!! render_image_markup_by_attachment_id($gall) !!}
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
@section('content')
    <div class="work-details-content-area padding-120">
        <div class="row">
            <div class="col-lg-12"
                style="border-top: 5px solid #ffffa6;
            border-bottom: 5px solid #f5f5bb;padding-left: 20%;background: #054a33;">
                {!! $work_item->sponsherships !!}
            </div>
        </div>

        <div class="row" style="background: #054a33;">
            <div class="container">
                <div class="row" style="padding-top: 75px;">
                    @foreach ($all_team_members as $data)
                        <div class="col-lg-4 col-md-6">
                            <div class="row" style="padding: 12px;">
                                <div class="col-md-6">
                                    <div class="thumb">
                                        {!! render_image_markup_by_attachment_id($data->image, 'grid') !!}
                                        <div class="hover">
                                            <ul class="social-icon">
                                                @if (!empty($data->icon_one) && !empty($data->icon_one_url))
                                                    <li><a href="{{ $data->icon_one_url }}"><i
                                                                class="{{ $data->icon_one }}"></i></a></li>
                                                @endif
                                                @if (!empty($data->icon_two) && !empty($data->icon_two_url))
                                                    <li><a href="{{ $data->icon_two_url }}"><i
                                                                class="{{ $data->icon_two }}"></i></a></li>
                                                @endif
                                                @if (!empty($data->icon_three) && !empty($data->icon_three_url))
                                                    <li><a href="{{ $data->icon_three_url }}"><i
                                                                class="{{ $data->icon_three }}"></i></a></li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="content">
                                        <p class="name" style="font-size: 18px; color:white">{{ $data->name }}</p>
                                        <span class="post">{{ $data->designation }}</span>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="single-team-member-one margin-bottom-30 gray-bg">
                                    <div class="thumb">
                                        {!! render_image_markup_by_attachment_id($data->image,"grid") !!}
                                        <div class="hover">
                                            <ul class="social-icon">
                                                @if (!empty($data->icon_one) && !empty($data->icon_one_url))
                                                    <li><a href="{{$data->icon_one_url}}"><i class="{{$data->icon_one}}"></i></a></li>
                                                @endif
                                                @if (!empty($data->icon_two) && !empty($data->icon_two_url))
                                                    <li><a href="{{$data->icon_two_url}}"><i class="{{$data->icon_two}}"></i></a></li>
                                                @endif
                                                @if (!empty($data->icon_three) && !empty($data->icon_three_url))
                                                    <li><a href="{{$data->icon_three_url}}"><i class="{{$data->icon_three}}"></i></a></li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="name">{{$data->name}}</h4>
                                        <span class="post">{{$data->designation}}</span>
                                    </div>
                                </div> --}}
                        </div>
                    @endforeach
                    <div class="col-lg-12">
                        <div class="pagination-wrapper">
                            {{ $all_team_members->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container">
            <div class="row">
                <div class="col-lg-6" style="padding-right: 45px;">
                    <div class="portfolio-details-item">
                        <p style="font-size: 34px;
                       font-weight: 600; color: blue;">About us</p>
                        <div class="post-description">
                            {!! $work_item->description !!}
                        </div>

                    </div>
                </div>
                <div class="col-lg-6" style="padding-left: 45px;">

                    <p style="font-size: 34px;
                    font-weight: 600; color: blue;">Why do attend?</p>
                    <div class="post-description">
                       <p> Vaccines Summit-2022 delivers unlimited opportunities for making business deals, product
                        enhancements, cutting edge solutions for improving and elevating the company’s business and
                        partnership. The conference provides a unique platform for all the leading industry professionals,
                        institutional investors, capitalists, corporate investors and business development executives to
                        have private One-to-One meetings with elite business representatives which increase the chances of
                        marketing in this networking world.
                       </p>
                        <h2>Who can attend?</h2>
                        <ul>
                        <li>Government and non-government officials</li>
                            <li> C-Level Executives</li>
                                <li>Decision Makers</li>
                                    <li>Vice Presidents</li>
                                        <li> Drug developers</li>
                                            <li> Academician</li>
                                                <li>Researchers & Developers</li>
                                                    <li>Directors</li>
                                                        <li>Healthcare professionals</li>
                        </ul>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
