<?php include_once 'header.php'; ?>


<main class="container">
    <div class="row">
        <article class="col-md-12 main-content" role="main">
            <header>
                <h1>
                    UNIXBENCH
                    <span class="pull-right"><a class="github-button" href="https://github.com/cloudsforce" data-size="large" aria-label="Follow @cloudsforce on GitHub">Follow @cloudsforce</a></span>
                </h1>
                <p>
                    The purpose of this unix benchmark is to provide a horizontal comparison of the machine performance provided by different public cloud providers.
                </p>
            </header>
        </article>
    </div>

    <div class="row">
        <h3>2 Core, 3.75 ~ 4G Ram</h3>
        <div class="col-md-12">
            <div class="col-md-7"><canvas id="myChart1" width="400" height="200"></canvas></div>
            <div class="col-md-5">

                <div class="callout callout-info" role="alert">
                    <h4>2 Core, 3.75 ~ 4G Ram</h4>
                    <p>
                        AWS (Tokyo Region):<br />
                        <span class="label label-primary">c4.large</span>
                        <span class="label label-default">2 Core CPU</span>
                        <span class="label label-default">3.75 GiB Ram</span>
                        <span class="label label-default">Ubuntu Server 16.04 LTS</span>
                    </p>
                    <p>
                        Alibaba (Tokyo Region):<br />
                        <span class="label label-primary">ecs.sn1ne.large</span>
                        <span class="label label-default">2 Core CPU</span>
                        <span class="label label-default">4 GiB Ram</span>
                        <span class="label label-default">Ubuntu 16.04 64bit</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <h3>2 Core, 8G Ram</h3>
        <div class="col-md-12">
            <div class="col-md-7"><canvas id="myChart2" width="400" height="200"></canvas></div>
            <div class="col-md-5">

                <div class="callout callout-info" role="alert">
                    <h4>2 Core, 8G Ram</h4>
                    <p>
                        AWS (Tokyo Region):<br />
                        <span class="label label-primary">m4.large</span>
                        <span class="label label-default">2 Core CPU</span>
                        <span class="label label-default">8 GiB Ram</span>
                        <span class="label label-default">Ubuntu Server 16.04 LTS</span>
                    </p>
                    <p>
                        Alibaba (Tokyo Region):<br />
                        <span class="label label-primary">ecs.sn2ne.medium</span>
                        <span class="label label-default">2 Core CPU</span>
                        <span class="label label-default">8 GiB Ram</span>
                        <span class="label label-default">Ubuntu 16.04 64bit</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <h3>2 Core, 15.25 ~ 16G Ram</h3>
        <div class="col-md-12">
            <div class="col-md-7"><canvas id="myChart3" width="400" height="200"></canvas></div>
            <div class="col-md-5">

                <div class="callout callout-info" role="alert">
                    <h4>2 Core, 15.25 ~ 16G Ram</h4>
                    <p>
                        AWS (Tokyo Region):<br />
                        <span class="label label-primary">r4.large</span>
                        <span class="label label-default">2 Core CPU</span>
                        <span class="label label-default">15.25 GiB Ram</span>
                        <span class="label label-default">Ubuntu Server 16.04 LTS</span>
                    </p>
                    <p>
                        Alibaba (Tokyo Region):<br />
                        <span class="label label-primary">ecs.se2ne.large</span>
                        <span class="label label-default">2 Core CPU</span>
                        <span class="label label-default">16 GiB Ram</span>
                        <span class="label label-default">Ubuntu 16.04 64bit</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <h3>2 Core, 4G Ram</h3>
        <div class="col-md-12">
            <div class="col-md-7"><canvas id="myChart4" width="400" height="200"></canvas></div>
            <div class="col-md-5">

                <div class="callout callout-info" role="alert">
                    <h4>2 Core, 4G Ram</h4>
                    <p>
                        AWS (Virginia Region):<br />
                        <span class="label label-primary">c5.large</span>
                        <span class="label label-default">2 Core CPU</span>
                        <span class="label label-default">4 GiB Ram</span>
                        <span class="label label-default">Ubuntu Server 16.04 LTS</span>
                    </p>
                    <p>
                        Alibaba (Hangzhou, China Region):<br />
                        <span class="label label-primary">ecs.c5.large</span>
                        <span class="label label-default">2 Core CPU</span>
                        <span class="label label-default">4 GiB Ram</span>
                        <span class="label label-default">Ubuntu 16.04 64bit</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <h3>2 Core, 8G Ram</h3>
        <div class="col-md-12">
            <div class="col-md-7"><canvas id="myChart5" width="400" height="200"></canvas></div>
            <div class="col-md-5">

                <div class="callout callout-info" role="alert">
                    <h4>2 Core, 8G Ram</h4>
                    <p>
                        AWS (Virginia Region):<br />
                        <span class="label label-primary">m5.large</span>
                        <span class="label label-default">2 Core CPU</span>
                        <span class="label label-default">8 GiB Ram</span>
                        <span class="label label-default">Ubuntu Server 16.04 LTS</span>
                    </p>
                    <p>
                        Alibaba (Hangzhou, China Region):<br />
                        <span class="label label-primary">ecs.g5.large</span>
                        <span class="label label-default">2 Core CPU</span>
                        <span class="label label-default">8 GiB Ram</span>
                        <span class="label label-default">Ubuntu 16.04 64bit</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <h3>8 Core, 60 ~ 61G Ram</h3>
        <div class="col-md-12">
            <div class="col-md-7"><canvas id="myChart6" width="400" height="200"></canvas></div>
            <div class="col-md-5">

                <div class="callout callout-info" role="alert">
                    <h4>8 Core, 60 ~ 61G Ram</h4>
                    <p>
                        AWS (Tokyo Region):<br />
                        <span class="label label-primary">p3.2xlarge</span>
                        <span class="label label-default">8 Core CPU</span>
                        <span class="label label-default">61 GiB Ram</span>
                        <span class="label label-default">Ubuntu Server 16.04 LTS</span>
                    </p>
                    <p>
                        Alibaba (Tokyo Region):<br />
                        <span class="label label-primary">ecs.gn5-c8g1.2xlarge</span>
                        <span class="label label-default">8 Core CPU</span>
                        <span class="label label-default">60 GiB Ram</span>
                        <span class="label label-default">Ubuntu 16.04 64bit</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>

</main>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
<?php include_once 'footer.php'; ?>
<script>
    var ctx1 = document.getElementById("myChart1").getContext('2d');
    var myChart1 = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ["AWS (Single Core)", "AWS (Multi-Core)", "Alibaba (Single Core)", "Alibaba (Multi-Core)"],
            datasets: [{
                label: 'Benchmark value',
                data: [1184, 1910.4, 1391, 3108.2],
                backgroundColor: [
                    'rgba(255, 205, 86, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(153, 102, 255, 0.8)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 0
            }]
        }
    });

    var ctx2 = document.getElementById("myChart2").getContext('2d');
    var myChart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ["AWS (Single Core)", "AWS (Multi-Core)", "Alibaba (Single Core)", "Alibaba (Multi-Core)"],
            datasets: [{
                label: 'Benchmark value',
                data: [1053.3, 1698.1, 1424.1, 2239.1],
                backgroundColor: [
                    'rgba(255, 205, 86, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(153, 102, 255, 0.8)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 0
            }]
        }
    });

    var ctx3 = document.getElementById("myChart3").getContext('2d');
    var myChart3 = new Chart(ctx3, {
        type: 'bar',
        data: {
            labels: ["AWS (Single Core)", "AWS (Multi-Core)", "Alibaba (Single Core)", "Alibaba (Multi-Core)"],
            datasets: [{
                label: 'Benchmark value',
                data: [1048.4, 1701.8, 1414.9, 3136.1],
                backgroundColor: [
                    'rgba(255, 205, 86, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(153, 102, 255, 0.8)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 0
            }]
        }
    });

    var ctx4 = document.getElementById("myChart4").getContext('2d');
    var myChart4 = new Chart(ctx4, {
        type: 'bar',
        data: {
            labels: ["AWS (Single Core)", "AWS (Multi-Core)", "Alibaba (Single Core)", "Alibaba (Multi-Core)"],
            datasets: [{
                label: 'Benchmark value',
                data: [1364.3, 2210.3, 1440.1, 2352.1],
                backgroundColor: [
                    'rgba(255, 205, 86, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(153, 102, 255, 0.8)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 0
            }]
        }
    });

    var ctx5 = document.getElementById("myChart5").getContext('2d');
    var myChart5 = new Chart(ctx5, {
        type: 'bar',
        data: {
            labels: ["AWS (Single Core)", "AWS (Multi-Core)", "Alibaba (Single Core)", "Alibaba (Multi-Core)"],
            datasets: [{
                label: 'Benchmark value',
                data: [1164, 1865.3, 1410.3, 2317.8],
                backgroundColor: [
                    'rgba(255, 205, 86, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(153, 102, 255, 0.8)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 0
            }]
        }
    });

    var ctx6 = document.getElementById("myChart6").getContext('2d');
    var myChart6 = new Chart(ctx6, {
        type: 'bar',
        data: {
            labels: ["AWS (Single Core)", "AWS (Multi-Core)", "Alibaba (Single Core)", "Alibaba (Multi-Core)"],
            datasets: [{
                label: 'Benchmark value',
                data: [1158, 4295.9, 1507.8, 5083.4],
                backgroundColor: [
                    'rgba(255, 205, 86, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(153, 102, 255, 0.8)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 0
            }]
        }
    });

</script>