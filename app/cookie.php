<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Policy</title>
    <style>
        /* --- Reset & Base Styles --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f8f9fa;
            color: #333333;
            line-height: 1.6;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
        }

        /* --- Policy Card --- */
        .policy-card {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            padding: 40px;
        }

        header {
            border-bottom: 2px solid #eaeaea;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }

        h1 {
            color: #1a1a1a;
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .last-updated {
            color: #6c757d;
            font-size: 0.9rem;
            font-style: italic;
        }

        h2 {
            color: #2c3e50;
            font-size: 1.5rem;
            margin: 30px 0 15px;
        }

        p {
            margin-bottom: 15px;
            color: #4a5568;
        }

        /* --- Accordion Style for Cookie Types --- */
        .cookie-type {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 15px;
            overflow: hidden;
        }

        .cookie-type summary {
            background-color: #f8fafc;
            padding: 15px 20px;
            font-weight: 600;
            cursor: pointer;
            outline: none;
            user-select: none;
            transition: background-color 0.2s;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cookie-type summary:hover {
            background-color: #edf2f7;
        }

        .cookie-type-content {
            padding: 20px;
            background: #ffffff;
            border-top: 1px solid #e2e8f0;
        }

        /* --- Tables --- */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            font-size: 0.9rem;
        }

        th, td {
            border: 1px solid #e2e8f0;
            padding: 10px 12px;
            text-align: left;
        }

        th {
            background-color: #f8fafc;
            color: #4a5568;
            font-weight: 600;
        }

        tr:nth-child(even) {
            background-color: #fdfdfd;
        }

        /* --- Action Buttons / Links --- */
        .btn-manage {
            display: inline-block;
            background-color: #3182ce;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            margin-top: 15px;
            transition: background-color 0.2s;
        }

        .btn-manage:hover {
            background-color: #2b6cb0;
        }

        /* --- Responsive Design --- */
        @media (max-width: 768px) {
            .container {
                margin: 20px auto;
                padding: 10px;
            }
            
            .policy-card {
                padding: 20px;
            }

            h1 {
                font-size: 2rem;
            }

            table, thead, tbody, th, td, tr {
                display: block;
            }

            th {
                display: none;
            }

            tr {
                margin-bottom: 15px;
                border: 1px solid #cbd5e0;
                border-radius: 6px;
                padding: 5px;
            }

            td {
                border: none;
                position: relative;
                padding-left: 50%;
                text-align: right;
            }

            td::before {
                content: attr(data-label);
                position: absolute;
                left: 12px;
                width: 45%;
                font-weight: 600;
                text-align: left;
                color: #4a5568;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <article class="policy-card">
            <header>
                <h1>Cookie Policy</h1>
                <p class="last-updated">Last updated: June 3, 2026</p>
            </header>

            <section>
                <p>This Cookie Policy explains how our website uses cookies and similar technologies to recognize you when you visit our platform. It explains what these technologies are and why we use them, as well as your rights to control our use of them.</p>
            </section>

            <section>
                <h2>What are cookies?</h2>
                <p>Cookies are small data files that are placed on your computer or mobile device when you visit a website. Cookies are widely used by website owners in order to make their websites work, or to work more efficiently, as well as to provide reporting information.</p>
                <p>Cookies set by the website owner are called "first-party cookies". Cookies set by parties other than the website owner are called "third-party cookies".</p>
            </section>

            <section>
                <h2>How we use cookies</h2>
                <p>We use first-party and third-party cookies for several reasons. Some cookies are required for technical reasons in order for our website to operate, and we refer to these as "essential" or "strictly necessary" cookies. Other cookies enable us to track and target the interests of our users to enhance the experience on our online properties.</p>
                
                <details class="cookie-type">
                    <summary>Essential Cookies <span>▼</span></summary>
                    <div class="cookie-type-content">
                        <p>These cookies are strictly necessary to provide you with services available through our website and to use some of its features, such as access to secure areas.</p>
                        <table>
                            <thead>
                                <tr>
                                    <th>Cookie</th>
                                    <th>Source</th>
                                    <th>Purpose</th>
                                    <th>Duration</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Cookie">session_id</td>
                                    <td data-label="Source">First-party</td>
                                    <td data-label="Purpose">Maintains user session state across page requests.</td>
                                    <td data-label="Duration">Session</td>
                                </tr>
                                <tr>
                                    <td data-label="Cookie">cookie_consent</td>
                                    <td data-label="Source">First-party</td>
                                    <td data-label="Purpose">Stores the user's cookie preference choices.</td>
                                    <td data-label="Duration">1 Year</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </details>

                <details class="cookie-type">
                    <summary>Performance & Analytics Cookies <span>▼</span></summary>
                    <div class="cookie-type-content">
                        <p>These cookies collect information that is used either in aggregate form to help us understand how our website is being used or how effective our marketing campaigns are.</p>
                        <table>
                            <thead>
                                <tr>
                                    <th>Cookie</th>
                                    <th>Source</th>
                                    <th>Purpose</th>
                                    <th>Duration</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Cookie">_ga</td>
                                    <td data-label="Source">Google Analytics</td>
                                    <td data-label="Purpose">Distinguishes unique users and gathers traffic metrics.</td>
                                    <td data-label="Duration">2 Years</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </details>
            </section>

            <section>
                <h2>How can I control cookies?</h2>
                <p>You have the right to decide whether to accept or reject cookies. You can exercise your cookie rights by setting your preferences in our Cookie Consent Manager. You can also amend your web browser controls to accept or refuse cookies.</p>
                <p>If you choose to reject cookies, you may still use our website though your access to some functionality and areas of our website may be restricted.</p>
                <a href="#" class="btn-manage">Manage Cookie Preferences</a>
            </section>

            <section>
                <h2>Updates to this policy</h2>
                <p>We may update this Cookie Policy from time to time in order to reflect, for example, changes to the cookies we use or for other operational, legal, or regulatory reasons. Please therefore re-visit this Cookie Policy regularly to stay informed about our use of cookies and related technologies.</p>
            </section>

            <section>
                <h2>Contact us</h2>
                <p>If you have any questions about our use of cookies or other technologies, please email us at <strong>privacy@yourdomain.com</strong>.</p>
            </section>
        </article>
    </div>

</body>
</html>