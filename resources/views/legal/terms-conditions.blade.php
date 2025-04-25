<main class="terms-conditions-main">
    <div class="terms-header">
        <div class="container">
            <div class="header-content">
                <img src="{{ asset('/img/logos/GREG-LOGO-White.png') }}" class="logo" alt="Workspaces Logo">
                <h1>Greg Workspaces</h1>
                <p class="tagline">Efficient internal workspace scheduling made simple.</p>
            </div>
        </div>
    </div>

    <div class="container terms-container">
        <div class="terms-box">
            <h1 class="terms-title">Terms and Conditions</h1>
            <p class="effective-date">Effective Date: January 1, 2024</p>

            <div class="terms-content">
                <p class="intro-text">Welcome to Workspace! These terms and conditions outline the rules and regulations for the use of our platform, which facilitates the assignment and scheduling of internal workspace for company meetings.</p>

                <p class="intro-text">By accessing this website and creating an account, you agree to comply with and be bound by the following terms and conditions. If you do not agree with any part of these terms, you must not use our services.</p>

                <div class="terms-section">
                    <h2 class="section-title">1. User Data</h2>
                    <p>When using Workspace, your personal information—including name, email, and scheduling preferences—will be stored securely in our database. This information will only be used for the purpose of workspace assignment and internal scheduling processes within your organization.</p>
                </div>

                <div class="terms-section">
                    <h2 class="section-title">2. Workspace Scheduling</h2>
                    <p>Users are responsible for the accuracy and integrity of the workspace reservations they create. Misuse of the scheduling system, including repeated no-shows or unauthorized use, may result in account suspension or termination.</p>
                </div>

                <div class="terms-section">
                    <h2 class="section-title">3. Intellectual Property</h2>
                    <p>Unless otherwise stated, Workspace and/or its licensors own the intellectual property rights for all content and materials on the platform. You may use Workspace's content strictly for internal company use as permitted under these terms.</p>
                </div>

                <div class="terms-section">
                    <h2 class="section-title">4. Cookies</h2>
                    <p>We use cookies to enhance your experience. By using Workspace, you consent to our use of cookies in accordance with our <a href="#" class="terms-link">Privacy Policy</a>.</p>
                </div>

                <div class="terms-section">
                    <h2 class="section-title">5. Limitations of Use</h2>
                    <p>You must not:</p>
                    <ul class="terms-list">
                        <li>Copy or republish material from Workspace</li>
                        <li>Sell, rent or sub-license material from the platform</li>
                        <li>Reproduce, duplicate or exploit material for commercial purposes outside the internal use of your organization</li>
                    </ul>
                </div>

                <div class="terms-section">
                    <h2 class="section-title">6. Termination</h2>
                    <p>We reserve the right to suspend or terminate accounts that violate these terms, compromise the system's integrity, or misuse the workspace scheduling features.</p>
                </div>

                <div class="terms-section">
                    <h2 class="section-title">7. Modifications</h2>
                    <p>We may revise these terms at any time. Changes will be communicated via email or platform notification and take effect immediately upon publication.</p>
                </div>

                <p class="contact-text">For questions regarding these terms, contact us at <a href="mailto:support@workspace.com" class="terms-link">support@workspace.com</a>.</p>
            </div>
        </div>

    <style>
        /* General Styles */
        .terms-conditions-main {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        /* Header Styles */
        .terms-header {
            padding: 5rem 0;
            background-image: url('{{ asset('assets/img/header-blue-purple.jpg') }}');
            background-size: cover;
            background-position: center;
            text-align: center;
            color: white;
            position: relative;
        }

        .terms-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(42, 57, 129, 0.8) 0%, rgb(44, 72, 120) 100%);
        }

        .header-content {
            position: relative;
            z-index: 1;
        }

        .logo {
            width: 200px;
            height: 200px;
            margin-bottom: 1rem;
            object-fit: contain;
        }

        .tagline {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-top: 0.5rem;
        }

        /* Main Content Styles */
        .terms-container {
            padding: 2rem 0;
        }

        .terms-content {
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            padding: 3rem;
            margin-top: -4rem;
            position: relative;
            z-index: 2;
        }

        .terms-title {
            text-align: center;
            color: #3f51b5;
            margin-bottom: 2rem;
            font-weight: 600;
            font-size: 2rem;
        }

        .effective-date {
            text-align: center;
            color: #666;
            margin-bottom: 2rem;
            font-size: 0.9rem;
        }

        .intro-text {
            margin-bottom: 1.5rem;
            font-size: 1.05rem;
        }

        /* Section Styles */
        .terms-section {
            margin-bottom: 2.5rem;
        }

        .section-title {
            color: #3f51b5;
            margin-bottom: 1rem;
            font-weight: 600;
            font-size: 1.3rem;
        }

        .terms-list {
            padding-left: 1.5rem;
            margin-top: 0.5rem;
        }

        .terms-list li {
            margin-bottom: 0.5rem;
        }

        /* Links and Text Styles */
        .terms-link {
            color: #673ab7;
            text-decoration: none;
            font-weight: 500;
        }

        .terms-link:hover {
            text-decoration: underline;
        }

        .contact-text {
            margin-top: 3rem;
            font-size: 1.05rem;
        }

        .copyright {
            text-align: center;
            color: #666;
            margin-top: 3rem;
            font-size: 0.9rem;
        }

        /* Content Styles */
        .terms-content {
            margin: 0 auto;
            max-width: 1200px; /* Even narrower content area */
        }

        .intro-text {
            margin-bottom: 1.5rem;
            text-align: justify;
            hyphens: auto;
        }

        /* Section Styles */
        .terms-section {
            margin-bottom: 2rem;
        }

        .section-title {
            color: #3f51b5;
            margin-bottom: 0.8rem;
            font-weight: 600;
            font-size: 1.2rem;
        }

        .terms-list {
            padding-left: 1.5rem;
            margin-top: 0.5rem;
        }

        .terms-list li {
            margin-bottom: 0.5rem;
        }

        /* Links and Text Styles */
        .terms-link {
            color: #673ab7;
            text-decoration: none;
            font-weight: 500;
        }


        .terms-link:hover {
            text-decoration: underline;
        }

        .contact-text {
            margin-top: 2rem;
            text-align: center;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .terms-box {
                padding: 2rem;
            }

            .terms-title {
                font-size: 1.6rem;
            }
        }

        @media (max-width: 576px) {
            .terms-box {
                padding: 1.5rem;
            }

            .terms-content {
                max-width: 100%;
            }
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .terms-content {
                padding: 2rem;
                margin-top: -2rem;
            }

            .terms-title {
                font-size: 1.6rem;
            }

            .section-title {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 576px) {
            .terms-content {
                padding: 1.5rem;
            }

            .terms-header {
                padding: 3rem 0;
            }

            .logo {
                width: 100px;
                height: 100px;
            }
        }
    </style>
</main>

