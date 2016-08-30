/* included javascript to faeu */

// using jQuery 1.4.4. from cdm_dataportal 
// hence we have to use old-style syntax

jQuery(document).ready(function () {

    var debugmode = true;

    var taxon = jQuery("#content h1 span.Taxon span.name span.ZoologicalName").text();
    console.log("TAXON: " + taxon);

    //console.log("initializing dataTables...");
    if (jQuery("#distribution_europe").attr("id")) {
        var europeDatatable = jQuery('#distribution_europe').dataTable(
                {"aLengthMenu": [[10, 30, -1], [10, 30, "All"]]}
        );
        europeDatatable.fnSort([[1, "desc"], [0, "asc"]]);
    }

    if (jQuery("#distribution_world").attr("id")) {
        var worldDatatable = jQuery('#distribution_world').dataTable(
                {"aLengthMenu": [[-1], ["All"]]}
        );
        worldDatatable.fnSort([[1, "desc"], [0, "asc"]]);
    }

    // add link to scroll back to menu
    var scroll2top = "<div class='scroll-up'><a href='#page-toc'><img alt='to top' src='/sites/fauna.biodiv.naturkundemuseum-berlin.de/modules/faeu/icon_top.png' width='24' /></a></div>";
    jQuery("#experts").append(scroll2top);
    jQuery("#synonymy").append(scroll2top);
    jQuery("#distribution_world_wrapper").append(scroll2top);
    jQuery("#distribution_europe_wrapper").append(scroll2top);


    function exportTableToCSV($table, filename) {

        var $rows = $table.find('tr:has(td)'),
                // Temporary delimiter characters unlikely to be typed by keyboard
                // This is to avoid accidentally splitting the actual contents
                tmpColDelim = String.fromCharCode(11), // vertical tab character
                tmpRowDelim = String.fromCharCode(0), // null character

                // actual delimiter characters for CSV format
                colDelim = '","',
                rowDelim = '"\r\n"',
                // Grab text from table into CSV formatted string
                csv = '"' + $rows.map(function (i, row) {
                    var $row = jQuery(row),
                            $cols = $row.find('td');

                    return $cols.map(function (j, col) {
                        var $col = jQuery(col),
                                text = $col.text();

                        return text.replace(/"/g, '""'); // escape double quotes

                    }).get().join(tmpColDelim);

                }).get().join(tmpRowDelim)
                .split(tmpRowDelim).join(rowDelim)
                .split(tmpColDelim).join(colDelim) + '"',
                // Data URI
                csvData = 'data:application/csv;charset=utf-8,' + encodeURIComponent(csv);

        jQuery(this)
                .attr({
                    'download': filename,
                    'href': csvData,
                    'target': '_blank'
                });

    }

    function generateSlug(value) {
        // 1) convert to lowercase
        // 2) remove dashes and pluses
        // 3) replace spaces with dashes
        // 4) remove everything but alphanumeric characters and dashes
        return value.toLowerCase().replace(/-+/g, '').replace(/\s+/g, '-').replace(/[^a-z0-9-]/g, '');
    }



    // jQuery("#export_distribution_europe").on("click", function (event) 
    jQuery("#export_distribution_europe a").click(function (event)
    {
        //console.log("exporting: " + taxon);
        // does not work in 1.9.4
        //jQuery('#distribution_europe').DataTable().page.len(-1).draw();
        // workaround: display the whole table as a duplicate  with display:none
        //var taxon = generateSlug(jQuery("#content h1 span.Taxon span.name span.ZoologicalName").text());
        var taxonSlug = generateSlug(taxon);
        exportTableToCSV.apply(this, [jQuery('#distribution_europe_total'), taxonSlug + '_distribution_europe.csv']);
        // IF CSV, don't do event.preventDefault() or return false
        // We actually need this to be a typical hyperlink
    });


    //jQuery("#export_distribution_world").on("click", function (event) {
    jQuery("#export_distribution_world a").click(function (event)
    {
        //console.log("exporting: " + taxon);
        //var taxon = generateSlug(jQuery("#content h1 span.Taxon span.name span.ZoologicalName").text());
        var taxonSlug = generateSlug(taxon);
        exportTableToCSV.apply(this, [jQuery('#distribution_world'), taxonSlug + '_distribution_world.csv']);
        // IF CSV, don't do event.preventDefault() or return false
        // We actually need this to be a typical hyperlink
    });

    // for debugging only: display whole distribution as JSON object
    console.log(jQuery("#dist").text());


    jQuery("#dist-view").JSONView(jQuery("#dist").text(), {collapsed: true});
    if (debugmode) {
        jQuery("#dist-view").show();
    }
    console.log("distribution as JSON object loaded");



    var commonNamesDOM;
    commonNamesDOM = jQuery("#block-cdm-dataportal-feature-common-name").find("span.language-label, span.DescriptionElement");

    nodeNames = [];
    jQuery.each(commonNamesDOM, function (i, el) {

        if (el.className === "language-label") {
            nodeNames[i] = "\n<tr><td>" + el.innerText + "</td><td>";
        } else if (el.className.startsWith("DescriptionElement")) {
            nodeNames[i] = el.innerText;
        }

    });

    var styledCommonNames = "";
    styledCommonNames = "<table id='common-names-table' class='distributionlist_table'><caption></caption>"
            + "<thead><tr><th class='distributionlist_head'>Language<th class='distributionlist_head'>Common Name</tr></thead>"
            + nodeNames.join("")
            + "</table>";

    jQuery("#block-cdm-dataportal-feature-common-name div.common-taxon-name").html(styledCommonNames);


    jQuery("#block-cdm-dataportal-feature-common-name").append(scroll2top);
    jQuery("#block-cdm-dataportal-feature-bibliography").append(scroll2top);

    jQuery(".scroll-up a").click(function (event) {
        event.preventDefault();
        jQuery('html, body').animate({
            scrollTop: jQuery("#page-toc").offset().top
        }, 2000);
    });

    if (jQuery("#common-names-table").attr("id")) {
        var commonNamesDatatable = jQuery('#common-names-table').dataTable(
                {"aLengthMenu": [[-1], ["All"]]}
        );
        commonNamesDatatable.fnSort([[1, "desc"], [0, "asc"]]);
     }


    // rechte Spalte
    var ext_links;
    ext_links = jQuery("#block-ext-links-0").find("div.category");
    nodeNames = [];
    jQuery.each(ext_links, function (i, el) {
            nodeNames[i] = el.innerHTML.replace("</h5>","</h5><div>") + "</div>";
    });
    jQuery("#block-ext-links-0").html("<h2 class='block__title block-title'>External links</h2>" + nodeNames.join(""));
    jQuery("#block-ext-links-0").accordion({
        header: "h5"
    });
    console.log("ext_links is now an accordion");


    // hack to show/hide user login form
    jQuery(".pane-user-login").hide();
    jQuery(".panels-flexible-region-9-ft2-inside").append("<div><a id='show-login'>___</a></div>");
    jQuery("#show-login").click(function (event) {
        event.preventDefault();
        jQuery(".pane-user-login").toggle();
    });

    console.log("file faeu.js loaded.\n----------------------\n");
});
