@extends('backend.admin-master')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/backend/css/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/media-uploader.css') }}">
    <link rel="stylesheet"
        href="{{ asset('//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css') }}">
@endsection
@section('site-title')
    {{ __('Edit Works') }}
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                @include('backend/partials/message')
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="header-wrap">
                            <h4 class="header-title">{{ __('Edit work') }}</h4>
                            <a href="{{ route('admin.work') }}" class="btn btn-primary btn-xs"><i
                                    class="fas fa-angle-double-left"></i> {{ __('All Works') }}</a>
                        </div>
                        <form action="{{ route('admin.work.update') }}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="{{ $work_item->id }}">
                            @csrf
                            <div class="form-group">
                                <label for="language">{{ __('Language') }}</label>
                                <select name="lang" id="language" class="form-control">
                                    @foreach (get_all_language() as $language)
                                        <option value="{{ $language->slug }}">{{ $language->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">{{ __('Title') }}</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $work_item->title }}">
                            </div>
                            <div class="form-group">
                                <label for="slug">{{ __('Slug') }}</label>
                                <input type="text" class="form-control" name="slug" value="{{ $work_item->slug }}">
                            </div>
                            <div class="form-group">
                                <label for="notice">Notice Board</label>
                                <input type="hidden" name="notice" id="notice"
                                    value="{{ $work_item->notice }}">
                                <div class="summernote">{!! $work_item->notice !!}</div>
                            </div>
                            <div class="form-group">
                                <label for="description">{{ __('Description') }}</label>
                                <input type="hidden" name="description" id="description"
                                    value="{{ $work_item->description }}">
                                <div class="summernote">{!! $work_item->description !!}</div>
                            </div>
                            
                            <div class="form-group">
                                <label for="what_we_are">What we are</label>
                                <input type="hidden" name="what_we_are" id="what_we_are"
                                    value="{{ $work_item->whatweare }}">
                                <div class="summernote">{!! $work_item->whatweare !!}</div>
                            </div>
                            <div class="form-group">
                                <label for="why_do_attend">Why do attend?</label>
                                <input type="hidden" name="why_do_attend" id="why_do_attend"
                                    value="{{ $work_item->why_do_attend }}" required>
                                <div class="summernote">{!! $work_item->why_do_attend !!}</div>
                            </div>
                            <div class="form-group">
                                <label for="conference_topics">Conference Topics</label>
                                <input type="hidden" name="conference_topics" id="conference_topics"
                                    value="{{ $work_item->conference_topics }}" required>
                                <div class="summernote">{!! $work_item->conference_topics !!}</div>
                            </div>
                            <div class="form-group">
                                <label for="key_dates">Key dates</label>
                                <input type="hidden" name="key_dates" id="key_dates" value="{{ $work_item->key_dates }}">
                                <div class="summernote">{!! $work_item->key_dates !!}</div>
                            </div>
                            <div class="form-group">
                                <label for="sponsherships">Sponsherships</label>
                                <input type="hidden" name="sponsherships" id="sponsherships"
                                    value="{{ $work_item->sponsherships }}">
                                <div class="summernote">{!! $work_item->sponsherships !!}</div>
                            </div>
                            <div class="form-group">
                                <label for="ocm">OCM</label>
                                <input type="hidden" name="ocm" id="ocm" value="{{ $work_item->ocm }}">
                                <div class="summernote">{!! $work_item->ocm !!}</div>
                            </div>
                            <div class="form-group">
                                <label for="venue">Venue</label>
                                <input type="hidden" name="venue" id="venue" value="{{ $work_item->venue }}">
                                <div class="summernote">{!! $work_item->venue !!}</div>
                            </div>
                           <div class="form-group">
                                <label for="venue">Our Generals</label>
                                <input type="hidden" name="our_generals" id="our_generals" value="{{ $work_item->our_generals }}">
                                <div class="summernote">{!! $work_item->our_generals !!}</div>
                            </div>
                            <div class="form-group">
                                <label for="location">Date & Location </label>
                                {{-- <input type="text" class="form-control" id="clients" name="clients"
                                    value="{{ $work_item->clients }}"> --}}
                                    <input type="hidden" name="clients" id="clients"
                                    value="{{ $work_item->clients }}">
                                <div class="summernote">{!! $work_item->clients !!}</div>
                                </div>
                            <div class="form-group">
                                <label for="start_date">{{ __('Start Date') }}</label>
                                <input type="date" class="form-control" id="start_date" name="start_date"
                                    value="{{ $work_item->start_date }}">
                            </div>
                            <div class="form-group">
                                <label for="end_date">{{ __('End Date') }}</label>
                                <input type="date" class="form-control" id="end_date" name="end_date"
                                    value="{{ $work_item->end_date }}">
                            </div>
                            <div class="form-group">
                                <label for="categories_id">{{ __('Category') }}</label>
                                <select name="categories_id[]" multiple id="category"
                                    class="form-control nice-select wide">
                                    <option value="">{{ __('Select Category') }}</option>

                                    @foreach ($works_category as $data)
                                        <option @if (in_array($data->id, $work_item->categories_id)) selected @endif
                                            value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="meta_tags">{{ __('Meta Tags') }}</label>
                                <input type="text" name="meta_tags" class="form-control" data-role="tagsinput"
                                    value="{{ $work_item->meta_tags }}">
                            </div>
                            <div class="form-group">
                                <label for="meta_description">{{ __('Meta Description') }}</label>
                                <textarea name="meta_description" class="form-control" rows="5" id="meta_description">{{ $work_item->meta_description }}</textarea>
                            </div>
                            @php
                                $site_breadcrumb_bg = get_attachment_image_by_id(get_static_option('conference_breadcrumb_bg'), 'full', false);
                            @endphp
                             <div class="form-group">
                                <label for="image">Banner Image</label>
                                <div class="media-upload-btn-wrapper">
                                    <div class="img-wrap">
                                        {!! render_attachment_preview($work_item->banner_image, '', true) !!}
                                    </div>
                                    <input type="hidden" name="banner_image" value="{{ $work_item->banner_image }}">
                                    <button type="button" class="btn btn-info media_upload_form_btn"
                                        data-btntitle="Select Work Image" data-modaltitle="Upload Work Image"
                                        data-toggle="modal" data-target="#media_upload_modal">
                                        {{ __('Upload Image') }}
                                    </button>
                                </div>
                                <small>{{ __('Recommended image size 1920x1280') }}</small>
                            </div>
                            <div class="form-group">
                                <label for="image">{{ __('Image') }}</label>
                                <div class="media-upload-btn-wrapper">
                                    <div class="img-wrap">
                                        {!! render_attachment_preview($work_item->image, '', true) !!}
                                    </div>
                                    <input type="hidden" name="image" value="{{ $work_item->image }}">
                                    <button type="button" class="btn btn-info media_upload_form_btn"
                                        data-btntitle="Select Work Image" data-modaltitle="Upload Work Image"
                                        data-toggle="modal" data-target="#media_upload_modal">
                                        {{ __('Upload Image') }}
                                    </button>
                                </div>
                                <small>{{ __('Recommended image size 1920x1280') }}</small>
                            </div>
                            <div class="form-group">
                                <label for="image">{{ __('Gallery') }}</label>
                                <div class="media-upload-btn-wrapper gallery">
                                    <div class="img-wrap">
                                        {!! render_attachment_gallery_preview($work_item->gallery) !!}
                                    </div>
                                    <input type="hidden" name="gallery" value="{{ $work_item->gallery }}">
                                    <button type="button" class="btn btn-info media_upload_form_btn"
                                        data-mulitple="true" data-btntitle="Select Image" data-modaltitle="Upload Image"
                                        data-toggle="modal" data-target="#media_upload_modal">
                                        {{ __('Upload Image') }}
                                    </button>
                                </div>
                                <small>{{ __('Recommended image size 1920x1280') }}</small>
                            </div>
                            <div class="form-group">
                                <label for="status">{{ __('Status') }}</label>
                                <select name="status" id="status" class="form-control">
                                    <option @if ($work_item->status == 'publish') selected @endif value="publish">
                                        {{ __('Publish') }}</option>
                                    <option @if ($work_item->status == 'draft') selected @endif value="draft">
                                        {{ __('Draft') }}</option>
                                </select>
                            </div>
                            <button type="submit"
                                class="btn btn-primary mt-4 pr-4 pl-4">{{ __('Update work') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('backend.partials.media-upload.media-upload-markup')
@endsection
@section('script')
    <script src="{{ asset('assets/backend/js/summernote-bs4.js') }}"></script>
    <script src="{{ asset('assets/backend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/bootstrap-tagsinput.js') }}"></script>
    <script
        src="{{ asset('//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js') }}">
    </script>
    <script>
        $(document).ready(function() {

            $('.summernote').summernote({
                height: 250, //set editable area's height
                codemirror: { // codemirror options
                    theme: 'monokai'
                },
                callbacks: {
                    onChange: function(contents, $editable) {
                        $(this).prev('input').val(contents);
                    }
                }
            });

            if ($('.nice-select').length > 0) {
                $('.nice-select').niceSelect();
            }


            $(document).on('change', '#language', function(e) {
                e.preventDefault();
                var selectedLang = $(this).val();
                $.ajax({
                    url: "{{ route('admin.work.category.by.slug') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        lang: selectedLang
                    },
                    success: function(data) {
                        $('#category').html('');
                        $.each(data, function(index, value) {
                            $('#category').append('<option value="' + value.id + '">' +
                                value.name + '</option>');
                            $('.nice-select').niceSelect('update');
                        });
                    }
                });
            });

        });
    </script>

    <script src="{{ asset('assets/backend/js/dropzone.js') }}"></script>
    @include('backend.partials.media-upload.media-js')
@endsection
