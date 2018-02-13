<?php include_once 'header.php'; ?>


<main class="container">
    <div class="row">

        <article class="col-md-12 main-content" role="main">
            <div class="row">
                <h2>AWS EC2 Pricing Index<span class="pull-right"><a class="github-button" href="https://github.com/cloudsforce" data-size="large" aria-label="Follow @cloudsforce on GitHub">Follow @cloudsforce</a></span></h2>
                <div class="col-md-12">
                    <div class="row">
                        Selecte Region:
                        <select id="region_select">
                            <option value="APN1">Asia Pacific (Tokyo)</option>
                            <option value="APS3">Asia Pacific (Mumbai)</option>
                            <option value="APN2">Asia Pacific (Seoul)</option>
                            <option value="APS1">Asia Pacific (Singapore)</option>
                            <option value="APS2">Asia Pacific (Sydney)</option>
                            <option value="UGW1">AWS GovCloud (US)</option>
                            <option value="CAN1">Canada (Central)</option>
                            <option value="EUC1">EU (Frankfurt)</option>
                            <option value="EUW1">EU (Ireland)</option>
                            <option value="EUW2">EU (London)</option>
                            <option value="EUW3">EU (Paris)</option>
                            <option value="SAE1">South America (Sao Paulo)</option>
                            <option value="USE1">US East (N. Virginia)</option>
                            <option value="USE2">US East (Ohio)</option>
                            <option value="USW1">US West (N. California)</option>
                            <option value="USW2">US West (Oregon)</option>
                        </select>
                    </div>
                    <div class="row">
                        <section class="panel">
                            <div class="panel-body">
                                <table class="table table-bordered table-striped table-striped">
                                    <thead>
                                    <tr>
                                        <th>Region</th>
                                        <th>Instance Type</th>
                                        <th>Ondemand Price</th>
                                        <th>Reserved Price</th>
                                    </tr>
                                    </thead>
                                    <tbody id="pricelist">

                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </article>

    </div>
</main>



<?php include_once 'footer.php'; ?>

<script>

    var region = "APN1";
    switchRegion(region);


    $("#region_select").change(function(e) {
        region = $( this ).val();
        switchRegion(region);
    });

    //load price file detail
    function switchRegion(region){
        $("#pricelist").parent('table').dataTable().fnDestroy();
        $("#pricelist").html("<tr><td colspan=\"4\"><span class=\"text-center\"><i class=\"fa fa-spinner fa-spin text-muted\"></i>&nbsp;preparing data, please wait..</span></td></tr>");
        $.ajax({
            type: "GET",
            crossDomain: true,
            url: "https://arena.mobingi.com/api/ec2price/" + region
        })
        .done(function( msg ) {
            $("#pricelist").empty();

            $.each(msg, function (type, data){
                if(data['Ondemand'] && data['Ondemand']['RunInstances']){
                    ondemandHTML = '<span class="text-success preview">' + data['Ondemand']['RunInstances'] + '</span> <i class="text-muted preview">linux</i> <span style="cursor:pointer" class="pull-right" onclick="$(this).parent().find(\'table\').toggle();$(this).find(\'i\').toggleClass(\'fa-search-minus\');$(this).parent().find(\'.preview\').toggle();"><i class="fa fa-search-plus text-primary"></i></span>';
                }else{
                    ondemandHTML = '<span class="label label-default preview">N/A</span>';
                }
                if(data['Recurring'] && data['Recurring']['Standard-1'] && data['Recurring']['Standard-1']['Partial-Up'] && data['Recurring']['Standard-1']['Partial-Up']['RunInstances']){
                    riHTML = '<span class="text-success preview">' + data['Recurring']['Standard-1']['Partial-Up']['RunInstances'] + '</span> <i class="text-muted preview">1-yr partial linux</i> <span style="cursor:pointer" class="pull-right" onclick="$(this).parent().find(\'table\').toggle();$(this).find(\'i\').toggleClass(\'fa-search-minus\');$(this).parent().find(\'.preview\').toggle();"><i class="fa fa-search-plus text-primary"></i></span>';
                }else{
                    riHTML = '<span class="label label-default preview">N/A</span>';
                }
                //ondemand detail
                var ondemandHTML_Detail='<table class="table table-hover mb-none" style="display:none;"><thead><tr><th><i>price</i></th><th><i>type</i></th></tr></thead>';
                if(data['Ondemand']){
                    $.each(data['Ondemand'], function (a,b){
                        ondemandHTML_Detail += '<tr><td><span class="text-success">' + b + '</span></td><td><i class="text-muted">' + printCBInstanceCat(a) + '</i></td></tr>';
                    });
                }
                ondemandHTML_Detail += '</table>';
                //RI detail
                var riHTML_Detail='<table class="table table-hover mb-none" style="display:none;"><thead><tr><th><i>price</i></th><th><i>year</i></th><th><i>upfront</i></th><th><i>type</i></th></tr></thead>';
                if(data['Recurring']){
                    // Standard-1
                    if(data['Recurring']['Standard-1'] && data['Recurring']['Standard-1']['Full-Up']){
                        $.each(data['Recurring']['Standard-1']['Full-Up'], function (a,b){
                            riHTML_Detail += '<tr><td><span class="text-success">' + b + '</span></td><td><i class="text-muted">Standard-1</i></td><td><i class="text-muted">full</i></td><td><i class="text-muted">' + printCBInstanceCat(a) + '</i></td></tr>';
                        });
                    }
                    if(data['Recurring']['Standard-1'] && data['Recurring']['Standard-1']['Partial-Up']){
                        $.each(data['Recurring']['Standard-1']['Partial-Up'], function (a,b){
                            riHTML_Detail += '<tr><td><span class="text-success">' + b + '</span></td><td><i class="text-muted">Standard-1</i></td><td><i class="text-muted">partial</i></td><td><i class="text-muted">' + printCBInstanceCat(a) + '</i></td></tr>';
                        });
                    }
                    if(data['Recurring']['Standard-1'] && data['Recurring']['Standard-1']['No-Up']){
                        $.each(data['Recurring']['Standard-1']['No-Up'], function (a,b){
                            riHTML_Detail += '<tr><td><span class="text-success">' + b + '</span></td><td><i class="text-muted">Standard-1</i></td><td><i class="text-muted">no</i></td><td><i class="text-muted">' + printCBInstanceCat(a) + '</i></td></tr>';
                        });
                    }
                    // Standard-3
                    if(data['Recurring']['Standard-3'] && data['Recurring']['Standard-3']['Full-Up']){
                        $.each(data['Recurring']['Standard-3']['Full-Up'], function (a,b){
                            riHTML_Detail += '<tr><td><span class="text-success">' + b + '</span></td><td><i class="text-muted">Standard-3</i></td><td><i class="text-muted">full</i></td><td><i class="text-muted">' + printCBInstanceCat(a) + '</i></td></tr>';
                        });
                    }
                    if(data['Recurring']['Standard-3'] && data['Recurring']['Standard-3']['Partial-Up']){
                        $.each(data['Recurring']['Standard-3']['Partial-Up'], function (a,b){
                            riHTML_Detail += '<tr><td><span class="text-success">' + b + '</span></td><td><i class="text-muted">Standard-3</i></td><td><i class="text-muted">partial</i></td><td><i class="text-muted">' + printCBInstanceCat(a) + '</i></td></tr>';
                        });
                    }
                    // Convertible-1
                    if(data['Recurring']['Convertible-3'] && data['Recurring']['Convertible-3']['Full-Up']){
                        $.each(data['Recurring']['Convertible-3']['Full-Up'], function (a,b){
                            riHTML_Detail += '<tr><td><span class="text-success">' + b + '</span></td><td><i class="text-muted">Convertible-3</i></td><td><i class="text-muted">full</i></td><td><i class="text-muted">' + printCBInstanceCat(a) + '</i></td></tr>';
                        });
                    }
                    if(data['Recurring']['Convertible-3'] && data['Recurring']['Convertible-3']['Partial-Up']){
                        $.each(data['Recurring']['Convertible-3']['Partial-Up'], function (a,b){
                            riHTML_Detail += '<tr><td><span class="text-success">' + b + '</span></td><td><i class="text-muted">Convertible-3</i></td><td><i class="text-muted">partial</i></td><td><i class="text-muted">' + printCBInstanceCat(a) + '</i></td></tr>';
                        });
                    }
                    if(data['Recurring']['Convertible-3'] && data['Recurring']['Convertible-3']['No-Up']){
                        $.each(data['Recurring']['Convertible-3']['No-Up'], function (a,b){
                            riHTML_Detail += '<tr><td><span class="text-success">' + b + '</span></td><td><i class="text-muted">Convertible-3</i></td><td><i class="text-muted">no</i></td><td><i class="text-muted">' + printCBInstanceCat(a) + '</i></td></tr>';
                        });
                    }
                }
                riHTML_Detail += '</table>';
                $("#pricelist").append('<tr>\
                <td width="15%" style="vertical-align:top"> ' + printAwsRegionHTML(region) + '<span style="display:none;">'+region+'</span></td> \
                <td width="15%" style="vertical-align:top"> ' + type + '</td> \
                <td width="35%" style="vertical-align:top"> ' + ondemandHTML + '<div>' + ondemandHTML_Detail + '</div></td> \
                <td width="35%" style="vertical-align:top"> ' + riHTML + '<div>' + riHTML_Detail + '</td>\
                </tr>');
            });

            $("#pricelist").parent('table').dataTable({
                "bPaginate": false,
                "bLengthChange": false,
                "bFilter": true,
                "bInfo": false,
                "bAutoWidth": false
            });
            $('div.dataTables_filter input').focus();
            $("#DataTables_Table_0_filter").prepend("<small class='text-muted'>Try type \"m3.medium\"</small>&nbsp;&rarr;&nbsp;");
        });
    }

    //Print AWS region HTML
    function printAwsRegionHTML(code){
        switch (code) {
            case 'APS3':
                return 'Asia Pacific (Mumbai)';
                break;
            case 'APN2':
                return 'Asia Pacific (Seoul)';
                break;
            case 'APS1':
                return 'Asia Pacific (Singapore)';
                break;
            case 'APS2':
                return 'Asia Pacific (Sydney)';
                break;
            case 'APN1':
                return 'Asia Pacific (Tokyo)';
                break;
            case 'UGW1':
                return 'AWS GovCloud (US)';
                break;
            case 'CAN1':
                return 'Canada (Central)';
                break;
            case 'EUC1':
                return 'EU (Frankfurt)';
                break;
            case 'EUW1': //"EU" on csv
                return 'EU (Ireland)';
                break;
            case 'EUW2':
                return 'EU (London)';
                break;
            case 'EUW3':
                return 'EU (Paris)';
                break;
            case 'SAE1':
                return 'South America (Sao Paulo)';
                break;
            case 'USE1':
                return 'US East (N. Virginia)'; //"" on csv (empty)
                break;
            case 'USE2':
                return 'US East (Ohio)';
                break;
            case 'USW1':
                return 'US West (N. California)';
                break;
            case 'USW2':
                return 'US West (Oregon)';
                break;
        }
    }
    //prints the name of instance category. This is part of consolidate billing
    function printCBInstanceCat(id){
        switch (id) {
            case 'RunInstances':
                return 'Amazon EC2 running Linux/UNIX';
                break;
            case 'RunInstances:000g':
                return 'Amazon EC2 running SUSE Linux';
                break;
            case 'RunInstances:0010':
                return 'Amazon EC2 running Red Hat Enterprise Linux';
                break;
            case 'RunInstances:0002':
                return 'Amazon EC2 running Windows';
                break;
            case 'RunInstances:0006':
                return 'Amazon EC2 running Windows with SQL Server Standard';
                break;
            case 'RunInstances:0102':
                return 'Amazon EC2 running Windows with SQL Server Enterprise';
                break;
            case 'RunInstances:0202':
                return 'Amazon EC2 running Windows with SQL Server Web';
                break;
            case 'RunInstances:0800':
                return 'Amazon EC2 running Windows (Bring your own license)';
                break;
            default:
                return id;
        }
    }
</script>