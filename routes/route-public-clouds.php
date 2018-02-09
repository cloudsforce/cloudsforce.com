<?php
/**
* @path https://cloudsforce.com/public-clouds/..
*
*/


$app->group('/public-clouds', function () {

    $this->get('/aws', function ($request, $response, $args) {
        return $this->view->render($response, '/template-aws.php', [
            'title' => 'AWS - Public Clouds'
        ]);
    });

    $this->get('/azure', function ($request, $response, $args) {
        return $this->view->render($response, '/template-azure.php', [
            'title' => 'Azure - Public Clouds'
        ]);
    });

    $this->get('/alicloud', function ($request, $response, $args) {
        return $this->view->render($response, '/template-alibaba.php', [
            'title' => 'Alibaba Cloud - Public Clouds'
        ]);
    });

});
