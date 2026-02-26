@extends('layouts.master')

@section('title', __('Edit Page'))

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.pages.index') }}">{{ __('Pages') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Edit') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-6">
            <!-- Account -->
            <div class="card-body pt-4">
                <form method="POST" action="{{ route('dashboard.pages.update', $page->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row p-5">
                        <h3>{{ 'Edit '.$page->title.' Page' }}</h3>
                        <div class="mb-4 col-md-6">
                            <label for="title" class="form-label">{{ __('Page Title') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('title') is-invalid @enderror" type="text" id="title"
                                name="title" required placeholder="{{ __('Enter title') }}" autofocus value="{{old('title', $page->title)}}"/>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="slug" class="form-label">{{ __('Slug') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('slug') is-invalid @enderror" type="text" id="slug"
                                name="slug" required placeholder="{{ __('Enter slug') }}"  value="{{old('slug', $page->slug)}}"/>
                            @error('slug')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="content" class="form-label">{{ __('Content') }}</label><span
                                class="text-danger">*</span>
                            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content"
                                placeholder="{{ __('Enter content') }}" cols="30" rows="10">
                                {{ old('content', $page->content) }}
                            </textarea>
                            @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="meta_title" class="form-label">{{ __('Meta Title') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('meta_title') is-invalid @enderror" type="text"
                                id="meta_title" name="meta_title" required
                                placeholder="{{ __('Enter meta title') }}"  value="{{old('meta_title', $page->meta_title)}}"/>
                            @error('meta_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="meta_description" class="form-label">{{ __('Meta Description') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('meta_description') is-invalid @enderror" type="text"
                                id="meta_description" name="meta_description" required
                                placeholder="{{ __('Enter meta description') }}"  value="{{old('meta_description', $page->meta_description)}}"/>
                            @error('meta_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="meta_keywords" class="form-label">{{ __('Meta Keywords') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('meta_keywords') is-invalid @enderror" type="text"
                                id="meta_keywords" name="meta_keywords" required
                                placeholder="{{ __('Enter meta keywords') }}"
                                value="{{ old('meta_keywords', $page->meta_keywords) }}" />
                            @error('meta_keywords')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="author" class="form-label">{{ __('Author') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('author') is-invalid @enderror" type="text"
                                id="author" name="author" required
                                placeholder="{{ __('Enter author') }}"
                                value="{{ old('author', $page->author) }}" />
                            @error('author')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-3">{{ __('Update Page') }}</button>
                    </div>
                </form>
            </div>
            <!-- /Account -->
        </div>
    </div>
@endsection

@section('script')
    <!-- Vendors JS -->
    <script src="https://cdn.jsdelivr.net/npm/tinymce@6.8.3/tinymce.min.js" referrerpolicy="origin"></script>
    <!-- Page JS -->
    <script>
        $(document).ready(function() {
            tinymce.init({
                selector: '#content',
                height: 500,
                plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table code help wordcount',
                toolbar: `undo redo | formatselect | fontselect fontsizeselect |
                          bold italic underline strikethrough forecolor backcolor |
                          alignleft aligncenter alignright alignjustify |
                          bullist numlist outdent indent | link image media table |
                          removeformat | code fullscreen`,
                menubar: 'file edit view insert format tools table help',
                branding: false,
                content_style: "body { font-family:Helvetica,Arial,sans-serif; font-size:14px }"
            });

            // Generate slug from title
            $('#title').on('keyup change', function() {
                let title = $(this).val();
                let slug = title.toLowerCase()
                    .trim()
                    .replace(/[^a-z0-9\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-');
                $('#slug').val(slug);
            });

            // Handle form submission manually to validate TinyMCE
            $('form').on('submit', function(e) {
                tinymce.triggerSave(); // sync content to <textarea>
                const $description = $('#content');
                const descriptionContent = $description.val().trim();

                // Remove previous validation state
                $description.removeClass('is-invalid');
                $description.next('.invalid-feedback').remove();

                if (!descriptionContent) {
                    e.preventDefault();

                    // Add Bootstrap invalid class
                    $description.addClass('is-invalid');

                    // Append validation message
                    $description.after(`
                        <div class="invalid-feedback">
                            {{ __('The description field is required.') }}
                        </div>
                    `);

                    // Optional: focus editor
                    tinymce.get('content').focus();
                }
            });

        });
    </script>


@endsection
