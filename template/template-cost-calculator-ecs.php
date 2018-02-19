<?php include_once 'header.php'; ?>


<main class="container">
    <div class="row">

        <article class="col-md-12 main-content" role="main">
            <div class="row">
                <h2>Alibaba ECS Pricing Index<span class="pull-right"><a class="github-button" href="https://github.com/cloudsforce" data-size="large" aria-label="Follow @cloudsforce on GitHub">Follow @cloudsforce</a></span></h2>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            Selecte Site:
                            <select id="site_select">
                                <option value="intl" selected>International</option>
                                <option value="jp">Japan</option>
<!--                                <option value="cn">China</option>-->
                            </select>&nbsp;&nbsp;
<!--                            Selecte Region:-->
<!--                            <select id="region_select">-->
<!--                            </select>-->
                        </div>
                    </div>
                    <div class="row">
                        <section class="panel">
                            <div class="panel-body">
                                <table class="table table-bordered table-striped table-striped">
                                    <thead>
                                    <tr>
                                        <th>Region</th>
                                        <th>Instance Type</th>
                                        <th>Ondemand Price <i>(hourly)</i></th>
                                        <th>Reserved Price <i>(monthly)</i></th>
                                    </tr>
                                    </thead>
                                    <tbody id="pricelist">

                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                    <div class="row">
                        <p>
                            Try this <a href="https://calculator.sbcloud.co.jp/" target="_blank">Cost Calculator <i class="fa fa-external-link"></i> </a> for Alibaba Cloud Japan region, made by SBCloud.
                        </p>
                    </div>
                </div>
            </div>
        </article>

    </div>
</main>



<?php include_once 'footer.php'; ?>

<script>

    var site = "intl";
    switchSite(site);

    $("#site_select").change(function() {
        site = $( this ).val();
        switchSite(site);
    });


    function switchSite(site,os="linux"){
        $("#pricelist").parent('table').dataTable().fnDestroy();
        $("#pricelist").html("<tr><td colspan=\"4\"><span class=\"text-center\"><i class=\"fa fa-spinner fa-spin text-muted\"></i>&nbsp;preparing data, please wait..</span></td></tr>");

        $.ajax({
            type: "GET",
            crossDomain: true,
            url: "https://arena.mobingi.com/api/alicloud/price",
            data: { region : site, product: "ecsinstance" }
        })
        .done(function( msg ) {

            $("#pricelist").empty();

            if(msg[1] && msg[1]['regions']){

                var all_regions = msg[1] && msg[1]['regions'];

                $.each(all_regions, function( index, value ) {
                    //populate regions select
                    // if(value.name == "AP_Japan"){
                    //     $("#region_select").append('<option value="'+value.name+'" selected>'+value.name+'</option>');
                    // }else{
                    //     $("#region_select").append('<option value="'+value.name+'">'+value.name+'</option>');
                    // }
                    //generate instance list
                    if(value.generations[0] && value.generations[0]['io_specs'] && value.generations[0]['io_specs'][0]['price_specs']){
                        var items = value.generations[0]['io_specs'][0]['price_specs'];

                        $.each(items, function(id, info){
                            var cpu = info['item']['cpu'];
                            var ram = info['item']['ram'];
                            var ram_unit = info['item']['ram_unit'];

                            var instance_type = info['item']['spec'];
                            var plot_id = instance_type.split('.').join("");
                            var ondemandHTML_Detail='<table id="'+value.name+plot_id+'" class="table table-hover mb-none" style="display:none;"><thead><tr><th><i>price</i></th><th><i>type</i></th></tr></thead>';
                            ondemandHTML_Detail += '<tr><td><span class="text-success">' + info['prices'][1]['price_text'] + '</span></td><td><i class="text-muted">ECS running Linux/UNIX</i></td></tr>';
                            ondemandHTML_Detail += '</table>';

                            var RIHTML_Detail='<table id="'+value.name+plot_id+'2" class="table table-hover mb-none" style="display:none;"><thead><tr><th><i>price</i></th><th><i>term</i></th><th><i>upfront</i></th><th><i>type</i></th></tr></thead>';

                            RIHTML_Detail += '<tr><td><span class="text-success">' + info['prices'][0]['price_text'] + '</span></td><td><i class="text-muted">1-month</i></td><td><i class="text-muted">full</i></td><td><i class="text-muted">ECS running Linux/UNIX</i></td></tr>';
                            RIHTML_Detail += '</table>';

                            $("#pricelist").append('<tr>\
                                <td width="15%" style="vertical-align:top">' + value.name + '</td> \
                                <td width="15%" style="vertical-align:top"> ' + instance_type + '<br /><span class="text-gray preview">('+cpu+' core, '+ram+' '+ram_unit+' ram)</span></td> \
                                <td width="30%" style="vertical-align:top"><span class="text-success preview">' + info['prices'][1]['price_text'] + '</span> <i class="text-muted preview">linux</i> <span style="cursor:pointer" class="pull-right" onclick="$(this).parent().find(\'table\').toggle();$(this).find(\'i\').toggleClass(\'fa-search-minus\');$(this).parent().find(\'.preview\').toggle();"><i class="fa fa-search-plus text-primary"></i></span><div>' + ondemandHTML_Detail + '</div></td> \
                                <td width="40%" style="vertical-align:top"><span class="text-success preview">' + info['prices'][0]['price_text'] + '</span> <i class="text-muted preview">monthly linux</i> <span style="cursor:pointer" class="pull-right" onclick="$(this).parent().find(\'table\').toggle();$(this).find(\'i\').toggleClass(\'fa-search-minus\');$(this).parent().find(\'.preview\').toggle();"><i class="fa fa-search-plus text-primary"></i></span><div>' + RIHTML_Detail + '</div></td> \
                            </tr>');
                        });


                    }
                });

            }


            if(msg[0] && msg[0]['regions']){

                var all_regions = msg[0] && msg[0]['regions'];

                $.each(all_regions, function( index, value ) {
                    //join the linux instance list

                    if(value.generations[0] && value.generations[0]['io_specs'] && value.generations[0]['io_specs'][0]['price_specs']) {
                        var items = value.generations[0]['io_specs'][0]['price_specs'];

                        $.each(items, function (id, info) {

                            var instance_type = info['item']['spec'];
                            var plot_id = instance_type.split('.').join("");
                            ondemandHTML_Detail2 = '<tr><td><span class="text-success">' + info['prices'][1]['price_text'] + '</span></td><td><i class="text-muted">ECS running Windows</i></td></tr>';
                            $("#"+value.name+plot_id).append(ondemandHTML_Detail2);

                            RIHTML_Detail2 = '<tr><td><span class="text-success">' + info['prices'][0]['price_text'] + '</span></td><td><i class="text-muted">1-month</i></td><td><i class="text-muted">full</i></td><td><i class="text-muted">ECS running Windows</i></td></tr>';
                            $("#"+value.name+plot_id+"2").append(RIHTML_Detail2);

                        });
                    }
                });

            }


            $("#pricelist").parent('table').dataTable({
                "bPaginate": false,
                "bLengthChange": false,
                "bFilter": true,
                "bInfo": false,
                "bAutoWidth": false
            });
            $('div.dataTables_filter input').focus();
            $("#DataTables_Table_0_filter").prepend("<small class='text-muted'>Try type \"Japan sn1.large\"</small>&nbsp;&rarr;&nbsp;");


        });

    }



</script>