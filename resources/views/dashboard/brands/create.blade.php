@extends('layouts.master')

@section('title', __('Create Brand'))

@section('css')
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.brands.index') }}">{{ __('Brands') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Create') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-6">
            <!-- Account -->
            <div class="card-body pt-4">
                <form method="POST" action="{{ route('dashboard.brands.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row p-5">
                        <h3>{{ __('Add New Brand') }}</h3>
                        <div class="mb-4 col-md-6">
                            <label for="name" class="form-label">{{ __('Brand Name') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" id="name"
                                name="name" required placeholder="{{ __('Enter name') }}" autofocus
                                value="{{ old('name') }}" />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="logo" class="form-label">{{ __('Logo') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('logo') is-invalid @enderror" type="file"
                                id="logo" name="logo" accept="image/*" required/>
                            @error('logo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="is_featured" class="form-label">{{ __('Featured Brand?') }}</label>
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
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-3">{{ __('Add Brand') }}</button>
                    </div>
                </form>
            </div>
            <!-- /Account -->
        </div>
    </div>
@endsection

@section('script')
@endsection
