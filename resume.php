<?php
session_start();
$profiles = [
    "Jane Smith" => [
        "desc" => "Full Stack Developer with expertise in JavaScript, PHP, and scalable web applications.",
        "email" => "jane.smith@example.com",
        "resume" => "jane_smith_resume.pdf" 
    ],
    "John Doe" => [
        "desc" => "Cybersecurity Specialist with a focus on system vulnerability assessments.",
        "email" => "john.doe@example.com",
        "resume" => "john_doe_resume.pdf"
    ],
    "Lisa Johnson" => [
        "desc" => "Data Scientist with a strong foundation in AI and predictive modeling.",
        "email" => "lisa.johnson@example.com",
        "resume" => "lisa_johnson_resume.pdf"
    ],
    "Antonio Arciaga" => [
        "desc" => "Cloud Engineer specializing in AWS and Azure infrastructure and deployment.", 
        "email" => "antonio.arciaga@example.com",
        "resume" => "antonio_arciaga_resume.pdf"
    ],
    "Mikaela Arnillo" => [
        "desc" => "UI/UX Designer focused on creating user-centric and visually appealing interfaces.", 
        "email" => "mikaela.arnillo@example.com",
        "resume" => "mikaela_arnillo_resume.pdf"
    ],
    "Marielle Narag" => [
        "desc" => "Mobile App Developer proficient in iOS and Android app development with React Native.", 
        "email" => "marielle.narag@example.com",
        "resume" => "marielle_narag_resume.pdf"
    ],
    "Genica Reginio" => [
        "desc" => "AI Researcher working on innovative neural network models and natural language processing.", 
        "email" => "genica.reginio@example.com",
        "resume" => "genica_reginio_resume.pdf"
    ],
    "Chris Evans" => [
        "desc" => "Game Developer with expertise in Unity and Unreal Engine for creating immersive experiences.", 
        "email" => "chris.evans@example.com",
        "resume" => "chris_evans_resume.pdf"
    ],
    "Emma Garcia" => [
        "desc" => "DevOps Engineer focusing on continuous integration and deployment using Docker and Kubernetes.",
        "email" => "emma.garcia@example.com", 
        "resume" => "emma_garcia_resume.pdf"
    ],
    "Andrew Lee" => [
        "desc" => "Blockchain Developer creating decentralized applications and smart contracts on Ethereum.", 
        "email" => "andrew.lee@example.com",
        "resume" => "andrew_lee_resume.pdf"
    ],
    "Rachel Green" => [
        "desc" => "Technical Writer simplifying complex technical concepts for documentation and user guides.", 
        "email" => "rachel.green@example.com",
        "resume" => "rachel_green_resume.pdf"
    ],
    "Luke Thompson" => [
        "desc" => "System Administrator managing large-scale networks and servers for efficient operations.", 
        "email" => "luke.thompson@example.com",
        "resume" => "luke_thompson_resume.pdf"
    ],
    "Sophia Martinez" => [
        "desc" => "Quality Assurance Engineer ensuring software products meet the highest standards.", 
        "email" => "sophia.martinez@example.com",
        "resume" => "sophia_martinez_resume.pdf"
    ],
    "Daniel Walker" => [
        "desc" => "Robotics Engineer designing autonomous systems and advanced robotics solutions.", 
        "email" => "daniel.walker@example.com",
        "resume" => "daniel_walker_resume.pdf"
    ],
    "Olivia White" => [
        "desc" => "Network Engineer focused on designing secure and efficient network architectures.", 
        "email" => "olivia.white@example.com",
        "resume" => "olivia_white_resume.pdf"
    ],
];

if (isset($_GET['user']) && array_key_exists($_GET['user'], $profiles)) {
    $user = $_GET['user']; 
    $profile = $profiles[$user]; 
} else {
    echo "Profile not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Resume of <?= htmlspecialchars($user) ?></title>
</head>
<body>
    <header>
        <h1>Resume of <?= htmlspecialchars($user) ?></h1>
        <nav>
            <a href="index.php">Back to Homepage</a>
            <a href="profiles.php?user=<?= urlencode($user) ?>">Back to Profile</a>
        </nav>
    </header>
    <main>
        <h2>Resume of Professional <?= htmlspecialchars($user) ?></h2>
        <p>Position: <?= htmlspecialchars($profile['desc']) ?></p>
        <p>Email: <a href="mailto:<?= htmlspecialchars($profile['email']) ?>"><?= htmlspecialchars($profile['email']) ?></a></p>
        <p><a href="resumes/<?= htmlspecialchars($profile['resume']) ?>" download>Download Resume</a></p>
    </main>
</body>
</html>
