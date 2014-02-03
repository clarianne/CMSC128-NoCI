<?php include 'header.php'; ?>
	
	<div class="mainBody">
		<!-- Nav tabs -->
		<div id="profileCont">
		<!-- Tab panes -->
			<div id="profContent">
			<h2>Profile</h2>
			
			<p class="">Name: Sayaka Yamamoto</p>
			<p>Student Number: 2010-00123</p>
			<p>Email Address: y.sayaka@gmail.com</p>
			<input href="#update" data-toggle="modal" type="submit" value="Update Profile" class="btn btn-primary"/>
			
			<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3 class="modal-title" id="myModalLabel">Update Profile</h3>
				  </div>
				  <div class="modal-body">
				      <form class="form-signin" role="form">
						<h2 class="form-signin-heading">Update your email address or password: </h2>
						<input type="text" class="form-control" placeholder="Email Address:" required autofocus>
						<input type="password" class="form-control" placeholder="Password:" required autofocus>
						<input type="password" class="form-control" placeholder="Repeat Password:" required autofocus>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<input href="#ok" class="btn btn-primary" data-toggle="modal_updated" type="submit" value="Update">
					 </form>
				  </div>
				</div>
			  </div>
			</div>
			
			<!--To check if the profile has been successfully updated -->

			<div class="modal_updated fade" id="update" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-body">
				      <form class="form-signin" role="form">
						<h2 class="form-signin-heading">Congratulations! <br /> Your profile has been updated. </h2>
				  </div>
				  <div class="modal-footer">
					<input href="#ok" class="btn btn-primary" data-toggle="modal_updated" type="submit" value="Update">
					 </form>
				  </div>
				</div>
			  </div>
			</div>	
			
			<h3>Profile Summary:</h3>
			<!--Overdue -->
	
			<p><h4>Overdue Books</h4>
			<table summary="Results" border="1" cellspacing="5" cellpadding="5">
			<thead>
              <tr>
                <th style="width:100px;" abbr="lmID" scope="col" title="Libary Material ID">Library Material ID</th>
                <th style="width:100px;" abbr="CourseClassification" scope="col" title="Course Classification">Course Classification</th>
                <th abbr="Type" scope="col" title="Type">Type</th>
                <th abbr="Title" scope="col" title="Title">Title</th>
                <th abbr="Author" scope="col" title="Author">Author</th>
                <th style="width:100px;" abbr="YrofPub" scope="col" title="Year of Publication">Year of Publication</th>
                <th abbr="Edition" scope="col" title="Edition">Edition</th>
              </tr>
            </thead>
              <tr>
                <td>L.Mat. ID 1</td>
                <td>CMSC1</td>
                <td>Type 1</td>
                <td>Title 1</td>
                <td>Author 1</td>
                <td>0001</td>
                <td>Edition 1</td>
              </tr>
              <tr>
                <td>L.Mat. ID 2</td>
                <td>CMSC2</td>
                <td>Type 2</td>
                <td>Title 2</td>
                <td>Author 2</td>
                <td>0002</td>
                <td>Edition 2</td>
              </tr>
              <tr>
                <td>L.Mat. ID 3</td>
                <td>CMSC2</td>
                <td>Type 3</td>
                <td>Title 3</td>
                <td>Author 3</td>
                <td>0003</td>
                <td>Edition 3</td>
              </tr>

			</table>
			</p>

			<p><h4>Borrowed Books</h4>
			<table summary="Results" border="1" cellspacing="5" cellpadding="5">
				 <thead>
              <tr>
                <th style="width:100px;" abbr="lmID" scope="col" title="Libary Material ID">Library Material ID</th>
                <th style="width:100px;" abbr="CourseClassification" scope="col" title="Course Classification">Course Classification</th>
                <th abbr="Type" scope="col" title="Type">Type</th>
                <th abbr="Title" scope="col" title="Title">Title</th>
                <th abbr="Author" scope="col" title="Author">Author</th>
                <th style="width:100px;" abbr="YrofPub" scope="col" title="Year of Publication">Year of Publication</th>
                <th abbr="Edition" scope="col" title="Edition">Edition</th>
              </tr>
            </thead>
              <tr>
                <td>L.Mat. ID 1</td>
                <td>CMSC1</td>
                <td>Type 1</td>
                <td>Title 1</td>
                <td>Author 1</td>
                <td>0001</td>
                <td>Edition 1</td>
              </tr>
              <tr>
                <td>L.Mat. ID 2</td>
                <td>CMSC2</td>
                <td>Type 2</td>
                <td>Title 2</td>
                <td>Author 2</td>
                <td>0002</td>
                <td>Edition 2</td>
              </tr>
              <tr>
                <td>L.Mat. ID 3</td>
                <td>CMSC2</td>
                <td>Type 3</td>
                <td>Title 3</td>
                <td>Author 3</td>
                <td>0003</td>
                <td>Edition 3</td>
              </tr>

			</table>	
			</p>
			
						
			<!--Reserved -->

			<p><h4>Reserved Books</h4>
			<table summary="Results" border="1" cellspacing="5" cellpadding="5">
	 <thead>
              <tr>
                <th style="width:100px;" abbr="lmID" scope="col" title="Libary Material ID">Library Material ID</th>
                <th style="width:100px;" abbr="CourseClassification" scope="col" title="Course Classification">Course Classification</th>
                <th abbr="Type" scope="col" title="Type">Type</th>
                <th abbr="Title" scope="col" title="Title">Title</th>
                <th abbr="Author" scope="col" title="Author">Author</th>
                <th style="width:100px;" abbr="YrofPub" scope="col" title="Year of Publication">Year of Publication</th>
                <th abbr="Edition" scope="col" title="Edition">Edition</th>
                <th abbr="Action" scope="col" title="Action">Action</th>
              </tr>
            </thead>
              <tr>
                <td>L.Mat. ID 1</td>
                <td>CMSC1</td>
                <td>Type 1</td>
                <td>Title 1</td>
                <td>Author 1</td>
                <td>0001</td>
                <td>Edition 1</td>
                <td><input type="submit" value="Cancel"/></td>
              </tr>
              <tr>
                <td>L.Mat. ID 2</td>
                <td>CMSC2</td>
                <td>Type 2</td>
                <td>Title 2</td>
                <td>Author 2</td>
                <td>0002</td>
                <td>Edition 2</td>
                <td><input type="submit" value="Cancel"/></td>
              </tr>
              <tr>
                <td>L.Mat. ID 3</td>
                <td>CMSC2</td>
                <td>Type 3</td>
                <td>Title 3</td>
                <td>Author 3</td>
                <td>0003</td>
                <td>Edition 3</td>
                <td><input type="submit" value="Cancel"/></td>
              </tr>
			</table>
			
			</p>
		</div>
		</div>

	<div class="container marketing">
<?php include 'home_footer.php'; ?>