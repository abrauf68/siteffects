@extends('layouts.master')

@section('title', __('Newsletters'))

@section('css')
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item active">{{ __('Newsletters') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Newsletters List Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top custom-datatables">
                    <thead>
                        <tr>
                            <th>{{ __('Sr.') }}</th>
                            <th>{{ __('Email') }}</th>
                            <th>{{ __('Submit At') }}</th>
                            @canany(['delete newsletter'])<th>{{ __('Action') }}</th>@endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($newsletters as $index => $newsletter)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $newsletter->email }}</td>
                                <td>{{ $newsletter->created_at->format('d M Y') }}</td>
                                @canany(['delete newsletter'])
                                    <td class="d-flex">
                                        @canany(['delete newsletter'])
                                            <form action="{{ route('dashboard.newsletters.destroy', $newsletter->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="#" type="submit"
                                                    class="btn btn-icon btn-text-danger waves-effect waves-light rounded-pill delete-record delete_confirmation"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Delete Newsletter') }}">
                                                    <i class="ti ti-trash ti-md"></i>
                                                </a>
                                            </form>
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
