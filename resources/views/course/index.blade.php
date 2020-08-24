<!DOCTYPE html>
<html>
<head>
	<title>jjjjkjkkkk</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<script src="{{ asset('js/app.js') }}"></script>
</head>
<body>


<div id="appending"></div>

<script type="text/javascript">
	
	$.ajax({
            url:"http://127.0.0.1:8000/api/index",
            type: 'get',
            success: function( data, textStatus, jQxhr ){
            	let display_data = '<div class="scrollable-mobile-discovery-card-list d-flex m-xl-0 flex-nowrap flex-xl-wrap">';

                for(let i = 0; i < data.data.length; i++){
					display_data += '<div class="d-flex flex-column d-card-wrapper"><div class="d-card-hero"><img src="https://www.edx.org/sites/default/files/luca-bravo-xjxwbfso2f0-unsplash-card.jpg" alt=""></div><div class="partner-logo-wrapper"><img src="https://prod-discovery.edx-cdn.org/organization/logos/44022f13-20df-4666-9111-cede3e5dc5b6-2cc39992c67a.png" class="partner-logo" alt="Harvard University"></div><div class="d-card-body"><h3 class="name-heading"><span width="230"><span>'+data.data[i].course_name+'</span><br><span>'+data.data[i].course_provider_name+'</span><span style="position: fixed; visibility: hidden; top: 0px; left: 0px;"></span></span></h3><div class="provider"><span class="sr-only">'+data.data[i].thumbnail_url+' </span><span width="230"><span>'+data.data[i].start_date+'</span><span style="position: fixed; visibility: hidden; top: 0px; left: 0px;"></span></span></div></div><div class="d-card-footer"><div class="card-type"><span>'+data.data[i].end_date+'</span></div></div></div>';
                }
                display_data += '<div>';

                $('#appending').html(display_data);
            	},
            error: function( jqXhr, textStatus, errorThrown ){
                console.log( errorThrown );
            	}
        });


</script>
</body>
</html>