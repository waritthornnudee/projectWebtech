<!-- Add Course Box -->
			<div  class="toggle" data-toggle="toggle-addcourse">
		    <div class="toggle-box">
					<h1>Add Course</h1>
					<hr>
					<form action="admin/addCourse" method="post">
					<div>
						<label>
							<h3>Student Email: <input id="std-email" type="email" name="std-email"></h3>
						</label>
							<br>
						<label><h3>Select Course
							<select name="course" id="course-selected">
								<option value="Guitar">Guitar</option>
								<option value="Singing">Singing</option>
								<option value="Piano">Piano</option>
								<option value="Violin">Violin</option>
							</select>
							</h3>
						</label>
					</div>
				<br>
		        <button  class="btn btn-info" data-toggle-open="toggle-addcourse" style="width: 100%;font-size: 20px;">Add Course</button>
		        <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
					</form>
		        <!-- <a class="popup-close" data-popup-close="popup-1" href="#">x</a> -->
		    </div>
		    </div> <!-- End Add Course Box -->
