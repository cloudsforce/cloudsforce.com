<?php
/**
* @path https://cloudsforce.com/
*
*/

$app->get('/unix-benchmark', function ($request, $response, $args) {

    return $this->view->render($response, 'template-unix-benchmark.php', [
        'title' => 'Unix Benchmark Of Public Cloud Providers'
    ]);

});