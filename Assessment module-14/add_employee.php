<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADD EMPLOYEE</h4>
                
                            </div>

        </div>
      
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Add Employee
                        </div>
						<form method="post" enctype="multipart/form-data">
                        <div class="panel-body">
						
							 <div class="form-group">
								<label>First Name</label>
								<input class="form-control" type="text" name="fname"/>
								<p class="help-block">Help text here.</p>
							</div>
							 <div class="form-group">
								<label>Last Name</label>
								<input class="form-control" type="text" name="lname"/>
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
								<label>Email Id</label>
								<input class="form-control" type="email" name="email"/>
								<p class="help-block">Help text here.</p>
							</div>
							<div class="form-group">
								<label>Phone Number</label>
								<input class="form-control" type="text" name="mobile"/>
								<p class="help-block">Help text here.</p>
							</div>
							<div class="form-group">
							  <div class="col-md-6">
								<label >Gender</label>
								<div class="form-check">
								  <input type="radio" class="form-check-input" name="gender" value="Male">Male
								  <label class="form-check-label" for="radio1"></label>
								</div>
								<div class="form-check">
								  <input type="radio" class="form-check-input" name="gender" value="Female">Female
								  <label class="form-check-label" for="radio1"></label>
								</div>
							  </div>
							  <div class="col-md-6">
								 <label >Address</label>
								<textarea class="form-control py-3 px-4" rows="3" name="address" placeholder="Address"></textarea>
							  </div>        		  
							</div>
                            <div class="form-group">
								<label>Password</label>
								<input class="form-control" type="password" name="password"/>
								<p class="help-block">Help text here.</p>
							</div>
							 <div class="form-group">
								<label>Conform Password</label>
								<input class="form-control" type="password" name="con_password"/>
								<p class="help-block">Help text here.</p>
							</div>
                            
							
         
								 <div class="form-group">
									
									<input type="submit" class="btn btn-primary" type="text" name="submit" value="SUBMIT"/>
									
								</div>
                            </div>
                        </div>
                   </div>

        </div>
    </div>
    </div>
 <?php
 include_once('footer.php');
 ?> 