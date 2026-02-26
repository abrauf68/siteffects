@extends('layouts.master')

@section('title', __('Contact Details'))

@section('css')
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.contacts.index') }}">{{ __('Contacts') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Show') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Contact Details</h4>
                <a href="{{ route('dashboard.contacts.index') }}" class="btn btn-sm btn-primary">
                    Back
                </a>
            </div>

            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-3 fw-bold">Name:</div>
                    <div class="col-md-9">{{ $contact->name }}</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 fw-bold">Email:</div>
                    <div class="col-md-9">
                        <a href="mailto:{{ $contact->email }}">
                            {{ $contact->email }}
                        </a>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 fw-bold">Phone:</div>
                    <div class="col-md-9">
                        {{ $contact->phone ?? 'N/A' }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 fw-bold">Service:</div>
                    <div class="col-md-9">
                        {{ $contact->service->title ?? 'N/A' }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 fw-bold">Message:</div>
                    <div class="col-md-9">
                        <div class="border p-3 rounded bg-light">
                            {{ $contact->message ?? 'No message provided' }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 fw-bold">Submitted At:</div>
                    <div class="col-md-9">
                        {{ $contact->created_at->format('d M Y, h:i A') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {{-- <script src="{{asset('assets/js/app-user-list.js')}}"></script> --}}
    <script>
        $(document).ready(function() {
            //
        });
    </script>
@endsection
