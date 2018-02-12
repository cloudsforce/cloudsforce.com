<?php include_once 'header.php'; ?>

<div class="jumbotron text-white text-right overlay-black" style="background-image: url(<?php echo $file_path; ?>assets/img/bg-morning-cloud.png)">
  <div class="container">
    <h1>Hello, Cloud!</h1>
    <p>Cloudsforce.com is a community driven, pubic cloud resource and knowledge sharing website.</p>
    <p><a class="btn btn-white btn-outline btn-lg" href="https://github.com/cloudsforce/cloudsforce.com" role="button">Contribute</a></p>
  </div>
</div>

<main class="container">
    <article class="col-md-12 main-content" role="main">
        <h1 class="text-center">The Facts of Public Cloud</h1>
    </article>
    <div class="row">
        <div class="promo small-icon">
            <h3>Major Providers</h3>
            <p>
                At June 15th 2017, Gartner published its famous study of so called <a href="https://www.gartner.com/doc/reprints?id=1-2G2O5FC&ct=150519&st=sb">Magic Quadrant</a> for Cloud IaaS providers, worldwide.
                It states that <a href="https://aws.amazon.com">AWS</a>, <a href="https://azure.microsoft.com">Microsoft Azure</a>, <a href="https://cloud.google.com">Google Cloud</a> and <a href="https://alibabacloud.com">Alibaba Cloud</a> are the major four IaaS providers worldwide.
                Surprisingly in 2017 with first time ranked at the top 4, Alibaba Cloud <a href="https://www.cnbc.com/2017/06/15/alibaba-cloud-ready-to-take-on-amazon-microsoft-google-gartner.html">just got a huge vote</a> of confidence in the cloud war against Amazon and Microsoft.
            </p>
            <div class="col-md-12">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <img src="https://www.gartner.com/resources/315200/315215/315215_0001.png;wa4036249d8f17fcd1?reprintKey=1-2G2O5FC" class="img-shadow img-responsive center-block"/>
                    <blockquote>
                        This Magic Quadrant evaluation includes not only the cloud IaaS resources themselves, but also the automated management of those resources, management tools delivered as services and cloud software infrastructure services. The last category includes middleware and databases as a service, up to and including some PaaS capabilities. IaaS and PaaS represent a continuum, as discussed in "Technology Insight for Integrated IaaS and PaaS," and many cloud IaaS customers also use PaaS capabilities from the same provider. Fully integrated offerings are referred to in this Magic Quadrant as "integrated IaaS+PaaS."
                    </blockquote>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <div class="promo small-icon">
            <h3>Market Shares</h3>
            <p>
                According to <a href="https://www.marketingcharts.com/industries/technology-80508">MarketingCharts</a>, here is a chart of IaaS Public Cloud Market Vendors in Size and Growth Ranking.
            </p>
            <div class="col-md-12">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <img src="https://www.marketingcharts.com/wp-content/uploads/2017/09/Gartner-Public-Cloud-Services-Market-in-2016-Oct2017.png" class="img-shadow img-responsive center-block"/>
                    <blockquote>
                        Amazon’s 45.9% growth year-over-year was enough to allow it to capture a greater share of the market, from roughly 40% in 2015.
                        <br /><br />
                        Microsoft is the clear-cut second-largest IaaS vendor, though it trails distantly with 7.1% share of the market. Nonetheless, it achieved more than 61% year-over-year
                        <br /><br />
                        Interestingly enough, the fastest-growing provider is Alibaba. This vendor – predominantly focused on China, but expanding internationally – enjoyed a 126.5% increase in its cloud revenues, to $675 million (3% market share). In so doing, it widened its lead over Google, which itself doubled its revenues in 2016 to $500 million.
                    </blockquote>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <!-- <div class="promo small-icon">
            <h3>Scalability</h3>
        </div> -->
        <div class="promo small-icon">
            <h3>Cost competitiveness</h3>
            <p>
                This section is pending update.
                Refer to <a href="<?=$domain_url;?>cost-calculator">Cost Calculator</a> page for comparing costs on public clouds.
            </p>
        </div>
        <div class="promo small-icon">
            <h3>Multi Cloud Strategy</h3>
            <p>
                According to the <a href="https://www.rightscale.com/lp/state-of-the-cloud"><b>State of the Cloud Report</b></a> published by RightScale, Multi-Cloud adoption is becoming a mainstream strategy for enterprises:
            </p>
            <div class="col-md-12">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <img src="https://www.rightscale.com/web/images/state-of-cloud-report/rightscale-state-of-the-cloud-enterprise-multi-cloud-strategy.png" class="img-shadow img-responsive center-block"/>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
</main>



<?php include_once 'footer.php'; ?>
