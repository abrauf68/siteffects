@extends('layouts.mails.master')

@section('title', 'New Contact Query')
@section('para', 'A user has submitted a message through the website contact form.')

@section('css')
    <style>
        .info-box {
            background: #f5f8fd;
            border: 1px solid #dde5ed;
            border-radius: 18px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .info-row {
            margin-bottom: 10px;
        }

        .label {
            font-weight: 600;
            color: #22055a;
        }

        .value {
            color: #334155;
        }
    </style>
@endsection


@section('content')
    <div class="thank-you-card">
        <h2>New Inquiry Received</h2>
        <p>Please review the details below and respond if necessary.</p>
    </div>

    <div class="info-box">

        <div class="info-row">
            <span class="label">Name:</span>
            <span class="value"> {{ $contact->name ?? 'N/A' }} </span>
        </div>

        <div class="info-row">
            <span class="label">Email:</span>
            <span class="value"> {{ $contact->email ?? 'N/A' }} </span>
        </div>

        <div class="info-row">
            <span class="label">Phone:</span>
            <span class="value"> {{ $contact->phone ?? 'N/A' }} </span>
        </div>

        <div class="info-row">
            <span class="label">Service:</span>
            <span class="value"> {{ $contact->service ? $contact->service->name : 'N/A' }} </span>
        </div>

        <div class="info-row">
            <span class="label">Message:</span>
            <div class="value" style="margin-top:6px;">
                {{ $contact->message ?? 'N/A' }}
            </div>
        </div>

    </div>

    <div style="text-align: center;">
        <a href="{{ route('dashboard.contacts.index') }}" class="cta-button" target="_blank">View in Admin Panel</a>
    </div>
@endsection

@section('script')
@endsection
