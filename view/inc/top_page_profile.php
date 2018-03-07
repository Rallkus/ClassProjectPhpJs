<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Recipes</title>
        <script src="view/assets/js/jquery.min.js"></script>
	       <link href="view/css/style.css" rel="stylesheet" type="text/css" />
		      <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1" />
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" />
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
    	<script type="text/javascript">
        	$(function() {
        		$('#fecha_nacimiento').datepicker({
        			dateFormat: 'dd/mm/yy',
        			changeMonth: true,
        			changeYear: true,
        			yearRange: '1930:2018',
        			onSelect: function(selectedDate) {
        			}
        		});
        	});
	    </script>
	    <link href="view/css/style.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="view/assets/css/main.css" />
      <script src="module/profile/view/validate_change_email.js"></script>
      <script src="module/profile/view/validate_change_name.js"></script>
      <script src="module/profile/view/validate_change_pass.js"></script>
      <script src="module/profile/view/validate_profile.js"></script>
      <link href="view/css/header.css" rel="stylesheet" type="text/css" />

    </head>
    <body class="homepage">
