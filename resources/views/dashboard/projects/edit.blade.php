@extends('layouts.master')

@section('title', __('Edit Project'))

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontAssets/css/tekmino-icon.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.projects.index') }}">{{ __('Projects') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Edit') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-6">
            <!-- Account -->
            <div class="card-body pt-4">
                <form method="POST" action="{{ route('dashboard.projects.update', $project->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row p-5">
                        <h3>{{ __('Edit Project') }}</h3>
                        <div class="mb-4 col-md-6">
                            <label for="title" class="form-label">{{ __('Project Title') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('title') is-invalid @enderror" type="text" id="title"
                                name="title" required placeholder="{{ __('Enter title') }}" autofocus value="{{old('title', $project->title)}}"/>
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
                                name="slug" required placeholder="{{ __('Enter slug') }}"  value="{{old('slug', $project->slug)}}"/>
                            @error('slug')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="live_url" class="form-label">{{ __('Live URL') }}</label>
                            <input class="form-control @error('live_url') is-invalid @enderror" type="text" id="live_url"
                                name="live_url" placeholder="{{ __('i.e. https:://abcd.com') }}"
                                value="{{ old('live_url', $project->live_url) }}" />
                            @error('live_url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        @php
                            $categories = [
                                'website',
                                'ecommerce',
                                'web_app',
                                'mobile_app',
                                'desktop_app',

                                'cms',
                                'crm',
                                'erp',
                                'hrm',
                                'lms',
                                'pos',

                                'saas',
                                'cloud_system',
                                'api_development',
                                'microservices',

                                'custom_software',
                                'enterprise_solution',

                                'booking_system',
                                'inventory_system',
                                'accounting_system',
                                'billing_system',

                                'marketing_website',
                                'landing_page',
                                'portfolio',

                                'admin_panel',
                                'dashboard',

                                'iot_system',
                                'blockchain_app',
                                'ai_ml_system',

                                'game',
                                'other',
                            ];
                        @endphp
                        <div class="mb-4 col-md-6">
                            <label class="form-label" for="category">{{ __('Category') }}</label>
                            <select id="category" name="category" class="select2 form-select @error('category') is-invalid @enderror">
                                <option value="" selected disabled>{{ __('Select Category') }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category }}"
                                        {{ old($category) || $project->category == $category ? 'selected' : '' }}>{{ ucfirst(str_replace('_', ' ', $category)) }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-4">
                            <label for="client" class="form-label">{{ __('Client') }}</label>
                            <input class="form-control @error('client') is-invalid @enderror" type="text" id="client"
                                name="client" placeholder="{{ __('i.e. Abdul Rauf') }}"
                                value="{{ old('client', $project->client) }}" />
                            @error('client')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-4">
                            <label for="technologies" class="form-label">{{ __('Technologies') }}</label>
                            <input class="form-control @error('technologies') is-invalid @enderror" type="text" id="technologies"
                                name="technologies" placeholder="{{ __('i.e. PHP, Laravel, MySQL') }}"
                                value="{{ old('technologies', $project->technologies) }}" />
                            @error('technologies')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-4">
                            <label for="completion_date" class="form-label">{{ __('Completion Date') }}</label>
                            <input class="form-control @error('completion_date') is-invalid @enderror" 
    type="date" 
    id="completion_date"
    name="completion_date" 
    value="{{ old('completion_date', $project->completion_date ? \Carbon\Carbon::parse($project->completion_date)->format('Y-m-d') : '') }}" />
                            @error('completion_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="main_image" class="form-label">{{ __('Main Image') }}</label>
                            <input class="form-control @error('main_image') is-invalid @enderror" type="file"
                                id="main_image" name="main_image" accept="image/*" />
                            @error('main_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @if($project->main_image)
                                <img src="{{ asset($project->main_image) }}" alt="main image" class="mt-2" width="120">
                            @endif
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="scroll_image" class="form-label">{{ __('Scroll Image') }}</label>
                            <input class="form-control @error('scroll_image') is-invalid @enderror" type="file"
                                id="scroll_image" name="scroll_image" accept="image/*" />
                            @error('scroll_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @if($project->scroll_image)
                                <img src="{{ asset($project->scroll_image) }}" alt="main image" class="mt-2" width="120">
                            @endif
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="features" class="form-label">Features</label>
                            <input id="features" name="features"
                                class="form-control @error('features') is-invalid @enderror" placeholder="Select features"
                                value="{{old('features', $project->features)}}" />
                            @error('features')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="description" class="form-label">{{ __('Description') }}</label><span
                                class="text-danger">*</span>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                placeholder="{{ __('Enter meta description') }}" cols="30" rows="10">
                                {{ old('description', $project->description) }}
                            </textarea>
                            @error('description')
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
                                placeholder="{{ __('Enter meta title') }}"  value="{{old('meta_title', $project->meta_title)}}"/>
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
                                placeholder="{{ __('Enter meta description') }}"  value="{{old('meta_description', $project->meta_description)}}"/>
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
                                value="{{ old('meta_keywords', $project->meta_keywords) }}" />
                            @error('meta_keywords')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="is_featured" class="form-label">{{ __('Featured Project?') }}</label>
                            <div class="form-check">
                                <input class="form-check-input @error('is_featured') is-invalid @enderror" type="checkbox"
                                    name="is_featured" id="defaultCheck3" {{old('is_featured',$project->is_featured == '1') ? 'checked' : ''}}>
                                <label class="form-check-label" for="defaultCheck3"> Featured </label>
                            </div>
                            @error('is_featured')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-3">{{ __('Update Project') }}</button>
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
