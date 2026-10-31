<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Omar Swerih | Web Developer</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <header class="navbar">
        <a href="#home" class="logo">Omar Swerih</a>

        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#project">Projects</a>
            <a href="#skills">Skills</a>
            <a href="#contact">Contact</a>

        </nav>
    </header>

    <main>
        <section class="hero" id="home">

            <div class="hero-content">
                <p class="eyebrow">
                    <span class="status-dot"></span>
                    WEB COMPUTING STUDENT
                </p>

                <h1>
                    Hi, I'm <span>Omar</span><br>
                    I Build Web Applications<br>
                    That <span>Make an Impact.</span>
                </h1>

                <p class="description">
                    I'm a Web Computing student passionate about
                    building modern, user-friendly web applications
                    and turning ideas into practical solutions.
                </p>

                <div class="hero-buttons">
                    <a href="#projects" class="btn btn-primary">
                        View My Projects ↗
                    </a>

                    <a href="#contact" class="btn btn-outline">
                        Contact Me
                    </a>
                </div>
            </div>

            <div class="hero-image">
                <div class="image-glow"></div>

                <img
                    src="{{ asset('images/profile.jpeg') }}"
                    alt="Omar He - Web Developer">

                <div class="code-badge">&lt;/&gt;</div>
            </div>

        </section>

        <section class="about" id="about">
            <div>
                <p class="section-label">ABOUT ME</p>
                <h2>Turning Ideas Into<br>
                    <span>Web Solutions.</span>
                </h2>
            </div>

            <p class="about-text">
                I'm Omar Hesham Abo Swerih I was born on 31/3/2004.
                I'm a Web Computing student interested in web
                development, clean user interfaces, and building
                useful digital products. I'm continuously learning
                and improving my development skills.
            </p>
        </section>


        <section class="project" id="project">
            <p class="section-label">MY WORK</p>
            <h2>Selected Projects</h2>

            <div class="projects-grid">

                <!-- Shelter Project -->
                <article class="project-card">
                    <p class="project-number">01 / GRADUATION PROJECT</p>

                    <img
                        src="{{ asset('images/shelter-dashboard.jpeg') }}"
                        alt="Shelter Management System Dashboard"
                        class="project-image">

                    <h3>Shelter Management System</h3>

                    <p>
                        A web application designed to organize family records,
                        individuals, needs, and shelter activities.
                    </p>

                    <div class="tags">
                        <span>Laravel</span>
                        <span>MySQL</span>
                        <span>Bootstrap</span>
                    </div>

                    <a href="{{ url('/projects') }}" class="project-link">
                        View All Projects ↗
                    </a>
                </article>

                <!-- Nike Website Project -->
                <article class="project-card">
                    <p class="project-number">02 / WORDPRESS PROJECT</p>

                    <img
                        src="{{ asset('images/nike-website.jpeg') }}"
                        alt="Nike Website"
                        class="project-image">

                    <h3>Nike Website</h3>

                    <p>
                        A university project built with WordPress to showcase
                        Nike's brand identity, products, and visual content.
                    </p>

                    <div class="tags">
                        <span>WordPress</span>
                    </div>

                    <a href="{{ url('/projects') }}" class="project-link">
                        View Project Details ↗
                    </a>
                </article>

                <!-- PHP Security Project -->
                <article class="project-card">
                    <p class="project-number">03 / WEB SECURITY</p>

                    <h3>PHP Security Labs</h3>

                    <p>
                        Practical exercises in PHP forms, authentication,
                        database interaction, and web security concepts.
                    </p>

                    <div class="tags">
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>Web Security</span>
                    </div>

                    <a href="{{ url('/projects') }}" class="project-link">
                        View Project Details ↗
                    </a>
                </article>


            </div>
        </section>

        <section id="skills" class="skills-section">
            <p class="section-label">WHAT I WORK WITH</p>
            <h2>My Skills</h2>
            <p>Technologies and tools I use in my web development journey.</p>

            <div class="skills-grid">
                <div class="skill-card">HTML</div>
                <div class="skill-card">CSS</div>
                <div class="skill-card">JavaScript</div>
                <div class="skill-card">PHP</div>
                <div class="skill-card">Laravel</div>
                <div class="skill-card">MySQL</div>
                <div class="skill-card">WordPress</div>
                <div class="skill-card">Bootstrap</div>
            </div>
        </section>

        <div class="contact-links">

            <!-- Email -->
            <a href="mailto:omaree852@gmail.com" class="contact-link">
                <i class="bi bi-envelope"></i>
                Email Me
            </a>

            <!-- GitHub -->
            <a href="https://github.com/OMAR31-HE"
                target="_blank"
                rel="noopener noreferrer"
                class="contact-link">
                <i class="bi bi-github"></i>
                GitHub
            </a>

            <!-- LinkedIn -->
            <a href="https://www.linkedin.com/in/omar-he-0b7799372?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                target="_blank"
                rel="noopener noreferrer"
                class="contact-link">
                <i class="bi bi-linkedin"></i>
                LinkedIn
            </a>

        </div>


    </main>

    <footer>
        <p>© 2026 Omar Swerih. Built with Laravel.</p>
    </footer>

</body>

</html>
