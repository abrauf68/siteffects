@extends('layouts.mails.master')

@section('title', 'Thank you for reaching out')
@section('para', 'We’ve received your message and will get back to you shortly.')

@section('css')
    <style>
        /* Override flex for email-safe */
        .service-grid-table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
        }

        .service-item-table {
            width: 100%;
            background: #22055a;
            border-radius: 24px;
            padding: 24px 18px;
            border: 1px solid #deeaf9;
        }

        .service-item-table h4 {
            font-size: 19px;
            font-weight: 650;
            color: #fff;
            margin-bottom: 8px;
        }

        .service-item-table p {
            font-size: 15px;
            color: #c5c5c5;
            margin-bottom: 14px;
        }

        .service-tag-inline {
            background: #f62648;
            color: #fff;
            border-radius: 30px;
            padding: 5px 14px;
            font-size: 13px;
            font-weight: 600;
            display: inline-block;
            border: 1px solid #f62648;
        }
    </style>
@endsection

@section('content')
    <!-- Thank You Card -->
    <div class="thank-you-card">
        <h2>Thanks for contacting us</h2>
        <p>Your inquiry is important to us. While our team reviews your request, we’d love to share how
            Siteffects builds smart IT & web solutions that help businesses like yours grow faster.</p>
        <div class="stats-badge">
            <strong>2 K+</strong> <span>Successful Projects</span>
        </div>
    </div>

    <!-- Service Highlight -->
    <div class="service-highlight">
        <h3>Smart IT & Web Solutions for Modern Businesses</h3>
    </div>

    <!-- Services Table (email-safe) -->
    <table class="service-grid-table" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <!-- Service 1 -->
            <td style="padding:8px;" valign="top">
                <table class="service-item-table" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td>
                            <h4>Custom Software</h4>
                            <p>Tailored development that improves efficiency and scales with your business.</p>
                            <div class="service-tag-inline">devops & agile</div>
                        </td>
                    </tr>
                </table>
            </td>
            <!-- Service 2 -->
            <td style="padding:8px;" valign="top">
                <table class="service-item-table" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td>
                            <h4>Modern Web Design</h4>
                            <p>Experience-led design, combining creativity and strategy to turn ideas into impact.</p>
                            <div class="service-tag-inline">UI/UX + conversion</div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <!-- Service 3 -->
            <td style="padding:8px;" valign="top">
                <table class="service-item-table" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td>
                            <h4>Digital Solutions</h4>
                            <p>Innovative tools and platforms that keep you ahead in the digital landscape.</p>
                            <div class="service-tag-inline">mobile & cloud</div>
                        </td>
                    </tr>
                </table>
            </td>
            <!-- Service 4 -->
            <td style="padding:8px;" valign="top">
                <table class="service-item-table" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td>
                            <h4>Growth Strategy</h4>
                            <p>We combine tech, creativity, and strategy to build scalable success.</p>
                            <div class="service-tag-inline">business transformation</div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <!-- Project Stats -->
    <div class="project-stat">
        <div class="big-number">30+</div>
        <div class="stat-label">Expert IT Specialists</div>
        <div class="stat-detail">Building scalable web and software solutions trusted by growing businesses.</div>
    </div>

    <!-- CTA Button -->
    <div style="text-align: center;">
        <a href="{{ route('frontend.home') }}" class="cta-button" target="_blank">Explore Our Work</a>
    </div>

    <p style="font-size: 16px; color: #2c4c73; text-align: center; margin: 20px 0 8px; font-style: italic;">
        “We turn ideas into scalable success.”
    </p>
@endsection
