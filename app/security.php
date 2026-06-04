<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legal & Privacy Hub | Our Team</title>
    <style>
        /* Modern Reset & Base Styles */
        :root {
            --bg-color: #f8fafc;
            --card-bg: #ffffff;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --accent-color: #2563eb;
            --accent-hover: #1d4ed8;
            --border-color: #e2e8f0;
            --max-width: 1200px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: var(--text-main);
            background-color: var(--bg-color);
        }

        /* Header / Hero Section */
        header {
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);
            color: white;
            padding: 4rem 2rem;
            text-align: center;
        }

        header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            font-weight: 800;
        }

        header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Main Layout Grid */
        .container {
            max-width: var(--max-width);
            margin: 2rem auto;
            padding: 0 1.5rem;
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 2.5rem;
        }

        /* Sticky Sidebar Navigation */
        aside {
            position: sticky;
            top: 2rem;
            height: fit-content;
        }

        .legal-nav {
            background-color: var(--card-bg);
            padding: 1.5rem;
            border-radius: 12px;
            border: 1px solid var(--border-color);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }

        .legal-nav h3 {
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--text-muted);
            margin-bottom: 1rem;
        }

        .legal-nav ul {
            list-style: none;
        }

        .legal-nav li {
            margin-bottom: 0.5rem;
        }

        .legal-nav a {
            display: block;
            padding: 0.5rem 0.75rem;
            color: var(--text-muted);
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .legal-nav a:hover {
            color: var(--accent-color);
            background-color: #eff6ff;
        }

        /* Content Sections */
        main {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .legal-section {
            background-color: var(--card-bg);
            padding: 2.5rem;
            border-radius: 12px;
            border: 1px solid var(--border-color);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }

        .legal-section h2 {
            font-size: 1.75rem;
            color: #0f172a;
            margin-bottom: 1.5rem;
            border-bottom: 2px solid var(--border-color);
            padding-bottom: 0.5rem;
        }

        .legal-section h3 {
            font-size: 1.25rem;
            margin: 1.5rem 0 0.5rem 0;
            color: #334155;
        }

        .legal-section p, .legal-section ul {
            margin-bottom: 1rem;
            color: #475569;
        }

        .legal-section ul {
            padding-left: 1.5rem;
        }

        .legal-section li {
            margin-bottom: 0.25rem;
        }

        /* Data Tables for Transparency */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 1.5rem 0;
            font-size: 0.95rem;
        }

        th, td {
            padding: 0.75rem 1rem;
            text-align: left;
            border-bottom: 1px solid var(--border-color);
        }

        th {
            background-color: #f1f5f9;
            color: #334155;
            font-weight: 600;
        }

        /* Team Section Styles */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .team-card {
            background-color: #f1f5f9;
            border-radius: 8px;
            padding: 1.5rem;
            text-align: center;
            border: 1px solid var(--border-color);
        }

        .team-avatar {
            width: 80px;
            height: 80px;
            background-color: var(--accent-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem auto;
            font-weight: bold;
            font-size: 1.5rem;
        }

        .team-card h4 {
            font-size: 1.1rem;
            color: #0f172a;
            margin-bottom: 0.25rem;
        }

        .team-card p {
            font-size: 0.85rem;
            color: var(--text-muted);
            margin-bottom: 0;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 3rem 1.5rem;
            color: var(--text-muted);
            font-size: 0.9rem;
            border-top: 1px solid var(--border-color);
            margin-top: 4rem;
            background-color: #ffffff;
        }

        /* Responsive Design */
        @media (max-width: 968px) {
            .container {
                grid-template-columns: 1fr;
            }

            aside {
                position: relative;
                top: 0;
            }

            .legal-nav ul {
                display: flex;
                flex-wrap: wrap;
                gap: 0.5rem;
            }

            .legal-nav li {
                margin-bottom: 0;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>Legal, Privacy & Compliance Hub</h1>
        <p>Last Updated: June 2026. Please read our agreements carefully.</p>
    </header>

    <div class="container">
        <!-- Sidebar Navigation -->
        <aside>
            <nav class="legal-nav">
                <h3>Documentation</h3>
                <ul>
                    <li><a href="#privacy">Privacy Policy</a></li>
                    <li><a href="#terms">Terms & Conditions</a></li>
                    <li><a href="#cookies">Cookie Policy</a></li>
                    <li><a href="#gdpr">GDPR Compliance</a></li>
                    <li><a href="#team">Our Team</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content Stream -->
        <main>
            <!-- Privacy Policy -->
            <section id="privacy" class="legal-section">
                <h2>Privacy Policy</h2>
                <p>We value your privacy and are committed to protecting your personal data. This privacy policy outlines how we handle, process, and protect your information when you interact with our website.</p>
                
                <h3>Information We Collect</h3>
                <p>We may collect several types of information, including:</p>
                <ul>
                    <li><strong>Personal Identifiers:</strong> Name, email address, and billing information.</li>
                    <li><strong>Usage Data:</strong> IP address, browser type, and interaction patterns with our web pages.</li>
                </ul>

                <h3>How We Use Your Data</h3>
                <p>Your data allows us to provide dependable services, process payments, verify account security, and improve user experiences across our entire platform.</p>
            </section>

            <!-- Terms & Conditions -->
            <section id="terms" class="legal-section">
                <h2>Terms & Conditions</h2>
                <p>Welcome to our platform. By accessing or using our website, you agree to comply with and be bound by the following legally binding terms and conditions.</p>
                
                <h3>Acceptable Use</h3>
                <p>You agree not to misuse our services or help anyone else do so. For example, you must not attempt to compromise the security of our networks, reverse-engineer our software, or scrape data without explicit permission.</p>

                <h3>Limitation of Liability</h3>
                <p>Our services are provided "as is." We make no specific promises about the reliability, availability, or accuracy of the data provided on this site.</p>
            </section>

            <!-- Cookie Policy -->
            <section id="cookies" class="legal-section">
                <h2>Cookie Policy</h2>
                <p>This website uses cookies and similar tracking technologies to improve performance, remember your preferences, and analyze our traffic patterns.</p>
                
                <h3>Types of Cookies We Use</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Cookie Type</th>
                            <th>Purpose</th>
                            <th>Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Essential</strong></td>
                            <td>Required for core system security and authentication.</td>
                            <td>Session</td>
                        </tr>
                        <tr>
                            <td><strong>Analytics</strong></td>
                            <td>Helps us track traffic data and identify broken pages.</td>
                            <td>30 Days</td>
                        </tr>
                        <tr>
                            <td><strong>Marketing</strong></td>
                            <td>Used to deliver relevant advertisements tailored to your interests.</td>
                            <td>1 Year</td>
                        </tr>
                    </tbody>
                </table>
                <p>You can adjust or entirely disable cookie tracking through your individual browser preferences at any time.</p>
            </section>

            <!-- GDPR Compliance -->
            <section id="gdpr" class="legal-section">
                <h2>GDPR Data Protection Rights</h2>
                <p>In accordance with the General Data Protection Regulation (GDPR), European Union residents hold specific statutory rights regarding their personal data.</p>
                
                <h3>Your Legal Rights</h3>
                <ul>
                    <li><strong>The Right to Access:</strong> You can request a digital copy of all personal records we hold about you.</li>
                    <li><strong>The Right to Rectification:</strong> You may request corrections to any inaccurate or incomplete personal information.</li>
                    <li><strong>The Right to Erasure ("Right to be Forgotten"):</strong> You have the right to request that we delete your data entirely under certain conditions.</li>
                    <li><strong>The Right to Data Portability:</strong> You can request that we transfer your collected data to another organization or directly to you.</li>
                </ul>
                <p>To exercise any of these security rights, please contact our data safety officer via our primary support email channel.</p>
            </section>

            <!-- Team Section -->
            <section id="team" class="legal-section">
                <h2>Our Compliance & Legal Team</h2>
                <p>Meet the dedicated team responsible for keeping our legal framework updated, secure, and compliant with global privacy laws.</p>
                
                <div class="team-grid">
                    <div class="team-card">
                        <div class="team-avatar">JD</div>
                        <h4>Jane Doe</h4>
                        <p>Chief Legal Officer</p>
                    </div>
                    <div class="team-card">
                        <div class="team-avatar">JS</div>
                        <h4>John Smith</h4>
                        <p>Data Protection Officer</p>
                    </div>
                    <div class="team-card">
                        <div class="team-avatar">AW</div>
                        <h4>Alex Wong</h4>
                        <p>Compliance Specialist</p>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <footer>
        <p>&copy; 2026 Business Entity. All rights reserved. Built for secure user privacy.</p>
    </footer>

</body>
</html>