<?php
/**
* @path https://cloudsforce.com/
*
*/

$app->get('/', function ($request, $response, $args) {

    return $this->view->render($response, 'template-home.php', [
        'title' => 'Cloudsforce.com Homepage'
    ]);

});
