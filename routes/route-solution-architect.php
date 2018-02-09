<?php
/**
* @path https://cloudsforce.com/
*
*/

$app->get('/solution-architect', function ($request, $response, $args) {

    return $this->view->render($response, 'template-solution-architect.php', [
        'title' => 'Cloudsforce.com Solution Architect'
    ]);

});
