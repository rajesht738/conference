@extends('backend.admin-master')
@section('style')
    <link rel="stylesheet" href="{{asset('assets/backend/css/bootstrap-tagsinput.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/dropzone.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/css/media-uploader.css')}}">
    <link rel="stylesheet" href="{{asset('//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css')}}">
@endsection
@section('site-title')
    New Conference
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                @include('backend/partials/message')
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">New Conference</h4>
                        <form action="{{route('admin.work.new')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="language">{{__('Language')}}</label>
                                <select name="lang" id="language" class="form-control">
                                    @foreach(get_all_language() as $language)
                                        <option value="{{$language->slug}}">{{$language->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">{{__('Title')}}</label>
                                <input type="text" class="form-control"  id="title"  name="title" placeholder="{{__('Title')}}">
                            </div>
                            <div class="form-group">
                                <label for="slug">{{__('Slug')}}</label>
                                <input type="text" class="form-control"  name="slug" placeholder="{{__('Slug')}}">
                            </div>
                            <div class="form-group">
                                <label for="notice">Notice Board</label>
                                <input type="hidden" name="notice" id="notice" >
                                <div class="summernote"></div>
                            </div>
                            <div class="form-group">
                                <label for="description">{{__('Description')}}</label>
                                <input type="hidden" name="description" id="description" >
                                <div class="summernote"></div>
                            </div>
                            
                            <div class="form-group">
                                <label for="why_do_attend">Why do attend?</label>
                                <input type="hidden" name="why_do_attend" id="why_do_attend" >
                                <div class="summernote"></div>
                            </div>
                            <div class="form-group">
                                <label for="conference_topics">Conference Topics</label>
                                <input type="hidden" name="conference_topics" id="conference_topics" >
                                <div class="summernote"></div>
                            </div>
                            <div class="form-group">
                                <label for="what_we_are">What we are</label>
                                <input type="hidden" name="what_we_are" id="what_we_are" >
                                <div class="summernote"></div>
                            </div>
                            <div class="form-group">
                                <label for="key_dates">Key Dates</label>
                                <input type="hidden" name="key_dates" id="key_dates" >
                                <div class="summernote"></div>
                            </div>
                            <div class="form-group">
                                <label for="ocm">OCM</label>
                                <input type="hidden" name="ocm" id="ocm" >
                                <div class="summernote"></div>
                            </div>
                            <div class="form-group">
                                <label for="venue">Venue</label>
                                <input type="hidden" name="venue" id="venue" >
                                <div class="summernote"></div>
                            </div>
                            <div class="form-group">
                                <label for="sponsherships">Sponshership</label>
                                <input type="hidden" name="sponsherships" id="sponsherships" >
                                <div class="summernote"></div>
                            </div>
                            <div class="form-group">
                                <label for="our_generals">Our Journals</label>
                                <input type="hidden" name="our_generals" id="our_generals" >
                                <div class="summernote"></div>
                            </div>
                            <div class="form-group">
                                <label for="location">Date & Location</label>
                                {{-- <input type="text" class="form-control"  id="location"  name="clients" placeholder="{{__('Clients')}}"> --}}
                                <input type="hidden" name="clients" id="location" >
                                <div class="summernote"></div>
                            </div>
                            <div class="form-group">
                                <label for="start_date">{{__('Start Date')}}</label>
                                <input type="date" class="form-control"  id="start_date"  name="start_date" placeholder="{{__('Start Date')}}">
                            </div>
                            <div class="form-group">
                                <label for="end_date">{{__('End Date')}}</label>
                                <input type="date" class="form-control"  id="end_date"  name="end_date" placeholder="{{__('End Date')}}">
                            </div>

                            <div class="form-group">
                                <label for="categories_id">{{__('Category')}}</label>
                                <select name="categories_id[]" multiple id="category" class="form-control nice-select wide">
                                    <option value="">{{__('Select Category')}}</option>
                                    @foreach($works_category as $data)
                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="meta_tags">{{__('Meta Tags')}}</label>
                                <input type="text" name="meta_tags"  class="form-control" data-role="tagsinput">
                            </div>
                            <div class="form-group">
                                <label for="meta_description">{{__('Meta Description')}}</label>
                                <textarea name="meta_description"  class="form-control" rows="5" id="meta_description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Banner Image</label>
                                <div class="media-upload-btn-wrapper">
                                    <div class="img-wrap"></div>
                                    <input type="hidden" name="banner_image">
                                    <button type="button" class="btn btn-info media_upload_form_btn" data-btntitle="Select Work Image" data-modaltitle="Upload Work Image" data-toggle="modal" data-target="#media_upload_modal">
                                        {{__('Upload Image')}}
                                    </button>
                                </div>
                                <small>{{__('Recommended image size 1920x1280')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="image">Thumb Image</label>
                                <div class="media-upload-btn-wrapper">
                                    <div class="img-wrap"></div>
                                    <input type="hidden" name="image">
                                    <button type="button" class="btn btn-info media_upload_form_btn" data-btntitle="Select Work Image" data-modaltitle="Upload Work Image" data-toggle="modal" data-target="#media_upload_modal">
                                        {{__('Upload Image')}}
                                    </button>
                                </div>
                                <small>{{__('Recommended image size 1920x1280')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="image">{{__('Gallery')}}</label>
                                <div class="media-upload-btn-wrapper gallery">
                                    <div class="img-wrap"></div>
                                    <input type="hidden" name="gallery">
                                    <button type="button" class="btn btn-info media_upload_form_btn" data-mulitple="true" data-btntitle="Select Image" data-modaltitle="Upload Image" data-toggle="modal" data-target="#media_upload_modal">
                                        {{__('Upload Image')}}
                                    </button>
                                </div>
                                <small>{{__('Recommended image size 1920x1280')}}</small>
                            </div>
                            <div class="form-group">
                                <label for="status">{{__('Status')}}</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="publish">{{__('Publish')}}</option>
                                    <option value="draft">{{__('Draft')}}</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">{{__('Add work')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('backend.partials.media-upload.media-upload-markup')
@endsection
@section('script')
    <script src="{{asset('assets/backend/js/summernote-bs4.js')}}"></script>
    <script src="{{asset('assets/backend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/backend/js/bootstrap-tagsinput.js')}}"></script>
    <script src="{{asset('//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js')}}"></script>
    <script>
        $(document).ready(function () {

            $('.summernote').summernote({
                height: 250,   //set editable area's height
                codemirror: { // codemirror options
                    theme: 'monokai'
                },
                callbacks: {
                    onChange: function(contents, $editable) {
                        $(this).prev('input').val(contents);
                    }
                }
            });

            if($('.nice-select').length > 0){
                $('.nice-select').niceSelect();
            }


            $(document).on('change','#language',function (e) {
                e.preventDefault();
                var selectedLang = $(this).val();
                $.ajax({
                    url : "{{route('admin.work.category.by.slug')}}",
                    type: "POST",
                    data: {
                        _token : "{{csrf_token()}}",
                        lang: selectedLang
                    },
                    success:function (data) {
                        $('#category').html('');
                        $.each(data,function (index,value) {
                            $('#category').append('<option value="'+value.id+'">'+value.name+'</option>');
                            $('.nice-select').niceSelect('update');
                        });
                    }
                });
            });

        });
    </script>

    <script src="{{asset('assets/backend/js/dropzone.js')}}"></script>
    @include('backend.partials.media-upload.media-js')
@endsection
