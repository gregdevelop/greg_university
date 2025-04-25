    <main class="terms-container">
        <div class="support-header">
            <div class="container">
                <div class="header-content">
                    <img src="{{ asset('/img/logos/GREG-LOGO-White.png') }}" class="logo" alt="Workspaces Logo">
                    <h1>Greg Workspace</h1>
                    <p class="tagline">Efficient workspace scheduling for your organization</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="support-content">
                <h2 class="support-title">Support Center</h2>

                <div class="support-intro">
                    <p>Welcome to the Greg Workspace Support Center. We're here to help you with any issues related to workspace booking and scheduling within your organization.</p>
                    <p>Our team is committed to providing timely assistance to ensure your workspace booking experience is seamless and efficient.</p>
                </div>

                <div class="contact-methods">
                    <h3 class="section-title">Contact Options</h3>
                    <ul class="contact-list">
                        <li><strong>Email:</strong> <a href="mailto:support@gregworkspace.com" class="terms-link">support@gregworkspace.com</a></li>
                        <li><strong>Phone:</strong> <a href="tel:+14843473453" class="terms-link">+1 (484) 347-3453</a></li>
                        <li><strong>Office Hours:</strong> Monday-Friday, 9:00 AM - 5:00 PM EST</li>
                    </ul>
                </div>

                <div class="contact-form-container">
                    <h3 class="section-title">Send Us a Message</h3>
                    <form id="supportForm" method="POST" >
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" required class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" required class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="department">Department</label>
                            <select id="department" name="department" class="form-control">
                                <option value="">Select your department</option>
                                <option value="IT">IT</option>
                                <option value="HR">Human Resources</option>
                                <option value="Finance">Finance</option>
                                <option value="Operations">Operations</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <select id="subject" name="subject" class="form-control">
                                <option value="">Select a topic</option>
                                <option value="Booking Issues">Workspace Booking Issues</option>
                                <option value="Account Access">Account Access Problems</option>
                                <option value="Feature Request">Feature Request</option>
                                <option value="Bug Report">Bug Report</option>
                                <option value="Other">Other Inquiry</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" required class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="urgent" id="urgent">
                                <span>This is an urgent request</span>
                            </label>
                        </div>

                        <button type="submit" class="submit-btn">Send Message</button>
                    </form>
                </div>

                <div class="faq-section">
                    <h3 class="section-title">Frequently Asked Questions</h3>

                    <div class="faq-item">
                        <button class="faq-question">How do I book a workspace?</button>
                        <div class="faq-answer">
                            <p>To book a workspace, log in to Greg Workspace, select your desired date and location, then choose an available workspace from the map or list view. Click "Reserve" to confirm your booking.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">Who can use Greg Workspace?</button>
                        <div class="faq-answer">
                            <p>Greg Workspace is available to all employees who have been authorized in our system. Access requires authentication through your company Google account.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">Can I cancel or modify a booking?</button>
                        <div class="faq-answer">
                            <p>Yes, you can modify or cancel bookings up to 2 hours before the scheduled time. Go to "My Bookings" and select the reservation you want to change.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">What should I do if a workspace is unavailable?</button>
                        <div class="faq-answer">
                            <p>If your preferred workspace is unavailable, try selecting a different location or time. You can also set up notifications for when a specific workspace becomes available.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">How do I report a problem with a workspace?</button>
                        <div class="faq-answer">
                            <p>Please use the "Report Issue" button on the workspace details page or contact support directly through this form for immediate assistance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


<style>

    .container{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

    }
    /* Support Page Styles */
    .support-header {
        padding: 5rem 0;
        background-image: url('{{ asset('assets/img/header-blue-purple.jpg') }}');
        background-size: cover;
        background-position: center;
        text-align: center;
        color: white;
        position: relative;
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
    .support-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(63, 81, 181, 0.8) 0%, rgba(21, 28, 83, 0.8) 100%);
    }

    .header-content {
        position: relative;
        z-index: 1;
    }

    .logo {
        width: 140px;
        height: 140px;
        margin-bottom: 1rem;
        object-fit: contain;
    }

    .tagline {
        font-size: 1.2rem;
        opacity: 0.9;
        margin-top: 0.5rem;
    }

    .support-content {
        background: white;
        border-radius: 16px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        padding-left: 30rem;
        padding-right: 30rem;
        padding-top: 3rem;
        margin-top: -4rem;
        position: relative;
        z-index: 2;
    }

    .support-title {
        text-align: center;
        color: #3f51b5;
        margin-bottom: 2rem;
        font-weight: 600;
        font-size: 2rem;
    }

    .support-intro {
        margin-bottom: 2.5rem;
        font-size: 1.05rem;
        line-height: 1.7;
    }

    .section-title {
        color: #3f51b5;
        margin: 2rem 0 1.5rem;
        font-weight: 600;
        font-size: 1.3rem;
    }

    .contact-list {
        list-style: none;
        padding-left: 0;
        margin: 1.5rem 0;
    }

    .contact-list li {
        margin-bottom: 1rem;
        font-size: 1.05rem;
    }

    /* Form Styles */
    .contact-form-container {
        margin: 8rem 0;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 500;
        color: #555;
    }

    .form-control {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.3s;
    }

    .form-control:focus {
        border-color: #3f51b5;
        outline: none;
    }

    .checkbox-label {
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .checkbox-label input {
        margin-right: 0.75rem;
    }

    .submit-btn {
        background-color: #3f51b5;
        color: white;
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .submit-btn:hover {
        background-color: #303f9f;
    }

    /* FAQ Styles */
    .faq-item {
        margin-bottom: 1rem;
        border: 1px solid #eee;
        border-radius: 8px;
        overflow: hidden;
    }

    .faq-question {
        width: 100%;
        padding: 1rem 1.5rem;
        text-align: left;
        background-color: #f9f9f9;
        border: none;
        font-size: 1.05rem;
        font-weight: 500;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .faq-question::after {
        content: '+';
        font-size: 1.2rem;
    }

    .faq-question.active::after {
        content: '-';
    }

    .faq-answer {
        padding: 0 1.5rem;
        max-height: 0;
        overflow
</style>
