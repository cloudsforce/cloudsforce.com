<?php

include_once 'header.php';

require __DIR__.'/Parsedown.php';
require __DIR__.'/ParsedownExtra.php';
require __DIR__.'/ParsedownExtraPlugin.php';

// $Parsedown = new Parsedown();
$parser = new ParsedownExtraPlugin();

if(!isset($_COOKIE['cflang']) || $_COOKIE['cflang'] === 'en') {
    $content = file_get_contents(realpath(__DIR__ . '/..').'/markdown/alibaba.md');
}else{
    $content = file_get_contents(realpath(__DIR__ . '/..').'/markdown/alibaba_'.$_COOKIE['cflang'].'.md');
}



?>


<main class="container">
    <div class="row">
        <article class="col-md-12 main-content" role="main">
            <p>
                <button type="button" class="btn btn-outline btn-xs btn-dark lang_sw" lang="en">English</button>
                <button type="button" class="btn btn-outline btn-xs btn-dark lang_sw" lang="jp">日本語</button>
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
