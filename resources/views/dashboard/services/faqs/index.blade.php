@extends('layouts.master')

@section('title', __('Service FAQs'))

@section('css')
@endsection


@section('breadcrumb-items')
<li class="breadcrumb-item"><a href="{{ route('dashboard.services.index') }}">{{ __('Services') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Service FAQs') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Services List Table -->
        <div class="card">
            <div class="card-header">
                @canany(['update service'])
                    <a href="{{route('dashboard.service-faqs.create', $service->id)}}" class="add-new btn btn-primary waves-effect waves-light">
                        <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span
                            class="d-none d-sm-inline-block">{{ __('Add New Service FAQ') }}</span>
                    </a>
                @endcan
            </div>
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top custom-datatables">
                    <thead>
                        <tr>
                            <th>{{ __('Sr.') }}</th>
                            <th>{{ __('Question') }}</th>
                            <th>{{ __('Created Date') }}</th>
                            <th>{{ __('Status') }}</th>
                            @canany(['update service'])<th>{{ __('Action') }}</th>@endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($serviceFaqs as $index => $faq)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($faq->question, 30) }}</td>
                                <td>{{ $faq->created_at->format('d M Y') }}</td>
                                <td>
                                    <span
                                        class="badge me-4 bg-label-{{ $faq->is_active == 'active' ? 'success' : 'danger' }}">{{ ucfirst($faq->is_active) }}</span>
                                </td>
                                @canany(['update service'])
                                    <td class="d-flex">
                                            <form action="{{ route('dashboard.service-faqs.destroy', $faq->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="#" type="submit"
                                                    class="btn btn-icon btn-text-danger waves-effect waves-light rounded-pill delete-record delete_confirmation"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Delete Service FAQ') }}">
                                                    <i class="ti ti-trash ti-md"></i>
                                                </a>
                                            </form>
                                            <span class="text-nowrap">
                                                <a href="{{ route('dashboard.service-faqs.edit', $faq->id) }}"
                                                    class="btn btn-icon btn-text-primary waves-effect waves-light rounded-pill me-1"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Edit Service FAQ') }}">
                                                    <i class="ti ti-edit ti-md"></i>
                                                </a>
                                            </span>
                                            <span class="text-nowrap">
                                                <a href="{{ route('dashboard.service-faqs.status.update', $faq->id) }}"
                                                    class="btn btn-icon btn-text-primary waves-effect waves-light rounded-pill me-1"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ $faq->is_active == 'active' ? __('Deactivate Service FAQ') : __('Activate Service FAQ') }}">
                                                    @if ($faq->is_active == 'active')
                                                        <i class="ti ti-toggle-right ti-md text-success"></i>
                                                    @else
                                                        <i class="ti ti-toggle-left ti-md text-danger"></i>
                                                    @endif
                                                </a>
                                            </span>
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
