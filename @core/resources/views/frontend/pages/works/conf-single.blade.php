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
                                <div style="position: absolute;
                                z-index: 1;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                width: 100%;
                                height: 100%;
                                gap: 5px;
                                ">
                               
                                    <p class="font-italic fs-2 mb-3" data-zanim-xs="{&quot;animation&quot;:&quot;slide-left&quot;,&quot;delay&quot;:0.8,&quot;duration&quot;:0.5}" style="opacity: 0; transform: matrix(1, 0, 0, 1, 70, 0);">Theme: "next-generation vaccines treatment and diagnostics that save lives"</p>
                                    <h3 class="text-uppercase text-white font-weight-bold ls-1" data-zanim-xs="{&quot;animation&quot;:&quot;slide-right&quot;,&quot;delay&quot;:0.6,&quot;duration&quot;:0.5}" style="opacity: 0; transform: matrix(1, 0, 0, 1, -70, 0);">Vaccines Summit <span style="
                    color: #FC08E7;">- 2022</span></h3>
                                    <p class="lead text-sans-serif ls font-weight-extra-light mt-5" data-zanim-xs="{&quot;animation&quot;:&quot;zoom-in&quot;,&quot;delay&quot;:0.8,&quot;duration&quot;:0.5}" style="filter: blur(5px); opacity: 0; transform: matrix(0.9, 0, 0, 0.9, 0, 0);">Sheraton Reston Hotel,
                Reston, VA<br>October 11-13, 2022</p><!--<a class="btn btn-danger btn-lg mt-3" href="#price" data-fancyscroll="data-fancyscroll" data-zanim-xs='{"animation":"zoom-in","delay":0.8,"duration":0.5}' data-zanim-trigger="scroll">get your pass now !</a> <a class="btn btn-danger btn-lg mt-3" href="abstract-submission" data-fancyscroll="data-fancyscroll" data-zanim-xs='{"animation":"zoom-in","delay":0.8,"duration":0.5}' data-zanim-trigger="scroll">Submit Abstract</a>--> <a class="btn btn-danger btn-lg mt-3" href="assets/pdfs/Final-Program-2022.pdf" target="_blank" data-fancyscroll="data-fancyscroll" data-zanim-xs="{&quot;animation&quot;:&quot;zoom-in&quot;,&quot;delay&quot;:0.8,&quot;duration&quot;:0.5}" style="filter: blur(5px); opacity: 0; transform: matrix(0.9, 0, 0, 0.9, 0, 0);">Final Program-2022</a> <a class="btn btn-danger btn-lg mt-3" href="presentation-submission" target="_blank" data-fancyscroll="data-fancyscroll" data-zanim-xs="{&quot;animation&quot;:&quot;zoom-in&quot;,&quot;delay&quot;:0.8,&quot;duration&quot;:0.5}" style="filter: blur(5px); opacity: 0; transform: matrix(0.9, 0, 0, 0.9, 0, 0);">Submit Presentation</a>
                                  </div>

                               <div style="position: absolute;
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
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="portfolio-details-item">
                        <div class="thumb">
                            {!! render_image_markup_by_attachment_id($work_item->image, '', 'large') !!}
                        </div>
                        <div class="post-description">
                            {!! $work_item->description !!}
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="project-widget">
                        <div class="project-info-item">
                            <h4 class="title">
                                {{ get_static_option('work_single_page_' . $user_select_lang_slug . '_sidebar_title') }}</h4>
                            <ul>
                                <li>{{ get_static_option('work_single_page_' . $user_select_lang_slug . '_start_date_text') }}
                                    <span class="right">{{ $work_item->start_date }} </span></li>
                                <li>{{ get_static_option('work_single_page_' . $user_select_lang_slug . '_end_date_text') }}
                                    <span class="right"> {{ $work_item->end_date }}</span></li>
                                <li>{{ get_static_option('work_single_page_' . $user_select_lang_slug . '_clients_text') }}
                                    <span class="right">{{ $work_item->clients }} </span></li>
                                <li>{{ get_static_option('work_single_page_' . $user_select_lang_slug . '_category_text') }}
                                    <span class="right">
                                        @php
                                            $all_cat_of_post = get_work_category_by_id($work_item->id);
                                        @endphp
                                        @if (!empty($all_cat_of_post))
                                            @foreach ($all_cat_of_post as $key => $work_cat)
                                                <a
                                                    href="{{ route('frontend.works.category', ['id' => $key, 'any' => Str::slug($work_cat)]) }}">{{ $work_cat }}</a>
                                            @endforeach
                                        @endif
                                    </span>
                                </li>
                            </ul>
                            <div class="share-area">
                                <h4 class="title">
                                    {{ get_static_option('work_single_page_' . $user_select_lang_slug . '_share_text') }}</h4>
                                <ul class="share-icon">
                                    {!! single_post_share(
                                        route('frontend.work.single', $work_item->slug),
                                        $work_item->title,
                                        get_attachment_image_url_by_id($work_item->image),
                                    ) !!}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @if (!empty($related_works))
                    <div class="col-lg-12">
                        <div class="related-work-area padding-top-100">
                            <div class="section-title margin-bottom-55">
                                <h2 class="title">
                                    {{ get_static_option('work_single_page_' . $user_select_lang_slug . '_related_work_title') }}
                                </h2>
                            </div>
                            <div class="our-work-carousel">
                                @foreach ($related_works as $data)
                                    <div class="single-work-item">
                                        <div class="thumb">
                                            {!! render_image_markup_by_attachment_id($data->image, '', 'grid') !!}
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><a href="{{ route('frontend.work.single', $data->slug) }}">
                                                    {{ $data->title }}</a></h4>
                                            <div class="cats">
                                                @php
                                                    $all_cat_of_post = get_work_category_by_id($data->id);
                                                @endphp
                                                @foreach ($all_cat_of_post as $key => $work_cat)
                                                    <a
                                                        href="{{ route('frontend.works.category', ['id' => $key, 'any' => Str::slug($work_cat)]) }}">{{ $work_cat }}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
