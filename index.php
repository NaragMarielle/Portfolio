<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Tech Profiles | GROUP 7</title>
</head>
<body>
    <header>
        <h1>PORT7</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="profiles.php">Profiles</a>
            <a href="resume.php">Resumes</a>
            <a href="login.html">Login</a>
            <a href="signup.html">Signup</a>
        </nav>
    </header>
    <main>
        <section class="profiles-grid">
            <h2>Explore Tech Professionals</h2>
            <?php
            $profiles = [
                ["name" => "Jane Smith", "desc" => "Full Stack Developer with 5+ years of experience in developing scalable web applications.", "resume" => "jane_smith_resume.pdf"],
                ["name" => "John Doe", "desc" => "Cybersecurity Specialist with a passion for protecting systems from vulnerabilities.", "resume" => "john_doe_resume.pdf"],
                ["name" => "Lisa Johnson", "desc" => "Data Scientist skilled in Python, R, and machine learning, with a focus on predictive analytics.", "resume" => "lisa_johnson_resume.pdf"],
                ["name" => "Antonio Arciaga", "desc" => "Cloud Engineer specializing in AWS and Azure infrastructure and deployment.", "resume" => "antonio_arciaga_resume.pdf"],
                ["name" => "Mikaela Arnillo", "desc" => "UI/UX Designer focused on creating user-centric and visually appealing interfaces.", "resume" => "mikaela_arnillo_resume.pdf"],
                ["name" => "Marielle Narag", "desc" => "Mobile App Developer proficient in iOS and Android app development with React Native.", "resume" => "marielle_narag_resume.pdf"],
                ["name" => "Genica Reginio", "desc" => "AI Researcher working on innovative neural network models and natural language processing.", "resume" => "genica_reginio_resume.pdf"],
                ["name" => "Chris Evans", "desc" => "Game Developer with expertise in Unity and Unreal Engine for creating immersive experiences.", "resume" => "chris_evans_resume.pdf"],
                ["name" => "Emma Garcia", "desc" => "DevOps Engineer focusing on continuous integration and deployment using Docker and Kubernetes.", "resume" => "emma_garcia_resume.pdf"],
                ["name" => "Andrew Lee", "desc" => "Blockchain Developer creating decentralized applications and smart contracts on Ethereum.", "resume" => "andrew_lee_resume.pdf"],
                ["name" => "Rachel Green", "desc" => "Technical Writer simplifying complex technical concepts for documentation and user guides.", "resume" => "rachel_green_resume.pdf"],
                ["name" => "Luke Thompson", "desc" => "System Administrator managing large-scale networks and servers for efficient operations.", "resume" => "luke_thompson_resume.pdf"],
                ["name" => "Sophia Martinez", "desc" => "Quality Assurance Engineer ensuring software products meet the highest standards.", "resume" => "sophia_martinez_resume.pdf"],
                ["name" => "Daniel Walker", "desc" => "Robotics Engineer designing autonomous systems and advanced robotics solutions.", "resume" => "daniel_walker_resume.pdf"],
                ["name" => "Olivia White", "desc" => "Network Engineer focused on designing secure and efficient network architectures.", "resume" => "olivia_white_resume.pdf"],
            ];

            foreach ($profiles as $profile) {
                echo "<div class='profile-card'>
                        <h3>{$profile['name']}</h3>
                        <p>{$profile['desc']}</p>
                        <a href='profiles.php?user=" . urlencode($profile['name']) . "'>View Profile</a>
                        <a href='resume.php?user=" . urlencode($profile['name']) . "'>View Resume</a>
                        
                      </div>";
            }
            ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 PORT7. All rights reserved.</p>
    </footer>
</body>
</html>
