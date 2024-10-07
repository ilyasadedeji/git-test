<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ilyas Qamarudeen Adedeji - Portfolio</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        :root {
            --background-color: #f0f2f5;
            --text-color: #333;
            --primary-color: #2980b9;
            --secondary-color: #2C3E50;
            --nav-bg-color: var(--secondary-color);
            --nav-text-color: #fff;
            --section-bg-color: #fff;
            --footer-bg-color: var(--secondary-color);
        }

        [data-theme="dark"] {
            --background-color: #181818;
            --text-color: #f1f1f1;
            --primary-color: #3498db;
            --secondary-color: #121212;
            --nav-bg-color: var(--secondary-color);
            --nav-text-color: #f1f1f1;
            --section-bg-color: #242424;
            --footer-bg-color: var(--secondary-color);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            transition: background-color 0.3s, color 0.3s;
            scroll-behavior: smooth;
        }

        nav {
            background-color: var(--nav-bg-color);
            padding: 1rem 2rem;
            position: sticky;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.3s;
        }

        nav a {
            color: var(--nav-text-color);
            text-decoration: none;
            font-weight: 600;
            margin: 0 10px;
        }

        nav a:hover {
            color: var(--primary-color);
        }

        .theme-toggle {
            cursor: pointer;
            font-size: 1.5rem;
            color: var(--nav-text-color);
        }

        .header {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 100px 20px;
            background: linear-gradient(120deg, var(--primary-color), #3498db);
            color: white;
            animation: fadeIn 1.5s ease-in-out;
        }

        .header img {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            margin-bottom: 20px;
            border: 5px solid #fff;
            transition: transform 0.3s;
        }

        .header img:hover {
            transform: scale(1.1);
        }

        .header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .header p {
            font-size: 1.2rem;
        }

        .content {
            display: grid;
            grid-template-columns: 1fr;
            padding: 50px 20px;
            gap: 40px;
            background-color: var(--background-color);
            transition: background-color 0.3s;
        }

        .section-title {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 30px;
            text-align: center;
            font-weight: 600;
        }

        .skills ul,
        .projects ul {
            list-style: none;
            padding: 0;
        }

        .skills li,
        .projects li {
            padding: 10px;
            background: var(--section-bg-color);
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
            transition: transform 0.3s ease, background-color 0.3s;
        }

        .skills li:hover,
        .projects li:hover {
            transform: scale(1.05);
        }

        .career-goals p {
            font-size: 1.1rem;
            color: var(--text-color);
            text-align: center;
        }

        .contact p a {
            color: var(--primary-color);
            text-decoration: none;
            transition: color 0.3s;
        }

        .contact p a:hover {
            color: #3498db;
        }

        .footer {
            background-color: var(--footer-bg-color);
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 1rem;
            margin-top: 40px;
            transition: background-color 0.3s;
        }

        /* Animations */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .skills li,
        .projects li,
        .contact p,
        .career-goals p {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeIn 1s forwards;
        }

        .skills li:nth-child(1) {
            animation-delay: 0.2s;
        }

        .skills li:nth-child(2) {
            animation-delay: 0.4s;
        }

        .skills li:nth-child(3) {
            animation-delay: 0.6s;
        }

        .projects li:nth-child(1) {
            animation-delay: 0.2s;
        }

        .projects li:nth-child(2) {
            animation-delay: 0.4s;
        }

        .projects li:nth-child(3) {
            animation-delay: 0.6s;
        }
    </style>
</head>

<body data-theme="light">
    <!-- Navbar -->
    <nav>
        <a href="#">Ilyas Qamarudeen Adedeji</a>
        <div>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#career-goals">Career Goals</a>
            <a href="#contact">Contact</a>
        </div>
        <!-- Dark mode toggle button -->
        <div class="theme-toggle" id="themeToggle">
            <i class="fas fa-moon"></i>
        </div>
    </nav>

    <!-- Header Section -->
    <div class="header">
        <img src="images/profile-image.jpg" alt="Profile Photo">
        <h1>Ilyas Qamarudeen Adedeji</h1>
        <p>Software Engineering Student at Lincoln University Malaysia, Nsuk Campus</p>
        <p>"I'm a junior developer, just starting to learn Laravel, and I'm enjoying it so far!"</p>
    </div>

    <!-- Main Content -->
    <div class="container content">
        <!-- About Section -->
        <section id="about" class="about">
            <h2 class="section-title">About Me</h2>
            <p>As a student of Software Engineering, I am passionate about coding practices that ensure efficiency and scalability. I continuously seek out opportunities to learn new technologies and improve my skills.</p>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="skills">
            <h2 class="section-title">Skills</h2>
            <ul>
                <li>Programming: PHP</li>
                <li>Frameworks: Laravel and blade as laravel template engine, we aslo learn component , slot and routing </li>
                <li>The folder structure : views folder is the front-end files that will contain the frot-end code in the case it's named portfolio.blade.php

    images/# Store your static images
- resources/
    - views/
        - layouts/        # Blade layout files (e.g., header, footer, main layout)
        - components/     # Blade components for reusability (e.g., navbar, buttons)
        - pages/          # Blade files for specific pages (e.g., about.blade.php, contact.blade.php)
    - css/                # Optional folder for storing SASS/SCSS files if needed
    - js/                 # Optional folder for custom JavaScript specific to the front-end
- routes/
    - web.php             # Define routes and assign view templates here
- storage/
- vendor/

                </li>
            </ul>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="projects">
            <h2 class="section-title">Projects</h2>
            <ul>
                <li>Project 1: Description of the project and technologies used.</li>
                <li>Project 2: Description of the project and technologies used.</li>
                <li>Project 3: Description of the project and technologies used.</li>
            </ul>
        </section>

        <!-- Career Goals Section -->
        <section id="career-goals" class="career-goals">

       
        <x-greetings/>
        
            <h2 class="section-title">Career Goals</h2>
            <p>My goal is to become a proficient software engineer and produce efficient solutions that positively impact organizations and users alike.</p>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact">
            <h2 class="section-title">Contact</h2>
            <p>Email: ilyas@example.com</p>
            <p>LinkedIn: <a href="https://linkedin.com/in/ilyas-profile">linkedin.com/in/ilyas-profile</a></p>
            <p>GitHub: <a href="https://github.com/ilyas-profile">github.com/ilyas-profile</a></p>
        </section>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Ilyas Qamarudeen Adedeji. All rights reserved.</p>
    </div>

    <!-- Theme Toggle Script -->
    <script>
        const themeToggle = document.getElementById('themeToggle');
        const body = document.body;
        let theme = localStorage.getItem('theme') || 'light';

        // Set initial theme
        body.setAttribute('data-theme', theme);

        themeToggle.addEventListener('click', () => {
            theme = body.getAttribute('data-theme') === 'light' ? 'dark' : 'light';
            body.setAttribute('data-theme', theme);
            localStorage.setItem('theme', theme);
            themeToggle.innerHTML = theme === 'dark' ? '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';
        });
    </script>
</body>

</html>



