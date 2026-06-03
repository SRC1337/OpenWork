<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Website | HTML5 | CSS3 | Template</title>
    <style>
        /* --- CSS VARIABLES & THEME --- */
        :root {
            --primary: #2563eb;
            --primary-hover: #1d4ed8;
            --dark: #0f172a;
            --light: #f8fafc;
            --gray: #64748b;
            --white: #ffffff;
            --max-width: 1100px;
            --transition: all 0.3s ease;
        }

        /* --- BASE STYLES --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* --- NAVIGATION --- */
        header {
            background-color: var(--white);
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-container {
            max-width: var(--max-width);
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            cursor: pointer;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 1.5rem;
        }

        nav a {
            text-decoration: none;
            color: var(--gray);
            font-weight: 500;
            transition: var(--transition);
            cursor: pointer;
        }

        nav a:hover, nav a.active {
            color: var(--primary);
        }

        /* --- MAIN LAYOUT & ROUTING --- */
        main {
            flex: 1;
            max-width: var(--max-width);
            width: 100%;
            margin: 0 auto;
            padding: 3rem 2rem;
        }

        /* Crucial: Hides sections that aren't active */
        .page-section {
            display: none;
            animation: fadeIn 0.5s ease forwards;
        }

        .page-section.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* --- REUSABLE COMPONENTS --- */
        .hero {
            text-align: center;
            padding: 4rem 1rem;
            background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
            border-radius: 12px;
            margin-bottom: 2rem;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--dark);
        }

        .btn {
            display: inline-block;
            background-color: var(--primary);
            color: var(--white);
            padding: 0.75rem 1.5rem;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            margin-top: 1rem;
        }

        .btn:hover {
            background-color: var(--primary-hover);
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .card {
            background: var(--white);
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
            border: 1px solid #e2e8f0;
        }

        /* --- FOOTER --- */
        footer {
            background-color: var(--dark);
            color: var(--white);
            text-align: center;
            padding: 1.5rem;
            font-size: 0.9rem;
            margin-top: auto;
        }

        /* --- SPECIFIC PAGE STYLES --- */
        .client-logo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1.5rem;
            align-items: center;
            text-align: center;
        }
        .client-brand {
            background: #e2e8f0;
            padding: 2rem 1rem;
            border-radius: 6px;
            font-weight: 600;
            color: var(--gray);
        }
    </style>
</head>
<body>

    <header>
        <div class="nav-container">
            <div class="logo" onclick="navigateTo('index')">Legacy Software Group | PHP</div>
            <nav>
                <ul>
                    <li><a onclick="navigateTo('index')" id="nav-index" class="active">Home</a></li>
                    <li><a onclick="navigateTo('about')" id="nav-about">About</a></li>
                    <li><a onclick="navigateTo('services')" id="nav-services">Services</a></li>
                    <li><a onclick="navigateTo('clients')" id="nav-clients">Clients</a></li>
                    <li><a onclick="navigateTo('inside')" id="nav-inside">Inside</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        
        <section id="index" class="page-section active">
            <div class="hero">
                <h1>Welcome to Modern Solutions in PHP</h1>
                <p>We build elegant architectures, high-performing websites, and streamline corporate frameworks using PHP.</p>
                <button class="btn" onclick="navigateTo('services')">Explore Our Services</button>
            </div>
            <h2>Why Choose Us?</h2>
            <div class="grid">
                <div class="card">
                    <h3>Innovation First</h3>
                    <p>We leverage modern technologies to keep your business staying two steps ahead of competition.</p>
                </div>
                <div class="card">
                    <h3>Reliable Team</h3>
                    <p>Our experts are dedicated to ensuring your architecture scales efficiently and safely.</p>
                </div>
            </div>
        </section>

        <section id="about" class="page-section">
            <h2>About Our Journey</h2>
            <p style="margin-top: 1rem;">Founded with a vision to simplify digital infrastructure, we have grown into a dynamic team of designers, engineers, and strategists. We believe in transparency, high standards, and relentless execution.</p>
            <div class="grid">
                <div class="card">
                    <h3>Our Mission</h3>
                    <p>To empower businesses globally by offering elite digital tools and robust strategies.</p>
                </div>
                <div class="card">
                    <h3>Our Vision</h3>
                    <p>Setting the industry standard for clean code, striking design, and scalable ecosystems.</p>
                </div>
            </div>
        </section>

        <section id="services" class="page-section">
            <h2>Our PHP | HTML5 | CSS3 Template</h2>
            <p>Tailored solutions built specifically to drive results for your business units.</p>
            <div class="grid">
                <div class="card">
                    <h3>Web | Engineering</h3>
                    <p>Stunning, fast, and secure frontend structures built to convert visitors into lifelong clients.</p>
                </div>
                <div class="card">
                    <h3>Cloud | Architecture</h3>
                    <p>Migrate your operations seamlessly to secure environments with 99.9% uptime guarantees.</p>
                </div>
                <div class="card">
                    <h3>UIX | Strategy</h3>
                    <p>Prototyping intuitive paths that your internal teams and external customers will love to use.</p>
                </div>
            </div>
        </section>

        <section id="clients" class="page-section">
            <h2>Trusted By Industry Leaders</h2>
            <p style="margin-bottom: 2rem;">We partner with bold brands to achieve disruptive growth. Here are a few who trust us:</p>
            <div class="client-logo-grid">
                <div class="client-brand">Apex Logistics</div>
                <div class="client-brand">Nova FinTech</div>
                <div class="client-brand">Quantum Labs</div>
                <div class="client-brand">Zenith Retail</div>
            </div>
            <div class="card" style="margin-top: 3rem;">
                <p><em>"Working with this squad transformed our digital output. Our operations run 40% faster than last fiscal year."</em></p>
                <strong style="display:block; margin-top:1rem;">- Sarah Jenkins, CTO of Nova FinTech</strong>
            </div>
        </section>

        <section id="inside" class="page-section">
            <h2>Inside Look</h2>
            <p>Welcome to our internal culture pane. A peek behind the curtain at our team, workplace, and operations.</p>
            <div class="grid">
                <div class="card">
                    <h3>Our Culture</h3>
                    <p>We work completely asynchronously, prioritizing deep focus blocks over endless meetings.</p>
                </div>
                <div class="card">
                    <h3>Core Repositories</h3>
                    <p>We open-source 20% of our internal micro-toolkits to give back to the developer community.</p>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <p>&copy; 2026 PHP | Legacy Software Group. All rights reserved.</p>
    </footer>

    <script>
        function navigateTo(sectionId) {
            // 1. Hide all sections
            const sections = document.querySelectorAll('.page-section');
            sections.forEach(section => {
                section.classList.remove('active');
            });

            // 2. Show target section
            const targetSection = document.getElementById(sectionId);
            if (targetSection) {
                targetSection.classList.add('active');
            }

            // 3. Update navbar highlights
            const navLinks = document.querySelectorAll('nav a');
            navLinks.forEach(link => {
                link.classList.remove('active');
            });
            
            const activeLink = document.getElementById(`nav-${sectionId}`);
            if (activeLink) {
                activeLink.classList.add('active');
            }

            // 4. Scroll smoothly back to top of the page view
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    </script>
</body>
</html>