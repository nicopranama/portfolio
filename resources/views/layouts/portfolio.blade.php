<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --bg-dark: #121212;
            --bg-card: #1e1e1e;
            --text-primary: #ffffff;
            --text-secondary: #b3b3b3;
            --primary-color: #4f46e5;
            --border-color: #333333;
        }
        
        body {
            background-color: var(--bg-dark);
            color: var(--text-primary);
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            padding: 0 20px;
        }
        
        .section {
            margin-bottom: 4rem;
        }
        
        .section-title {
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }
        
        .card {
            background-color: var(--bg-card);
            border-radius: 8px;
            border: 1px solid var(--border-color);
            padding: 1.5rem;
            margin-bottom: 1rem;
            transition: transform 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        .skill-tag {
            background-color: rgba(79, 70, 229, 0.2);
            color: var(--text-primary);
            border-radius: 6px;
            padding: 0.5rem 1rem;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
            display: inline-block;
            font-size: 0.9rem;
        }
        
        .project-card {
            margin-bottom: 1.5rem;
        }
        
        .project-card img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 1rem;
        }
        
        .contact-item {
            background-color: var(--bg-card);
            border-radius: 8px;
            border: 1px solid var(--border-color);
            padding: 1rem;
            padding-left: 2rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }
        
        .contact-item i {
            font-size: 1.25rem;
            margin-right: 1rem;
            color: var(--primary-color);
        }
        
        .stats-container {
            display: flex;
            justify-content: space-between;
            margin: 2rem 0;
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        
        .stat-label {
            font-size: 0.9rem;
            color: var(--text-secondary);
        }
        
        .skill-categories {
            display: flex;
            margin-bottom: 1rem;
        }
        
        .skill-category {
            padding: 0.5rem 1rem;
            margin-right: 0.5rem;
            background-color: transparent;
            color: var(--text-secondary);
            border: none;
            cursor: pointer;
            font-size: 0.9rem;
            border-bottom: 2px solid transparent;
        }
        
        .skill-category.active {
            color: var(--text-primary);
            border-bottom: 2px solid var(--primary-color);
        }
        
        .skill-progress {
            height: 6px;
            background-color: #333;
            border-radius: 3px;
            margin-bottom: 1.5rem;
            overflow: hidden;
        }
        
        .skill-progress-bar {
            height: 100%;
            background-color: var(--primary-color);
        }
        
        .hero-section {
            padding: 5rem 0;
            text-align: center;
        }
        
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1.5rem;
        }
        
        .navbar {
            background-color: var(--bg-dark);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid var(--border-color);
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--text-primary);
        }
        
        .navbar-nav .nav-link {
            color: var(--text-secondary);
            margin-left: 1.5rem;
            font-size: 0.9rem;
        }
        
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: var(--text-primary);
        }
        
        .navbar-toggler {
            border: none;
        }
        
        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .stats-container {
                flex-direction: column;
                gap: 1.5rem;
            }
            
            .skill-categories {
                flex-wrap: wrap;
            }
            
            .skill-category {
                margin-bottom: 0.5rem;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="fas fa-bars" style="color: var(--text-primary);"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <footer class="py-4 text-center">
        <div class="container">
            <p class="mb-0 text-secondary">© Copyright {{ date('Y') }}. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Skill Categories
        document.addEventListener('DOMContentLoaded', function() {
            const skillCategoryButtons = document.querySelectorAll('.skill-category');
            const skillItems = document.querySelectorAll('.skill-item');

            skillCategoryButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const category = this.getAttribute('data-category');
                    
                    // Toggle active class
                    skillCategoryButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Filter skills
                    if (category === 'all') {
                        skillItems.forEach(item => item.style.display = 'block');
                    } else {
                        skillItems.forEach(item => {
                            if (item.getAttribute('data-category') === category) {
                                item.style.display = 'block';
                            } else {
                                item.style.display = 'none';
                            }
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>