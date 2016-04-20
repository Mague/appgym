<?php
// Routes
$app->get('/foo', function ($req, $res, $args) {
    $data = array('name' => 'Bob', 'age' => 40);
    //$newResponse = $res->withJson($data);
    return $res->withHeader(
        'Content-Type',
        'application/json'
    )->withJson($data);
});
$app->get('/api/[{name}]', function ($req, $res, $args) {
    $data = array('name' => $args['name']);
    //$newResponse = $res->withJson($data);
    return $res->withHeader(
        'Content-Type',
        'application/json'
    )->withJson($data);
});

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

