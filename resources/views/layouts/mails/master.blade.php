<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ \App\Helpers\Helper::getCompanyName() }}</title>
    <style>
        /* ----- RESET & GLOBAL styles (email-safe) ----- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            background-color: #eef3f8;
            /* soft background matching siteffects.com light grey-blue */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 24px 16px;
            margin: 0;
            line-height: 1.5;
            color: #1e293b;
        }

        /* main email card — clean white container with subtle shadow */
        .email-container {
            max-width: 560px;
            width: 100%;
            background-color: #ffffff;
            border-radius: 32px;
            box-shadow: 0 20px 35px -8px rgba(7, 30, 60, 0.2), 0 5px 12px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            border: 1px solid #dde5ed;
        }

        /* ----- header: colors exactly from siteffects.com dark blue palette ----- */
        .email-header {
            padding: 36px 36px 20px 36px;
            background: #22055a;
            border-bottom: 1px solid #e9eef3;
        }

        .logo-area {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 16px;
        }

        .greeting h1 {
            font-size: 30px;
            font-weight: 700;
            letter-spacing: -0.02em;
            color: #fff;
            /* consistent heading color */
            margin-bottom: 8px;
            text-align: center;
            line-height: 1.2;
        }

        .greeting p {
            font-size: 17px;
            color: #fff;
            text-align: center;
        }

        /* ----- main content + service promotion with siteffects colors ----- */
        .email-body {
            padding: 16px 36px 24px 36px;
            background: #ffffff;
        }

        .thank-you-card {
            background: #f62648;
            /* very light blue background */
            border-radius: 28px;
            padding: 28px 28px 24px 28px;
            margin-bottom: 30px;
            border: 1px solid #c9ddf5;
        }

        .thank-you-card h2 {
            font-size: 24px;
            font-weight: 650;
            letter-spacing: -0.02em;
            color: #fff;
            /* brand dark */
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .thank-you-card p {
            font-size: 17px;
            color: #fff;
            margin-bottom: 16px;
        }

        .stats-badge {
            display: inline-flex;
            align-items: center;
            background: white;
            border-radius: 60px;
            padding: 10px 22px;
            box-shadow: 0 4px 10px rgba(15, 43, 75, 0.08);
            border: 1px solid #fff;
            margin-top: 8px;
        }

        .stats-badge strong {
            font-size: 26px;
            font-weight: 750;
            color: #22055a;
            /* brand dark */
            margin-right: 8px;
            letter-spacing: -0.5px;
        }

        .stats-badge span {
            font-size: 17px;
            color: #22055a;
            font-weight: 500;
        }

        .service-highlight h3 {
            font-size: 22px;
            font-weight: 700;
            color: #22055a;
            margin-bottom: 18px;
            letter-spacing: -0.3px;
            padding-left: 18px;
        }

        .service-item {
            flex: 1 1 calc(50% - 8px);
            min-width: 210px;
            background: #22055a;
            border: 1px solid #deeaf9;
            border-radius: 24px;
            padding: 24px 18px 18px 18px;
        }

        .service-item h4 {
            font-size: 19px;
            font-weight: 650;
            color: #fff;
            margin-bottom: 8px;
        }

        .service-item p {
            font-size: 15px;
            color: #c5c5c5;
            margin-bottom: 14px;
        }

        .service-tag {
            background: #f62648;
            /* light blue tag */
            color: #fff;
            border-radius: 30px;
            padding: 5px 14px;
            font-size: 13px;
            font-weight: 600;
            display: inline-block;
            border: 1px solid #f62648;
        }

        .project-stat {
            background: #f62648;
            border-radius: 22px;
            padding: 20px 24px;
            margin: 24px 0 10px 0;
            border: 1px solid #c5d9f2;
            text-align: center;
            box-shadow: 0 6px 14px rgba(15, 43, 75, 0.06);
        }

        .project-stat .big-number {
            font-size: 44px;
            font-weight: 800;
            color: #fff;
            line-height: 1;
            margin-bottom: 4px;
            letter-spacing: -1px;
        }

        .project-stat .stat-label {
            font-size: 18px;
            color: #fff;
            font-weight: 500;
        }

        .project-stat .stat-detail {
            font-size: 16px;
            color: #c5c5c5;
            margin-top: 12px;
        }

        .cta-button {
            display: inline-block;
            background: #22055a;
            /* solid brand color */
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 17px;
            padding: 16px 42px;
            border-radius: 50px;
            margin: 24px 0 12px 0;
            border: 1px solid #22055a;
            box-shadow: 0 12px 20px -12px #0a233e;
            transition: background 0.2s;
        }

        .cta-button:hover {
            background: #140238;
        }

        .email-footer {
            padding: 24px 36px 32px 36px;
            background: #22055a;
            /* near white with slight blue cast */
            border-top: 1px solid #d7e3f0;
            text-align: center;
        }

        .footer-links a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            font-size: 15px;
            border-bottom: 1px solid transparent;
        }

        .footer-links a:hover {
            border-bottom-color: #f62648;
        }

        .copyright {
            font-size: 14px;
            color: #c5c5c5;
            margin-top: 16px;
        }

        .signature {
            font-size: 15px;
            color: #c5c5c5;
            margin: 18px 0 6px 0;
        }

        hr {
            border: none;
            border-top: 1px solid #d3e0ee;
            margin: 16px 0 24px 0;
        }

        @media (max-width: 480px) {

            .email-header,
            .email-body,
            .email-footer {
                padding-left: 22px;
                padding-right: 22px;
            }

            .greeting h1 {
                font-size: 25px;
            }

            .greeting p {
                font-size: 15px;
            }

            .thank-you-card h2 {
                font-size: 20px;
            }

            .service-item {
                flex: 1 1 100%;
            }
        }
    </style>
    @yield('css')
</head>

<body>
    <div class="email-container">
        <!-- header with exact brand dark blue -->
        <div class="email-header">
            <div class="logo-area">
                <img height="40px" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path(\App\Helpers\Helper::getLogoLight()))) }}"
                    alt="{{ \App\Helpers\Helper::getCompanyName() }}">
            </div>
            <div class="greeting">
                <h1>@yield('title')</h1>
                <p>@yield('para')</p>
            </div>
        </div>

        <div class="email-body">
            @yield('content')
        </div>

        <div class="email-footer">
            <div class="footer-links"
                style="display: flex; justify-content: center; gap: 28px; flex-wrap: wrap; margin-bottom: 20px;">
                <a href="{{ route('frontend.services') }}">Services</a>
                <a href="{{ route('frontend.projects') }}">Our Work</a>
                <a href="{{ route('frontend.contact') }}">Contact</a>
            </div>
            <hr>
            <div class="signature">
                Best regards,<br>
                <strong>The {{ \App\Helpers\Helper::getCompanyName() }} Team</strong>
            </div>
            <div class="copyright">
                © {{ date('Y') }} {{ \App\Helpers\Helper::getCompanyName() }} · Smart IT & Web Solutions<br>
                {{ \App\Helpers\Helper::getCompanyAddress() }}
            </div>
            <div style="margin-top: 16px; font-size: 13px; color: #6f8aac;">
                This is an automated message. We’ll reply personally within 24h.
            </div>
        </div>
    </div>
</body>

</html>
