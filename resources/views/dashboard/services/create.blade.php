@extends('layouts.master')

@section('title', __('Create Service'))

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontAssets/css/tekmino-icon.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.services.index') }}">{{ __('Services') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Create') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-6">
            <!-- Account -->
            <div class="card-body pt-4">
                <form method="POST" action="{{ route('dashboard.services.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row p-5">
                        <h3>{{ __('Add New Service') }}</h3>
                        <div class="mb-4 col-md-6">
                            <label for="title" class="form-label">{{ __('Service Title') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('title') is-invalid @enderror" type="text" id="title"
                                name="title" required placeholder="{{ __('Enter service title') }}" autofocus
                                value="{{ old('title') }}" />
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
                                name="slug" required placeholder="{{ __('Enter service slug') }}"
                                value="{{ old('slug') }}" />
                            @error('slug')
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
                                placeholder="{{ __('Enter service meta title') }}" value="{{ old('meta_title') }}" />
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
                                placeholder="{{ __('Enter service meta description') }}"
                                value="{{ old('meta_description') }}" />
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
                                placeholder="{{ __('Enter service meta keywords') }}"
                                value="{{ old('meta_keywords') }}" />
                            @error('meta_keywords')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="description" class="form-label">{{ __('Description') }}</label><span
                                class="text-danger">*</span>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                placeholder="{{ __('Enter service description') }}" cols="30" rows="10"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="image" class="form-label">{{ __('Image') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('image') is-invalid @enderror" type="file"
                                id="image" name="image" required accept="image/*" />
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="features" class="form-label">Features</label>
                            <input id="features" name="features"
                                class="form-control @error('features') is-invalid @enderror" placeholder="Select features"
                                value="{{ old('features') }}" />
                            @error('features')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="is_featured" class="form-label">{{ __('Featured Project?') }}</label>
                            <div class="form-check">
                                <input class="form-check-input @error('is_featured') is-invalid @enderror" type="checkbox"
                                    name="is_featured" id="defaultCheck3" {{ old('is_featured') ? 'checked' : '' }}>
                                <label class="form-check-label" for="defaultCheck3"> Featured </label>
                            </div>
                            @error('is_featured')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="icon" class="form-label">{{ __('Choose an Icon') }}</label><span
                                class="text-danger">*</span>
                            <div class="d-flex flex-wrap gap-3">
                                @php
                                    $selectedIcon = old('icon');
                                    $icons = [
                                        'tji-quote-2',
                                        'tji-download',
                                        'tji-server',
                                        'tji-star',
                                        'tji-security',
                                        'tji-speed-meter',
                                        'tji-trust',
                                        'tji-cloud-2',
                                        'tji-chart-2',
                                        'tji-envelop-2',
                                        'tji-percent',
                                        'tji-subtitle-5',
                                        'tji-subtitle-4',
                                        'tji-subtitle-3',

                                        'tji-subtitle-2',
                                        'tji-growth',
                                        'tji-hand',
                                        'tji-trophy',
                                        'tji-team',
                                        'tji-marquee',
                                        'tji-marquee-2',
                                        'tji-plane',
                                        'tji-bell',
                                        'tji-bell-2',
                                        'tji-play',
                                        'tji-quote',
                                        'tji-home',

                                        'tji-user',
                                        'tji-budget',
                                        'tji-location-2',
                                        'tji-chart',
                                        'tji-calendar',
                                        'tji-comment',
                                        'tji-window',
                                        'tji-computer',
                                        'tji-development',
                                        'tji-network',
                                        'tji-consulting',
                                        'tji-cybersecurity',
                                        'tji-cloud',
                                        'tji-hand-2',
                                        'tji-idea',
                                        'tji-rocket',
                                        'tji-search',
                                        'tji-globe',
                                        'tji-gear',
                                        'tji-shield',
                                        'tji-spark',
                                        'tji-thumbs-up',
                                        'tji-x-mark',
                                        'tji-award',
                                        'tji-check-3',
                                        'tji-check-4',
                                        'tji-clock',
                                        'tji-clock-2',
                                        'tji-location',
                                        'tji-phone',
                                        'tji-phone-2',
                                        'tji-phone-3',
                                        'tji-envelop',
                                        'tji-chat',
                                        'tji-share',

                                        'tji-facebook',
                                        'tji-messenger',
                                        'tji-instagram',
                                        'tji-whatsapp',
                                        'tji-linkedin',
                                        'tji-x-twitter',
                                        'tji-telegram',
                                        'tji-pinterest',
                                        'tji-signal',
                                        'tji-tiktok',
                                        'tji-threads',
                                        'tji-dribble',
                                        'tji-apple',
                                        'tji-google',
                                        'tji-youtube',
                                        'tji-vimeo',
                                        'tji-github',
                                        'tji-discord',
                                        'tji-tumblr',
                                        'tji-spotify',
                                        'tji-twitch',
                                    ];

                                @endphp

                                @foreach ($icons as $key => $icon)
                                    <div class="form-check text-center">
                                        <input class="form-check-input d-none" type="radio" name="icon"
                                            id="icon{{ $key }}" value="{{ $icon }}" required
                                            {{ $selectedIcon === $icon ? 'checked' : '' }}>
                                        <label class="btn btn-outline-secondary" for="icon{{ $key }}">
                                            <i class="{{ $icon }}"></i>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            @error('icon')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-3">{{ __('Add Service') }}</button>
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
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <!-- Page JS -->
    <script>
        const tagsEl = document.querySelector('#features');
        const whitelist = @json($uniqueFeatures);
        // Inline
        let tags = new Tagify(tagsEl, {
            whitelist: whitelist,
            maxTags: 10,
            dropdown: {
                maxItems: 20,
                classname: 'tags-inline',
                enabled: 0,
                closeOnSelect: false
            }
        });
        $(document).ready(function() {
            tinymce.init({
                selector: '#description',
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
                const $description = $('#description');
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
                    tinymce.get('description').focus();
                }
            });

        });

        document.querySelectorAll('input[name="icon"]').forEach(input => {
            input.addEventListener('change', function() {
                document.querySelectorAll('label[for^="icon"]').forEach(label => {
                    label.classList.remove('btn-primary');
                    label.classList.add('btn-outline-secondary');
                });
                const selectedLabel = document.querySelector(`label[for="${this.id}"]`);
                selectedLabel.classList.remove('btn-outline-secondary');
                selectedLabel.classList.add('btn-primary');
            });
        });
    </script>


@endsection
