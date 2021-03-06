<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <link rel="icon" href="http://icons.iconarchive.com/icons/icons8/windows-8/512/Music-Piano-icon.png">

	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<link rel="stylesheet" href="{{ URL::asset('css/style-admin.css') }}">
	<script src="{{ URL::asset('js/vue.min.js') }}"></script>
	<title>Admin</title>
</head>
<body>
 	@include('layouts._navbar')
	<div class="container">
			<div class="row" style="margin-top: 5rem; margin-left: 30rem;">
				<div class="col-sm-3">
					<button class="button" data-toggle-open="toggle-student-table" style="vertical-align:middle;background-color: #e74c3c;"><span>Student Information</span></button>
				</div>
				<div class="col-sm-3">
					<button class="button" data-toggle-open="toggle-teacher-table" style="vertical-align:middle;background-color: #e74c3c;"><span> Teacher Information</span></button>
				</div>

				<div class="col-sm-3">
					<button class="button" data-toggle-open="toggle-course-table" style="vertical-align:middle;background-color: #e74c3c;"><span>Course Information</span></button>
				</div>
			</div>
			 <div class="col-md-3" id="col-btn">
				<button class="button" data-popup-open="popup-1" id= "att" style="vertical-align:middle;background-color: #F57F17;"><span>Generate Code</span></button>

			 	<button class="button" data-toggle-open="toggle-addcourse" style="vertical-align:middle;background-color: #F9A825;"><span>Add Course </span></button>

			 	<button class="button" data-toggle-open="toggle-createcourse" style="vertical-align:middle;background-color: #FBC02D;" ><span>Create Course </span></button>

			 	<button class="button" data-toggle-open="toggle-updatepromo" style="vertical-align:middle;background-color: #FFD740;"><span>Update Promotion </span></button>
			 	<button class="button" data-toggle-open="toggle-upvideo" style="vertical-align:middle;background-color: #FDD835;" ><span>Up Link Youtube</span></button>
			 	<button class="button" data-toggle-open="toggle-addteacher" style="vertical-align:middle;background-color: #FFEB3B;"><span>Update Teacher</span></button>
			 </div>

		<!-- toggle box -->
		<div class="col-md-8" id="col-toggle-box">
			@include('layouts._addcourse-box')
		    @include('layouts._createcourse-box')
		    @include('layouts._updatepromo-box')
		    @include('layouts._upyoutube-box')
		    @include('layouts._addteacher-box')
		    @include('layouts._student-table')
		    @include('layouts._teacher-table')
		    @include('layouts._course-table')
		</div> <!-- End toggle box -->

		@include('layouts._popup-gencode')


	</div>


	<script type="text/javascript">
		$(function() {
		//----- OPEN
			$('[data-popup-open]').on('click', function(e)  {
				var targeted_popup_class = jQuery(this).attr('data-popup-open');
				$('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

				e.preventDefault();
			});

			//----- CLOSE
			$('[data-popup-close]').on('click', function(e)  {
				var targeted_popup_class = jQuery(this).attr('data-popup-close');
				$('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

				e.preventDefault();
			});


			// toggle
			$('[data-toggle-open]').on('click', function(e)  {
				var targeted_toggle_class = jQuery(this).attr('data-toggle-open');
				if($('[data-toggle="' + targeted_toggle_class + '"]').is(':visible')){
					$(".toggle").fadeOut('slow');
				}
				else{
					$(".toggle").fadeOut('slow');
					$('[data-toggle="' + targeted_toggle_class + '"]').fadeIn('slow');
				}
			});

			//show course pic
			var readURLcourse = function(input) {
    	 	   if (input.files && input.files[0]) {
            	var reader = new FileReader();
        	    reader.onload = function (e) {
                	$('.sample-course-pic').attr('src', e.target.result);
            	}
            	reader.readAsDataURL(input.files[0]);
        	}
    	  }
			 $(".course-pic").on('change', function(){
       			 readURLcourse(this);
    		});

			//show ex. new promo img
			var readURLpromo = function(input) {
     	   if (input.files && input.files[0]) {
            	var reader = new FileReader();
        	    reader.onload = function (e) {
                	$('.sample-promo').attr('src', e.target.result);
            	}
            	reader.readAsDataURL(input.files[0]);
        	}
    	  }
			 $(".new-promo").on('change', function(){
       			 readURLpromo(this);
    		});

			// show ex. new video
			 $("#show-sample-video").on('click', function(){
       			 $('.sample-video').attr('src', $('.new-video').val());
    		});

			 // show teacher pictuer
			 var readURLteacher = function(input) {
     	   if (input.files && input.files[0]) {
            	var reader = new FileReader();
        	    reader.onload = function (e) {
                	$('.sample-teacher-pic').attr('src', e.target.result);
            	}
            	reader.readAsDataURL(input.files[0]);
        	}
    	  }
			 $(".new-teacher").on('change', function(){
       			 readURLteacher(this);
    		});

		});
	</script>

	{{-- script vue.js  --}}
	<script>
		var courses = <?php echo $courses; ?>

		var vm = new Vue({
			el: '#popup_gencode',
			data: {
				showCode: '',
				aa: false
			},
			methods: {
				clickGenBtn: function() {
					this.showCode = this.genCode();
					alert(this.showCode);
				},
				genCode: function() {
					var text = "";
    				var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    				for( var i=0; i < 5; i++ )
        				text += possible.charAt(Math.floor(Math.random() * possible.length));
    				return text;
				}
			}
		});
	</script>
</body>
</html>
