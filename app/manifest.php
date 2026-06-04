<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Manifest | Open Source Community</title>
    <style>
        /* --- CSS VARIABLES & THEME --- */
        :root {
            --bg-color: #0f172a;
            --card-bg: #1e293b;
            --accent-color: #38bdf8;
            --accent-hover: #7dd3fc;
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --border-color: #334155;
            --font-stack: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        /* --- RESET & BASE STYLES --- */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: var(--font-stack);
            background-color: var(--bg-color);
            color: var(--text-main);
            line-height: 1.6;
            padding: 0;
        }

        /* --- HEADER --- */
        header {
            background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%);
            padding: 4rem 2rem;
            text-align: center;
            border-bottom: 1px solid var(--border-color);
        }

        header h1 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            letter-spacing: -0.05em;
        }

        header h1 span {
            color: var(--accent-color);
        }

        header p {
            color: var(--text-muted);
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        /* --- LAYOUT CONTAINER --- */
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1.5rem;
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 2.5rem;
        }

        /* --- STICKY SIDEBAR NAV --- */
        aside {
            position: sticky;
            top: 2rem;
            height: fit-content;
        }

        .nav-card {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 1.5rem;
        }

        .nav-card h3 {
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--text-muted);
            margin-bottom: 1rem;
        }

        .nav-card ul {
            list-style: none;
        }

        .nav-card li {
            margin-bottom: 0.75rem;
        }

        .nav-card a {
            color: var(--text-main);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s ease;
            display: block;
        }

        .nav-card a:hover {
            color: var(--accent-color);
        }

        /* --- MAIN CONTENT AREA --- */
        main {
            display: flex;
            flex-direction: column;
            gap: 3rem;
        }

        section {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 2.5rem;
            scroll-margin-top: 2rem; /* Smooth scroll offset */
        }

        section h2 {
            font-size: 1.8rem;
            margin-bottom: 1.25rem;
            border-bottom: 2px solid var(--border-color);
            padding-bottom: 0.5rem;
            color: var(--accent-color);
        }

        section h3 {
            font-size: 1.2rem;
            margin: 1.5rem 0 0.5rem 0;
        }

        p, ul, ol {
            margin-bottom: 1rem;
            color: var(--text-main);
            opacity: 0.9;
        }

        ul, ol {
            padding-left: 1.5rem;
        }

        li {
            margin-bottom: 0.5rem;
        }

        /* --- FOOTER --- */
        footer {
            text-align: center;
            padding: 3rem 1rem;
            margin-top: 4rem;
            border-top: 1px solid var(--border-color);
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        /* --- RESPONSIVE DESIGN --- */
        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            aside {
                position: relative;
                top: 0;
            }

            section {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>Project <span>Manifest</span></h1>
        <p>The core principles, community guidelines, and legal framework governing our open-source ecosystem.</p>
    </header>

    <div class="container">
        <aside>
            <nav class="nav-card">
                <h3>Documentation</h3>
                <ul>
                    <li><a href="#vision">1. Project Vision</a></li>
                    <li><a href="#tos">2. Terms of Service</a></li>
                    <li><a href="#coc">3. Code of Conduct</a></li>
                </ul>
            </nav>
        </aside>

        <main>
            <section id="vision">
                <h2>1. Project Vision & Mission</h2>
                <p>Welcome to our open-source project. This project is built by the community, for the community. We aim to provide powerful, accessible, and transparent software tools that solve real-world problems without vendor lock-in.</p>
                <h3>Our Core Pillars:</h3>
                <ul>
                    <li><strong>Transparency:</strong> Every line of code, decision, and roadmap milestone happens out in the open.</li>
                    <li><strong>Inclusivity:</strong> We value contributions from developers, designers, writers, and users of all skill levels.</li>
                    <li><strong>Sustainability:</strong> Building high-quality, well-tested code that stands the test of time.</li>
                </ul>
            </section>

            <section id="tos">
                <h2>2. Community Terms of Service</h2>
                <p>By interacting with our repositories, forums, or official channels, you agree to comply with these terms.</p>
                
                <h3>A. Code Contributions & Licensing</h3>
                <p>All contributions made to this project are licensed under the project's primary open-source license (e.g., MIT or Apache 2.0). By submitting a Pull Request, you represent that you have the right to grant this license to the project and its users.</p>
                
                <h3>B. Disclaimer of Liability</h3>
                <p>This software is provided "as is", without warranty of any kind, express or implied. In no event shall the authors or copyright holders be liable for any claim, damages, or other liability arising from the use of the software.</p>
                
                <h3>C. Data & Privacy</h3>
                <p>We respect your privacy. Any data collected through analytics or public forums will strictly adhere to minimal collection principles and will never be sold to third parties.</p>
            </section>

            <section id="coc">
                <h2>3. Community Code of Conduct</h2>
                <p>To foster an open and welcoming environment, we pledge to make participation in our project and our community a harassment-free experience for everyone.</p>
                
                <h3>Our Standards</h3>
                <p>Examples of behavior that contributes to a positive environment include:</p>
                <ul>
                    <li>Demonstrating empathy and kindness toward other human beings.</li>
                    <li>Being respectful of differing opinions, viewpoints, and experiences.</li>
                    <li>Giving and gracefully accepting constructive feedback.</li>
                    <li>Accepting responsibility and apologizing to those affected by our mistakes.</li>
                </ul>

                <h3>Unacceptable Behavior</h3>
                <p>Examples of unacceptable behavior include:</p>
                <ul>
                    <li>The use of sexualized language or imagery, and unwelcome sexual attention or advances.</li>
                    <li>Trolling, insulting or derogatory comments, and personal or political attacks.</li>
                    <li>Public or private harassment.</li>
                    <li>Publishing others' private information, such as a physical or email address, without explicit permission.</li>
                </ul>

                <h3>Enforcement & Reporting</h3>
                <p>Instances of abusive, harassing, or otherwise unacceptable behavior may be reported by contacting the project maintainers. All complaints will be reviewed and investigated promptly and fairly.</p>
            </section>
        </main>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Open Source Project Maintainers. All rights reserved.</p>
    </footer>

</body>
</html>
