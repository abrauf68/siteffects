@extends('layouts.master')

@section('title', __('Create Quote'))

@section('css')
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.quotes.index') }}">{{ __('Quotes') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Create') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-6">
            <!-- Account -->
            <div class="card-body pt-4">
                <form method="POST" action="{{ route('dashboard.quotes.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row p-5">
                        <h3>{{ __('Add New Quote') }}</h3>
                        <div class="mb-4 col-md-12">
                            <label for="quote" class="form-label">{{ __('Quote') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('quote') is-invalid @enderror" type="text" id="quote"
                                name="quote" required placeholder="{{ __('Enter quote') }}" autofocus
                                value="{{ old('quote') }}" />
                            @error('quote')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="author" class="form-label">{{ __('Author') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('author') is-invalid @enderror" type="text" id="author"
                                name="author" required placeholder="{{ __('Enter author name') }}"
                                value="{{ old('author') }}" />
                            @error('author')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-3">{{ __('Add Quote') }}</button>
                    </div>
                </form>
            </div>
            <!-- /Account -->
        </div>
    </div>
@endsection

@section('script')
@endsection
