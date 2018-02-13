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

$app->get('/cost-calculator/ec2-pricing', function ($request, $response, $args) {

    return $this->view->render($response, 'template-cost-calculator-ec2.php', [
        'title' => 'AWS EC2 Pricing Index | Cloudsforce.com'
    ]);

});