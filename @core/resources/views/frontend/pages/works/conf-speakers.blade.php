@extends('frontend.frontend-conf-Innerpage-master')
@section('site-title')
    {{get_static_option('team_page_'.$user_select_lang_slug.'_name')}}
@endsection
@section('page-title')
    {{get_static_option('team_page_'.$user_select_lang_slug.'_name')}}
@endsection
@section('breadcrumb')
    <li>{{get_static_option('team_page_'.$user_select_lang_slug.'_name')}}</li>
@endsection
@section('page-meta-data')
    <meta name="description" content="{{get_static_option('team_page_'.$user_select_lang_slug.'_meta_tags')}}">
    <meta name="tags" content="{{get_static_option('team_page_'.$user_select_lang_slug.'_meta_description')}}">
@endsection
@section('content')

    <div class="team-member-area gray-bg team-page padding-120 ">
        <div class="container">
            <div class="row">
                @foreach($all_team_members as $data)
                    <div class="col-lg-3 col-md-6">
                        <div class="single-team-member-one margin-bottom-30 gray-bg confTeam">
                            <div class="thumb confThumb">
                                {!! render_image_markup_by_attachment_id($data->image,"grid") !!}
                                <div class="hover">
                                    <ul class="social-icon">
                                        @if(!empty($data->icon_one) && !empty($data->icon_one_url))
                                            <li><a href="{{$data->icon_one_url}}"><i class="{{$data->icon_one}}"></i></a></li>
                                        @endif
                                        @if(!empty($data->icon_two) && !empty($data->icon_two_url))
                                            <li><a href="{{$data->icon_two_url}}"><i class="{{$data->icon_two}}"></i></a></li>
                                        @endif
                                        @if(!empty($data->icon_three) && !empty($data->icon_three_url))
                                            <li><a href="{{$data->icon_three_url}}"><i class="{{$data->icon_three}}"></i></a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="content confThumbContent">
                                <h4 class="name">{{$data->name}}</h4>
                                <span class="post">{{$data->designation}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-12">
                    <div class="pagination-wrapper">
                        {{$all_team_members->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <section id="footerTop">   --}}

        <div class="container">
        <div class="row" style="padding:25px;">
            <div class="col-md-9 px-2">
            	<h3 class="text-white mb-4">About Organizer</h3>
                  <div class="row">
                    <div class="col-md-12 px-2">
                      <div class="ui accordion ml-2">
                        <div class="title active text-400 font-weight-bold" style="display:none;"><i class="dropdown icon"></i> MEET THE EXPERTS</div>
                        <div class="content active ml-4 text-200 mt-0">
                          <p class="transition visible" style="display: block !important;">
                            {!! $work_item->description !!}</p>
                        
                        </div>
                        
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-3 px-0">
            	<div class="col-lg-12 mt-4 mt-lg-0 d-flex flex-column justify-content-between">
                  <div class="row mb-5">
                    <div class="col-md-12 col-md-6 border-400 pr-md-4">
                      <ul class="fa-ul mb-0">
                        <li class="font-weight-bold mb-2"><span class="fa-li pr-2"><svg class="svg-inline--fa fa-map fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="map" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M0 117.66v346.32c0 11.32 11.43 19.06 21.94 14.86L160 416V32L20.12 87.95A32.006 32.006 0 0 0 0 117.66zM192 416l192 64V96L192 32v384zM554.06 33.16L416 96v384l139.88-55.95A31.996 31.996 0 0 0 576 394.34V48.02c0-11.32-11.43-19.06-21.94-14.86z"></path></svg><!-- <i class="fas fa-map"></i> --></span>Biocore Meetings</li>
                        
                      </ul>
                      <ul class="fa-ul mb-0">
                        <li class="mb-2"><span class="fa-li pr-2"><svg class="svg-inline--fa fa-phone fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg><!-- <i class="fas fa-phone"></i> --></span><a href="tel:3212853144">+1-321-2853144</a></li>
                        <li><span class="fa-li pr-2"><svg class="svg-inline--fa fa-envelope fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg><!-- <i class="fas fa-envelope"></i> --></span><a href="mailto:contact@biocoreconferences.com">contact@biocoreconferences.com</a></li>
                        <li><span class="fa-li pr-2"><svg class="svg-inline--fa fa-linkedin-in fa-w-14" aria-hidden="true" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M100.3 448H7.4V148.9h92.9V448zM53.8 108.1C24.1 108.1 0 83.5 0 53.8S24.1 0 53.8 0s53.8 24.1 53.8 53.8-24.1 54.3-53.8 54.3zM448 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448h-.1z"></path></svg><!-- <i class="fab fa-linkedin-in"></i> --></span><a href="https://www.linkedin.com/in/" target="_blank">Linkedin</a></li>
                        <!--<li class="my-1"><span class="fa-li pr-2"><i class="fab fa-facebook"></i></span><a href="https://facebook.com">Facebook</a></li>
                        <li><span class="fa-li pr-2"><i class="fab fa-twitter"></i></span><a href="https://twitter.com/vaccinesummitdc" target="_blank">Twitter </a></li>-->
                        
                      </ul>
                    </div>
                  </div>
                  <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3159.561343955882!2d-77.55907528468641!3d37.636004879784906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b1154a27b1fed9%3A0x99bd352721aefc71!2s3400%20Copper%20Mill%20Trace%2C%20Richmond%2C%20VA%2023294%2C%20USA!5e0!3m2!1sen!2sin!4v1575607761281!5m2!1sen!2sin" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>-->
                </div>
            </div>
          
        </div>
      </div></section>
@endsection
