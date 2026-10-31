@extends('layouts.app')

@section('title', 'Skills | Omar He.')

@section('content')
<section class="projects-page">
    <p class="section-label">MY EXPERTISE</p>
    <h1>Skills & Technologies</h1>

    <p class="projects-intro">
        Technologies I use and skills I'm developing through
        practice and real projects.
    </p>

    <div class="projects-grid">
        <article class="project-card">
            <h2>Frontend Development</h2>
            <p>Building responsive and user-friendly interfaces.</p>
            <div class="tags">
                <span>HTML</span>
                <span>CSS</span>
                <span>JavaScript</span>
                <span>Bootstrap</span>
            </div>
        </article>

        <article class="project-card">
            <h2>Backend Development</h2>
            <p>Learning to build web applications and handle data.</p>
            <div class="tags">
                <span>PHP</span>
                <span>Laravel</span>
                <span>Python</span>
                <span>Django</span>
            </div>
        </article>

        <article class="project-card">
            <h2>Databases & Tools</h2>
            <p>Working with databases and development tools.</p>
            <div class="tags">
                <span>MySQL</span>
                <span>Git</span>
                <span>GitHub</span>
                <span>VS Code</span>
            </div>
        </article>
    </div>
</section>
@endsection
