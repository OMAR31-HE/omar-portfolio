
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | Omar He.</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header class="navbar">
        <a href="{{ url('/') }}" class="logo">Omar He.</a>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/') }}#about">About</a>
            <a href="{{ url('/projects') }}">Projects</a>
            <a href="{{ url('/') }}#contact">Contact</a>
        </nav>
    </header>

    <main>
        <section class="projects-page">
            <p class="section-label">MY PORTFOLIO</p>
            <h1>Projects I've Worked On</h1>
            <p class="projects-intro">
                A selection of my learning journey and web development work.
            </p>

            <div class="projects-grid">

                <!-- Project 1 -->
                <article class="project-card">
                    <p class="project-number">01 / GRADUATION PROJECT</p>

                    <img
                        src="{{ asset('images/shelter-dashboard.jpeg') }}"
                        alt="Shelter Management System Dashboard"
                        class="project-image"
                    >

                    <h2>Shelter Management System</h2>
                    <p>
                        A web application designed to organize family records,
                        individuals, needs, and shelter activities.
                    </p>

                    <div class="tags">
                        <span>Laravel</span>
                        <span>MySQL</span>
                        <span>Bootstrap</span>
                    </div>

                    <p class="project-role">
                        My role: Front-end development and dashboard UI.
                    </p>

                    <a
                        href="https://github.com/OMAR31-HE/Shelter"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="project-link"
                    >
                        View Source Code ↗
                    </a>
                </article>

                <!-- Project 2 -->
                <article class="project-card">
                    <p class="project-number">02 / NIKE WEBSITE - WORDPRESS</p>

                    <img
                        src="{{ asset('images/nike-website.jpeg') }}"
                        alt="Nike Website built with WordPress"
                        class="project-image"
                    >

                    <h2>Nike Website</h2>
                    <p>
                        A university project built with WordPress to present
                        Nike's brand identity, visual content, and products.
                    </p>

                    <div class="tags">
                        <span>WordPress</span>
                    </div>
                </article>

                <!-- Project 3 -->
                <article class="project-card">
                    <p class="project-number">03 / WEB SECURITY</p>

                    <h2>PHP Security Labs</h2>
                    <p>
                        Practice projects exploring PHP forms, authentication,
                        and web security concepts.
                    </p>

                    <div class="tags">
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>Web Security</span>
                    </div>

                    <p class="project-role">
                        Academic and practical learning projects.
                    </p>
                </article>

            </div>
        </section>
    </main>

    <footer>
        <p>© 2026 Omar Swerih. Built with Laravel.</p>
    </footer>

</body>
</html>
