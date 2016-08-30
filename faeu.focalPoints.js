
jQuery(document).ready(function() {
	
	focalPointDatatable = jQuery('#focal_points').dataTable(
                {
                    "aLengthMenu": [[-1], ["All"]]
                    ,"pageLength": 50 
                    ,"iDisplayLength": 50
		}
	);
});

