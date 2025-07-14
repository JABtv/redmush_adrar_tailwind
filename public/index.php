<?php
// 1. Récupérer l'URL demandée
$base = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$projectBase = '/redmush_adrar'; // À adapter si le dossier change
if (strpos($request, $projectBase . '/public') === 0) {
    $request = substr($request, strlen($projectBase . '/public'));
} elseif (strpos($request, $projectBase) === 0) {
    $request = substr($request, strlen($projectBase));
}
$request = '/' . ltrim($request, '/');
if ($request === '' || $request === false) {
    $request = '/';
}
// 2. Définir les routes

$routes = [
    '/' => __DIR__ . '/../app/Controllers/home_controller.php',
    '/contact' => __DIR__ . '/../app/Controllers/contact_controller.php',
    '/about' => __DIR__ . '/../app/Controllers/about_controller.php',
];

// 3. Trouver la route correspondante
if (array_key_exists($request, $routes)) {
    require $routes[$request];
} else {
    http_response_code(404);
    echo "ERROR 404: Page non trouvée";
}