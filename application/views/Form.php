<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12">
<Body style="background-color:#ffffe6">
<h3 style="fontfamily:comic sans MS;color:#ff3300;text-align:center;margin-top:100px;margin-bottom:30px"><img class="img-logo" src="<?=base_url();?>images/school_logo.png" style="margin-right:15px;height:120px; width:120px"alt="">Try our ZeroERP Education Software</h3>
<h4 style="text-align:center"> Need to fill a simple form</h4>
 <div class="panel-body">
							
							<form role="form" class="validate" method="post" style="margin-bottom:60px" action="<?=base_url();?>front/insert">
								
					<div class="form-group">
							
							
							<label class="col-sm-4 control-label"style="margin-top:10px" for="field-1">Name</label>
									
								<div class="col-sm-4"style="margin-top:10px">
									<input type="text" class="form-control" data-validate="required" name="First_name" id="field-1" placeholder="First Name">
								</div>
								
								<div class="col-sm-4"style="margin-top:10px">
									<input type="text" class="form-control" data-validate="required" name="Last_name" "id="field-1" placeholder="Last Name">
								</div>
								
							
							<label class="col-sm-4 control-label"style="margin-top:10px" for="field-1">Email</label>
									
								<div class="col-sm-8"style="margin-top:10px">
									<input type="text" class="form-control" data-validate="required,email" name="Email" "id="field-1" placeholder=" Email">
								</div>
								
							<label class="col-sm-4 control-label"style="margin-top:10px" for="field-1">Mobile No</label>
									
									
								<div class="col-sm-8"style="margin-top:10px">
									<input type="text" class="form-control" data-validate="number,minlength[10]" name="No" "id="field-1" placeholder=" Mobile No">
								</div>
							
								
							<label class="col-sm-4 control-label" style="margin-top:10px" for="field-1"> How you know about Zero ERP?</label>
									<div class="col-sm-8"  style="margin-top:10px">
									<select class="form-control"  data-validate="required" name="ERP">
									<Option value="">Select</option>
									<Option value="NewsPaper">NewsPaper</option>
									<Option value="Online Search">Online Search</option>
									<Option value="Facebook">Facebook</option>
									<Option value="Friend">Friend</option>
									<Option value="Other">Other</option>
									</select>
									</div>
									
								
						<label class="col-sm-4 control-label"style="margin-top:10px" for="field-1">Name of institution</label>
									
									
								<div class="col-sm-8" style="margin-top:10px">
									<input type="text" class="form-control" data-validate="required" name="Institution" placeholder="Name of institution">
								</div>
								
						<label class="col-sm-4 control-label"style="margin-top:10px" for="field-1">Institution type</label>
						
									<div class="col-sm-8"style="margin-top:10px">
									<select class="form-control"  data-validate="required" name="Type">
									<Option value="">Select</option>
									<Option value="School">School</option>
									<Option value="College">College</option>
									<Option value="University">University</option>
									<Option value="Coaching Institute">Coaching Institute</option>
									<Option value="Other">Other</option>
									</select>
									</div>
									
									
						<label class="col-sm-4 control-label"style="margin-top:10px" for="field-1">Your Role in institution</label>
									
									
								<div class="col-sm-8"style="margin-top:10px">
									<input type="text" class="form-control" data-validate="required" name="Role" "id="field-1" placeholder="Your Role in institution">
								</div>
								
						<label class="col-sm-4 control-label"style="margin-top:10px" for="field-1">Website</label>
									
									
								<div class="col-sm-8"style="margin-top:10px">
									<input type="text" class="form-control" data-validate="required" name="Website" "id="field-1" placeholder="Website link">
								</div>
						
						<label class="col-sm-4 control-label" style="margin-top:10px" for="field-1">Message</label>
									
								<div class="col-sm-8" style="margin-top:10px">
										<textarea class="form-control" name="Message" cols="5" id="field-5"></textarea>
								</div>
								
						<div class="col-sm-12" >
						<input type="submit"  class="btn btn-danger" value="submit" style="margin-top:30px; margin-left:300px;"></input>
						</div>
					</div>
					</form>
				</div>
				<div>

</div>
</div>

</div>