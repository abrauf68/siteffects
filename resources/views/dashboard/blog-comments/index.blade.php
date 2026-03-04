@extends('layouts.master')

@section('title', __('Blog Comments'))

@section('css')
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.blogs.index') }}">{{ __('Blogs') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Comments') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Blogs List Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top custom-datatables">
                    <thead>
                        <tr>
                            <th>{{ __('Sr.') }}</th>
                            <th>{{ __('By') }}</th>
                            <th>{{ __('Comment') }}</th>
                            <th>{{ __('Created At') }}</th>
                            <th>{{ __('Status') }}</th>
                            @canany(['update blog'])<th>{{ __('Action') }}</th>@endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogComments as $index => $blogComment)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $blogComment->user->name }}</td>
                                <td>{{ $blogComment->message }}</td>
                                <td>{{ $blogComment->created_at->format('d M Y') }}</td>
                                <td>
                                    <span
                                        class="badge me-4 bg-label-{{ $blogComment->is_active == 'active' ? 'success' : 'danger' }}">{{ ucfirst($blogComment->is_active) }}</span>
                                </td>
                                @canany(['update blog'])
                                    <td class="d-flex">
                                        @canany(['update blog'])
                                            <form action="{{ route('dashboard.blog-comments.destroy', $blogComment->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="#" type="submit"
                                                    class="btn btn-icon btn-text-danger waves-effect waves-light rounded-pill delete-record delete_confirmation"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Delete Comment') }}">
                                                    <i class="ti ti-trash ti-md"></i>
                                                </a>
                                            </form>
                                            <span class="text-nowrap">
                                                <a href="{{ route('dashboard.blog-comments.status.update', $blogComment->id) }}"
                                                    class="btn btn-icon btn-text-primary waves-effect waves-light rounded-pill me-1"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ $blogComment->is_active == 'active' ? __('Deactivate Comment') : __('Activate Comment') }}">
                                                    @if ($blogComment->is_active == 'active')
                                                        <i class="ti ti-toggle-right ti-md text-success"></i>
                                                    @else
                                                        <i class="ti ti-toggle-left ti-md text-danger"></i>
                                                    @endif
                                                </a>
                                            </span>
                                        @endcan
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
