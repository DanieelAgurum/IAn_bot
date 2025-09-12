<?php
function renderBreadcrumbs()
{
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $segments = array_filter(explode('/', trim($path, '/')));

    $exclude = ['ian_bot', 'vista'];

    $segments = array_filter($segments, function ($seg) use ($exclude) {
        return !in_array($seg, $exclude);
    });

    $baseUrl = '/ian_bot/';

    echo '<nav aria-label="breadcrumb">';
    echo '<ol class="breadcrumb">';

    echo '<li class="breadcrumb-item"><a href="' . $baseUrl . 'index.php">Inicio</a></li>';

    $url = $baseUrl;
    $lastSegment = end($segments);

    foreach ($segments as $segment) {
        $label = preg_replace('/\.php$/', '', $segment);

        $url .= $segment . '/';

        if ($segment === $lastSegment) {
            echo '<li class="breadcrumb-item active" aria-current="page">' . ucfirst($label) . '</li>';
        } else {
            echo '<li class="breadcrumb-item"><a href="' . $url . '">' . ucfirst($label) . '</a></li>';
        }
    }

    echo '</ol>';
    echo '</nav>';
}
