<?php include('head.php');?>
<?php include('header.php');?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url(assets/img/bg/3.jpg);">
        <div class="container">
            <h2>Career</h2>
            <p>If you deserve it, we will help you achieve it. Now is your chance to win it.</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Career</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="choose-area bg-img pt-90">
    <div class="container">
	  
        <div class="row">
            <div class="col-lg-6 col-md-12">
			   <img src="assets/img/scholarship-exam.png" alt="REGISTRATIONS OPEN " class="img-fluid">
            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <div class="col-lg-6 col-md-12">
                 <form  action="3contact_us_custom.php" method="post" name="frmContactus" id="frmContactus"class="form-box">
    			    <div class="alert alert-info"><strong> Career </strong></div>
					 <div class="form-group">
					  <label class="col-md-12 control-label" for="name">Full Name <span class="text-danger">*</span></label>  
					  <div class="col-md-12">
					       <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full Name"  autocomplete="off" required>
					  </div>
					</div>
				    <div class="form-group">
					  <label class="col-md-12 control-label" for="name">Father’s/Husband’s Name <span class="text-danger">*</span></label>  
					  <div class="col-md-12">
					      
					       <input type="text" class="form-control" name="faname" id="faname" placeholder="Father’s/Husband’s Name "  autocomplete="off" required>
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-12 control-label" for="name">Contact Number <span class="text-danger">*</span></label>  
					  <div class="col-md-12">
					      <input type="text" class="form-control" name="Mno" id="Mno" placeholder="Contact Number "  autocomplete="off" required>
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-12 control-label" for="name">Email Address <span class="text-danger">*</span></label>  
					  <div class="col-md-12">
					  <input type="text" class="form-control" name="email" id="email" placeholder="Email Address"  autocomplete="off" required></div>
					</div>
					<div class="form-group">
					  <label class="col-md-12 control-label" for="name">Current Job <span class="text-danger">*</span></label>  
					  <div class="col-md-12">
					  <input type="text" class="form-control" name="job" id="job" placeholder="Current Job"  autocomplete="off" required>
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-12 control-label" for="name">Apply For Which Post <span class="text-danger">*</span></label>  
					  <div class="col-md-12">
					  <input type="text" class="form-control" name="post" id="post" placeholder="Post"  autocomplete="off" required>
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-12 control-label" for="name">Address <span class="text-danger">*</span></label>  
					  <div class="col-md-12">
					  <textarea id="address" rows="2" cols="4" type="text" class="form-control" name="add" id="add"   placeholder="Your Address"   autocomplete="off" required>
					   
					  </textarea>
					  </div>
					</div>
					<div class="col-lg-12 col-md-12 text-center">
					 <div class="alert alert-success hidden" id="Successtxt"></div>
					 <div class="alert alert-danger hidden" id="Errortxt"></div>
					 <button class="default-btn" type="button" onclick="exam_send();">Submit</button>
				 </div>
				   </form>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php');?>