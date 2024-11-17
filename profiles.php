<?php
    $profiles = [
        "Jane Smith" => ["desc" => "Full Stack Developer with expertise in JavaScript, PHP, and scalable web applications.", "email" => "jane.smith@example.com"],
        "John Doe" => ["desc" => "Cybersecurity Specialist with a focus on system vulnerability assessments.", "email" => "john.doe@example.com"],
        "Lisa Johnson" => ["desc" => "Data Scientist with a strong foundation in AI and predictive modeling.", "email" => "lisa.johnson@example.com"],
        "Antonio Arciaga" => ["desc" => "Cloud Engineer specializing in AWS and Azure infrastructure and deployment.", "email" => "antonio.arciaga@example.com"],
        "Mikaela Arnillo" => ["desc" => "UI/UX Designer focused on creating user-centric and visually appealing interfaces.", "email" => "mikaela.arnillo@example.com"],
        "Marielle Narag" => ["desc" => "Mobile App Developer proficient in iOS and Android app development with React Native.", "email" => "marielle.narag@example.com"],
        "Genica Reginio" => ["desc" => "AI Researcher working on innovative neural network models and natural language processing.", "email" => "genica.reginio@example.com"],
        "Chris Evans" => ["desc" => "Game Developer with expertise in Unity and Unreal Engine for creating immersive experiences.", "email" => "chris.evans@example.com"],
        "Emma Garcia" => ["desc" => "DevOps Engineer focusing on continuous integration and deployment using Docker and Kubernetes.", "email" => "emma.garcia@example.com"],
        "Andrew Lee" => ["desc" => "Blockchain Developer creating decentralized applications and smart contracts on Ethereum.", "email" => "andrew.lee@example.com"],
        "Rachel Green" => ["desc" => "Technical Writer simplifying complex technical concepts for documentation and user guides.", "email" => "rachel.green@example.com"],
        "Luke Thompson" => ["desc" => "System Administrator managing large-scale networks and servers for efficient operations.", "email" => "luke.thompson@example.com"],
        "Sophia Martinez" => ["desc" => "Quality Assurance Engineer ensuring software products meet the highest standards.", "email" => "sophia.martinez@example.com"],
        "Daniel Walker" => ["desc" => "Robotics Engineer designing autonomous systems and advanced robotics solutions.", "email" => "daniel.walker@example.com"],
        "Olivia White" => ["desc" => "Network Engineer focused on designing secure and efficient network architectures.", "email" => "olivia.white@example.com"],
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
    <title>Profile</title>
</head>
<body>
    <header>
        <h1><?= htmlspecialchars($user) ?>'s Profile</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="resume.php?user=<?= urlencode($user) ?>">View Resume</a>
        </nav>
    </header>
    <main>
        <h2>About <?= htmlspecialchars($user) ?></h2>
        <p><?= htmlspecialchars($profile['desc']) ?></p>
        <p>Email: <a href="mailto:<?= htmlspecialchars($profile['email']) ?>"><?= htmlspecialchars($profile['email']) ?></a></p>
    </main>
</body>
</html>
