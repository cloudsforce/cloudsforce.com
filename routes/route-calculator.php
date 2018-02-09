<?php
/**
* @path https://cloudsforce.com/
*
*/

$app->get('/cost-calculator', function ($request, $response, $args) {

    return $this->view->render($response, 'template-cost-calculator.php', [
        'title' => 'Cost Calculator of Public Clouds | Cloudsforce.com'
    ]);

});
