

<div class="terms-header">
    <div class="container">
        <div class="header-content">
            <img src="{{ asset('/img/logos/GREG-LOGO-White.png') }}" class="logo" alt="Workspaces Logo">
            <h1>Greg Workspaces</h1>
            <p class="tagline">Efficient internal workspace scheduling made simple.</p>
        </div>
    </div>
</div>
<main class="terms-container">

    <div class="terms-box">
        <h1 class="terms-title">Privacy Policy</h1>
        <p class="effective-date">Effective Date: January 1, 2025</p>

        <div class="terms-content">
            <h2 class="section-title">Introduction</h2>
            <p>Greg Workspace ("we", "our", "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, and protect your personal information when you use our internal workspace booking platform.</p>
            <p>By accessing Greg Workspace through Google authentication, you agree to this Privacy Policy. If you do not agree, please do not use our services.</p>

            <h2 class="section-title">1. Information Collection</h2>
            <h3 class="subsection-title">Google Authentication Data</h3>
            <p>When you log in through Google, we collect only the minimum information required:</p>
            <ul class="terms-list">
                <li>Your name (first and last)</li>
                <li>Email address</li>
                <li>Google account ID</li>
                <li>Profile picture (optional)</li>
            </ul>

            <h3 class="subsection-title">Workspace Booking Data</h3>
            <p>When using our booking system, we collect:</p>
            <ul class="terms-list">
                <li>Workspace preferences</li>
                <li>Booking dates and times</li>
                <li>Department/team information</li>
                <li>Special requirements (if provided)</li>
            </ul>

            <h2 class="section-title">2. Authentication Process</h2>
            <p>Access to Greg Workspace is strictly controlled:</p>
            <ul class="terms-list">
                <li>Only users pre-approved in our database can authenticate</li>
                <li>Google authentication verifies your organizational email</li>
                <li>New users must be manually added by administrators</li>
            </ul>

            <h2 class="section-title">3. How We Use Your Information</h2>
            <p>We use your data exclusively for:</p>
            <ul class="terms-list">
                <li>Verifying your identity and access privileges</li>
                <li>Managing workspace reservations</li>
                <li>Optimizing office space allocation</li>
                <li>Communicating booking confirmations</li>
                <li>Generating internal usage reports</li>
            </ul>

            <h2 class="section-title">4. Data Sharing</h2>
            <p>We do not share your personal data externally. Internally, limited information is visible to:</p>
            <ul class="terms-list">
                <li>Facilities management for space planning</li>
                <li>Your team leaders for coordination</li>
                <li>IT administrators for system maintenance</li>
            </ul>

            <h2 class="section-title">5. Data Security</h2>
            <p>We implement robust security measures:</p>
            <ul class="terms-list">
                <li>Encrypted data transmission</li>
                <li>Role-based access controls</li>
                <li>Regular security audits</li>
                <li>Secure server infrastructure</li>
            </ul>

            <h2 class="section-title">6. Data Retention</h2>
            <p>We retain your information only as needed:</p>
            <ul class="terms-list">
                <li>Active user data: Until account termination</li>
                <li>Booking history: 3 years for reporting</li>
                <li>Inactive accounts: Deleted after 12 months</li>
            </ul>

            <h2 class="section-title">7. Your Rights</h2>
            <p>You have the right to:</p>
            <ul class="terms-list">
                <li>Access your personal data</li>
                <li>Request corrections</li>
                <li>Delete non-essential information</li>
                <li>Export your booking history</li>
            </ul>

            <h2 class="section-title">8. Changes to This Policy</h2>
            <p>We may update this policy periodically. Significant changes will be communicated via your organizational email.</p>

            <h2 class="section-title">Contact Information</h2>
            <p>For privacy concerns, contact: <a href="mailto:privacy@gregworkspace.com" class="terms-link">privacy@gregworkspace.com</a></p>

            <p class="copyright">© 2025 Greg Workspace. All rights reserved.</p>
        </div>
    </div>
</main>

<style>
    .container{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

    }
    /* Main Container Styles */
    .terms-container {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
        color: #333;
        background-color: #f8f9fa;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 2rem;
    }

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

    .section-title {
        color: #3f51b5;
        margin-bottom: 0.8rem;
        font-weight: 600;
        font-size: 1.2rem;
    }

    /* Terms Box Styles */
    .terms-box {
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        padding: 3rem;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
    }

    /* Title Styles */
    .terms-title {
        text-align: center;
        color: #3f51b5;
        margin-bottom: 1rem;
        font-weight: 600;
        font-size: 2rem;
    }

    .effective-date {
        text-align: center;
        color: #666;
        margin-bottom: 2rem;
        font-size: 0.9rem;
    }

    /* Content Styles */
    .terms-content {
        margin: 0 auto;
        max-width: 1200px;
    }

    /* Section Styles */
    .section-title {
        color: #3f51b5;
        margin: 2rem 0 1rem;
        font-weight: 600;
        font-size: 1.3rem;
    }

    .subsection-title {
        color: #555;
        margin: 1.5rem 0 0.8rem;
        font-weight: 500;
        font-size: 1.1rem;
    }

    .terms-list {
        padding-left: 1.5rem;
        margin: 0.5rem 0 1rem;
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

    .copyright {
        text-align: center;
        color: #666;
        margin-top: 3rem;
        font-size: 0.9rem;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .terms-box {
            padding: 2rem;
        }

        .terms-title {
            font-size: 1.6rem;
        }

        .section-title {
            font-size: 1.2rem;
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
</style>
