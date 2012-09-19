<?php /*

	This is the main page view

*/ ?>

<div id="container">
	<div id="leftContainer">
		<div class="mainTitle">
			<h1 class="title1">4</h1>
			<h1 class="title2">ERASMUS</h1>
		</div>

		<script type="text/javascript">
			$(function(){

				// Datepicker
				$('#datepicker').datepicker({
					inline: true
				});

				//hover states on the static widgets
				$('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); },
					function() { $(this).removeClass('ui-state-hover'); }
				);

			});
		</script>
		<div id="datepicker"></div>

		
	</div>
	<div id="rightContainer">
		<div id="loginBar">
			<p>Logged as <strong>Carlos Baraza</strong> at <strong>Waterford Institute of Technology</strong> ▼</p>

		</div>
		<div id="content">
			<div id="leftContent">
				<div class="bar">
					<div class="button leftButton"><p>Featured Events ▼</p></div>
					<div class="button rightButton"><p><img src="extras/img/icons/addEvent.png" class="icon">Add Event</p></div>
				</div>
				<div class="event"><div class="eventImg"></div></div>
				<div class="event"><div class="eventImg"></div></div>
				<div class="event"><div class="eventImg"></div></div>
				<div class="event"><div class="eventImg"></div></div>
				<div class="event"><div class="eventImg"></div></div>
				<div class="event"><div class="eventImg"></div></div>
				<div class="event"><div class="eventImg"></div></div>



			</div>
			<div id="rightContent">
				<div class="bar">
					<div class="button leftButton"><p>All ▼</p></div>
					
				</div>
			</div>
		</div>
	</div>
</div>