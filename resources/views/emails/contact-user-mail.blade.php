@extends('layouts.mails.master')

@section('title', 'Thank you for reaching out')
@section('para', 'We’ve received your message and will get back to you shortly.')

@section('css')
@endsection


@section('content')
    <div class="thank-you-card">
        <h2>Thanks for contacting us</h2>
        <p>Your inquiry is important to us. While our team reviews your request, we’d love to share how
            Siteffects builds smart IT & web solutions that help businesses like yours grow faster.</p>
        <div class="stats-badge">
            <strong>2 K+</strong> <span>Successful Projects</span>
        </div>
    </div>

    <div class="service-highlight">
        <h3>Smart IT & Web Solutions for Modern Businesses</h3>
    </div>

    <div class="service-grid" style="display: flex; flex-wrap: wrap; gap: 16px; margin-bottom: 24px;">
        <div class="service-item">
            <h4>Custom Software</h4>
            <p>Tailored development that improves efficiency and scales with your business.</p>
            <div class="service-tag">devops & agile</div>
        </div>
        <div class="service-item">
            <h4>Modern Web Design</h4>
            <p>Experience-led design, combining creativity and strategy to turn ideas into impact.</p>
            <div class="service-tag">UI/UX + conversion</div>
        </div>
        <div class="service-item">
            <h4>Digital Solutions</h4>
            <p>Innovative tools and platforms that keep you ahead in the digital landscape.</p>
            <div class="service-tag">mobile & cloud</div>
        </div>
        <div class="service-item">
            <h4>Growth Strategy</h4>
            <p>We combine tech, creativity, and strategy to build scalable success.</p>
            <div class="service-tag">business transformation</div>
        </div>
    </div>

    <div class="project-stat">
        <div class="big-number">30+</div>
        <div class="stat-label">Expert IT Specialists</div>
        <div class="stat-detail">Building scalable web and software solutions trusted by growing businesses.
        </div>
    </div>

    <div style="text-align: center;">
        <a href="{{ route('frontend.home') }}" class="cta-button" target="_blank">Explore Our Work</a>
    </div>

    <p style="font-size: 16px; color: #2c4c73; text-align: center; margin: 20px 0 8px; font-style: italic;">
        “We turn ideas into scalable success.”
    </p>
@endsection

@section('script')
@endsection
