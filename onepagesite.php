<?php
$sections = [
    'accueil' => 'Accueil',
    'services' => 'Nos Services',
    'contact' => 'Contactez-nous'
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site One Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }
        body {
            font-family: Arial, sans-serif;
        }
        nav {
            position: fixed;
            width: 100%;
            background: #333;
            padding: 10px 0;
            text-align: center;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }
        section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2em;
            text-align: center;
            padding: 20px;
        }
        #accueil { 
            background: lightblue;
            animation: fadeIn 2s ease-in-out;
        }
        #services { background: lightcoral; }
        #contact { background: lightgreen; }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @media (max-width: 768px) {
            nav {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            nav a {
                display: block;
                margin: 10px 0;
            }
            section {
                font-size: 1.5em;
                padding: 40px;
            }
        }
    </style>
</head>
<body>
    <nav>
        <?php foreach ($sections as $id => $name): ?>
            <a href="#<?= $id ?>"><?= $name ?></a>
        <?php endforeach; ?>
    </nav>
    
    <?php foreach ($sections as $id => $name): ?>
        <section id="<?= $id ?>"> <?= $name ?> </section>
    <?php endforeach; ?>
</body>
</html>
