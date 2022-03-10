<?php include('db_connect.php');?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card border border-dark" style="border-radius: 10px;">
				<div class="card-body">
					<?php include( "../session.php" );
					$_SESSION['acc_id']=$loggedin_id;
					?>
					<hr>
					<div id="calendar"></div>
				</div>
			</div>
		</div>
		<!-- Table Panel -->
	</div>	
</div>

<script>
	var calendarEl = document.getElementById('calendar');
    var calendar;
	document.addEventListener('DOMContentLoaded', function() {
   
        calendar = new FullCalendar.Calendar(calendarEl, {
          headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
          },
          initialDate: '<?php echo date('Y-m-d') ?>',
          weekNumbers: true,
          navLinks: true, // can click day/week names to navigate views
          editable: false,
          selectable: true,
          nowIndicator: true,
          dayMaxEvents: true, // allow "more" link when too many events
          // showNonCurrentDates: false,
          events: []
        });
        calendar.render();

  });
	$('.card-body').ready(function(){
		 calendar.destroy()
		 start_load()
		 $.ajax({
		 	url:'ajax.php?action=get_schecdule',
		 	success:function(resp){
		 		if(resp){
		 			resp = JSON.parse(resp)
		 					var evt = [] ;
		 			if(resp.length > 0){
		 					Object.keys(resp).map(k=>{
		 						var obj = {};
		 							obj['title']=resp[k].CourseCode
		 							obj['data_id']=resp[k].student_subject_id
		 							obj['data_description']=resp[k].CourseName
		 							obj['daysOfWeek']=resp[k].dow
		 							obj['startRecur']=resp[k].start
		 							obj['endRecur']=resp[k].end
									obj['startTime']=resp[k].StartTime
		 							obj['endTime']=resp[k].EndTime
		 							evt.push(obj)
		 					})
							 console.log(evt)

		 		}
		 				  calendar = new FullCalendar.Calendar(calendarEl, {
				          headerToolbar: {
				            left: 'prev,next today',
				            center: 'title',
				            right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
				          },
				          initialDate: '<?php echo date('Y-m-d') ?>',
				          weekNumbers: true,
				          navLinks: true,
				          editable: false,
				          selectable: true,
				          nowIndicator: true,
				          dayMaxEvents: true, 
				          events: evt,
				        });
		 	}
		 	},complete:function(){
		 		calendar.render()
		 		end_load()
		 	}
		 })
	})
</script>