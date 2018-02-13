<?php include_once 'header.php'; ?>


<main class="container">
    <div class="row">
        <article class="col-md-12 main-content" role="main">
            <header>
                <h1>Cloud Cost Calculator</h1>
                <p>
                    Compare and estimate the dollars before you make a plan.
                    <span class="pull-right"><a class="github-button" href="https://github.com/cloudsforce" data-size="large" aria-label="Follow @cloudsforce on GitHub">Follow @cloudsforce</a></span>
                </p>
                <p>
                    <a href="<?php echo $domain_url; ?>cost-calculator/ec2-pricing"><button type="button" class="btn btn-warning">AWS EC2 Pricing Index</button></a>
                    <a href="<?php echo $domain_url; ?>cost-calculator/ecs-pricing"><button type="button" class="btn btn-info">Alibaba Cloud EC2 Pricing Index</button></a>
                </p>
            </header>
        </article>
    </div>
</main>



<?php include_once 'footer.php'; ?>
