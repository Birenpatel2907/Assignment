<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">EDIT EMPLOYEE</h4>
                
                            </div>

        </div>
      
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Edit Employee
                        </div>
						<form method="post" enctype="multipart/form-data">
                        <div class="panel-body">
						
							 <div class="form-group">
								<label>First Name</label>
								<input class="form-control" type="text" value="<?php echo $fetch->fname?>" name="fname"/>
								<p class="help-block">Help text here.</p>
							</div>
							 <div class="form-group">
								<label>Last Name</label>
								<input class="form-control" type="text" value="<?php echo $fetch->lname?>" name="lname"/>
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
								<label>Email Id</label>
								<input class="form-control" type="email" value="<?php echo $fetch->email?>" name="email"/>
								<p class="help-block">Help text here.</p>
							</div>
							<div class="form-group">
								<label>Phone Number</label>
								<input class="form-control" type="text" value="<?php echo $fetch->mobile?>" name="mobile"/>
								<p class="help-block">Help text here.</p>
							</div>
							<div class="form-group">
							  <div class="col-md-6">
								<label >Gender</label>
								<?php
								$gender=$fetch->gender;
								if($gender=="Male")
								{
								?>
								<div class="form-check">
								  <input type="radio" class="form-check-input" name="gender" value="Male" checked>Male
								  <label class="form-check-label" for="radio1"></label>
								</div>
								<div class="form-check">
								  <input type="radio" class="form-check-input" name="gender" value="Female">Female
								  <label class="form-check-label" for="radio1"></label>
								</div>
								 <?php
								}
								else
								{	
							   ?>
							   <div class="form-check">
								  <input type="radio" class="form-check-input" name="gender" value="Male">Male
								  <label class="form-check-label" for="radio1"></label>
								</div>
								<div class="form-check">
								  <input type="radio" class="form-check-input" name="gender" value="Female" checked>Female
								  <label class="form-check-label" for="radio1"></label>
								</div>
								<?php
									}
								  ?>
							  </div>
							  <div class="col-md-6">
								 <label >Address</label>
								<textarea class="form-control py-3 px-4" rows="3" name="address" value="" placeholder="<?php echo $fetch->address?>"></textarea>
							  </div>        		  
							</div>
                            <div class="form-group">
								<label>Password</label>
								<input class="form-control" type="password" value="<?php echo $fetch->password?>" name="password"/>
								<p class="help-block">Help text here.</p>
							</div>
                            
							
         
								 <div class="form-group">
									
									<input type="submit" class="btn btn-primary" type="text" name="submit" value="UPDATE"/>
									
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