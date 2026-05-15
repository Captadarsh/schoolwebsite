<?php include('head.php');?>
<?php include('header.php');?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url(assets/img/bg/3.jpg);">
        <div class="container">
            <h2>R. K. Memorial Scholarship Test</h2>
            <p>If you deserve it, we will help you achieve it. Now is your chance to win Full Scholarships for an Academic Year for all deserving students</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Scholarship Exam</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="choose-area bg-img pt-90">
    <div class="container">
	  
        <div class="row">
            <div class="col-lg-6 col-md-12">
			   <img src="assets/img/scholarship-exam.png" alt="REGISTRATIONS OPEN FOR R.K. MEMORIAL SCHOLARSHIP" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-12">
			    <form id="ExamFrm">
			    <div class="alert alert-info"><strong>Registration Fee: ₹ 250 </strong>(All Fees waived off for SC/ST/Single Girl Child, Defense Personnel and Students who scored >90% marks in last class)</div>
					 <div class="form-group">
					  <label class="col-md-12 control-label" for="name">Student Name <span class="text-danger">*</span></label>  
					  <div class="col-md-12">
					  <input name="name" type="text" placeholder="Full Name" class="form-control input-md" required="" id="Name">
					  </div>
					</div>
				    <div class="form-group">
					  <label class="col-md-12 control-label" for="name">Father’s/Mother’s Name <span class="text-danger">*</span></label>  
					  <div class="col-md-12">
					  <input id="father-name" name="father-name" type="text" placeholder="Father’s/Mother’s Name" class="form-control input-md" required="">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-12 control-label" for="name">Contact Number <span class="text-danger">*</span></label>  
					  <div class="col-md-12">
					  <input id="contnum" name="contnum" type="text" placeholder="Contact Number" class="form-control input-md" required="">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-12 control-label" for="name">Email Address <span class="text-danger">*</span></label>  
					  <div class="col-md-12">
					  <input id="emailadd" name="emailadd" type="text" placeholder="Email Address" class="form-control input-md" required="">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-12 control-label" for="name">Current Class <span class="text-danger">*</span></label>  
					  <div class="col-md-12">
					  <input id="cuurclass" name="cuurclass" type="text" placeholder="Current Class" class="form-control input-md" required="">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-12 control-label" for="name">Current School <span class="text-danger">*</span></label>  
					  <div class="col-md-12">
					  <input id="currschool" name="currschool" type="text" placeholder="Current School" class="form-control input-md" required="">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-12 control-label" for="name">Address <span class="text-danger">*</span></label>  
					  <div class="col-md-12">
					  <textarea id="address" rows="2" cols="4" placeholder="Your Address" class="form-control input-md" required=""></textarea>
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