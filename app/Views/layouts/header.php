<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'RedMush' ?></title>
    <link href="/redmush_adrar/public/css/style.css" rel="stylesheet">
</head>
<body">
    <header class="flex sticky top-0 flex-col bg-white ">
        <p class="flex justify-center bg-yellow-300">/!\ Site factif /!\</p>
        <p class="bg-black text-white flex justify-center">FRAIS DE PORT À PARTIR DE 80e</p>
        <nav class="flex justify-between w-full items-center px-6">
            <section>
                <?php
                $label = 'USER';
                $class = 'bg-red-500 text-white px-4 py-2 rounded';
                $popover = '<p>Menu utilisateur</p><a href="#">Profil</a><br><a href="#">Déconnexion</a>';
                include __DIR__ . '/../components/popover_button.php';
                
                $label = 'Shop';
                $class = 'bg-red-500 text-white px-4 py-2 rounded';
                $popover = '<p>Menu utilisateur</p><a href="#">Profil</a><br><a href="#">Déconnexion</a>';
                include __DIR__ . '/../components/popover_button.php';
                ?>
                
            </section>

            <a class="flex items-center" href="/redmush_adrar ">
                <img class="h-20" src="../../../redmush_adrar/public/assets/images/Logo/logoGimpB.svg" alt="Logo redmush">
                <h1 class="hidden sm:block sm:text-2xl lg:text-4xl">RedMush</h1>
            </a>

            <section class="flex items-center">
                <form class="flex items-center absolute right-20" action="" method="get">
                    <input type="text" name="search" id="search" placeholder="Rechercher un produit" class="px-4 py-2 border rounded">
                    <button type="submit" class="px-4 py-2 cursor-pointer transition">
                        <img class="h-10 w-10" src="public/assets/icons/black/iconSearch.png" alt="">
                    </button>
                </form>
                <?php
                $label = 'Shop';
                $class = 'bg-red-500 text-white px-4 py-2 rounded';
                $popover = '<p>Menu utilisateur</p><a href="#">Profil</a><br><a href="#">Déconnexion</a>';
                include __DIR__ . '/../components/popover_button.php';
                ?>
            </section>
        </nav>
    </header>
