<?php

header('Content-Type: application/json');

require_once __DIR__ . '/config.php';

$baseUrl = env('BASE_URL');

$posts = json_decode(file_get_contents(__DIR__ . '/posts.json'), true);

$img = $baseUrl . '/img/';

foreach ($posts as &$post) {
    if (!empty($post['image'])) {
        $post['image'] = $img . $post['image'];
    }
}


echo json_encode($posts, JSON_PRETTY_PRINT);
?>
