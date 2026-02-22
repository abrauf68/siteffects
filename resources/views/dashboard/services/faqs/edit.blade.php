@extends('layouts.master')

@section('title', __('Edit Service FAQ'))

@section('css')
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.services.index') }}">{{ __('Services') }}</a></li>
    <li class="breadcrumb-item"><a href="{{ route('dashboard.service-faqs.index', $serviceFaq->service_id) }}">{{ __('Service FAQs') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Edit') }}</li>
@endsection
{{-- @dd($service) --}}
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-6">
            <!-- Account -->
            <div class="card-body pt-4">
                <form method="POST" action="{{ route('dashboard.service-faqs.update', $serviceFaq->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row p-5">
                        <h3>{{ __('Edit Service FAQ') }}</h3>
                        <div class="mb-4 col-md-12">
                            <label for="question" class="form-label">{{ __('Question') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('question') is-invalid @enderror" type="text" id="question"
                                name="question" required placeholder="{{ __('Enter question') }}" autofocus
                                value="{{ old('question', $serviceFaq->question) }}" />
                            @error('question')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="answer" class="form-label">{{ __('Answer') }}</label><span
                                class="text-danger">*</span>
                            <textarea class="form-control @error('answer') is-invalid @enderror" id="answer" name="answer"
                                placeholder="{{ __('Enter answer') }}" cols="30" rows="10">{{ old('answer', $serviceFaq->answer) }}</textarea>
                            @error('answer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-3">{{ __('Update Service FAQ') }}</button>
                    </div>
                </form>
            </div>
            <!-- /Account -->
        </div>
    </div>
@endsection

@section('script')
@endsection
