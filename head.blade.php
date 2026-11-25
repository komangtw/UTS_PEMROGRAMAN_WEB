<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UTS Pem Web')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
            color: #212529;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            margin: 0;
        }

        /* Navbar menyamping */
        .uts-navbar {
            background-color: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
            padding: 8px 16px;
        }

        .uts-navbar-inner {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 14px;
            width: 100%;
        }

        .uts-brand {
            font-size: 1.05rem;
            color: #212529;
            text-decoration: none;
            white-space: nowrap;
        }

        .uts-nav-list {
            display: flex;
            flex-direction: row;
            align-items: center;
            flex-wrap: wrap;
            list-style: none;
            margin: 0;
            padding: 0;
            gap: 14px;
        }

        .uts-nav-list a {
            text-decoration: none;
            font-size: 0.9rem;
            white-space: nowrap;
        }

        .uts-link-home {
            color: #212529;
        }

        .uts-link-muted {
            color: #6c757d;
        }

        .uts-link-disabled {
            color: #adb5bd;
            pointer-events: none;
        }

        /* Container utama */
        .uts-container {
            max-width: 1140px;
            margin: 22px auto 0 auto;
            padding: 0 12px;
        }

        /* Alert */
        .uts-alert {
            background-color: #d1e7dd;
            border: 1px solid #badbcc;
            color: #0f5132;
            border-radius: 6px;
            padding: 14px 18px;
            font-size: 0.92rem;
            margin-bottom: 20px;
        }

        /* Grid kartu menyamping 3 kolom */
        .uts-grid {
            display: flex;
            flex-wrap: wrap;
            margin-left: -12px;
            margin-right: -12px;
        }

        .uts-col {
            width: 33.3333%;
            padding-left: 12px;
            padding-right: 12px;
            box-sizing: border-box;
        }

        @media (max-width: 768px) {
            .uts-col {
                width: 100%;
                margin-bottom: 18px;
            }
        }

        /* Kartu + */
        .uts-card-add {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            height: 100%;
            min-height: 495px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            background-color: #ffffff;
            transition: box-shadow 0.2s ease;
        }

        .uts-card-add:hover {
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.05);
        }

        .uts-plus-btn {
            width: 82px;
            height: 82px;
            border-radius:
        }
    </style>
