<?php

include_once 'header.php';

require __DIR__.'/Parsedown.php';
require __DIR__.'/ParsedownExtra.php';
require __DIR__.'/ParsedownExtraPlugin.php';

// $Parsedown = new Parsedown();
$parser = new ParsedownExtraPlugin();

$content = file_get_contents(realpath(__DIR__ . '/..').'/markdown/alibaba.md');


?>


<main class="container">
    <div class="row">
        <article class="col-md-12 main-content" role="main">
            <p>
            <span class="pull-right"><a class="github-button" href="https://github.com/cloudsforce" data-size="large" aria-label="Follow @cloudsforce on GitHub">Follow @cloudsforce</a></span>
            </p>
            <?php echo $parser->text($content); ?>
        </article>
    </div>
</main>


<?php include_once 'footer.php'; ?>
<script type="text/javascript">
    $("table").addClass("table table-bordered table-striped");
    $("img").addClass("img-responsive");
</script>
