<?php
    include("include/connecation.php");
    include("include/header.php");
	  $name="";
	  $fname="";
	  $surname="";
	  $job="";
	  if(isset($_POST['subbtn'])){
			if(!empty($_POST['name'])){
			 $name=$_POST['name'];	  
		  }
		   
		   if(!empty($_POST['surname'])){
			 $surname=$_POST['surname'];	  
		  }
		  if(!empty($_POST['fname'])){
			 $fname=$_POST['fname'];	  
		  }
		   if(!empty($_POST['job'])){
			 $job=$_POST['job'];	  
		  }
		  $sql= "INSERT INTO employee VALUE(NULL,'$name','$fname','$surname','$job')";
		  if(mysqli_query($c,$sql)){
			  echo "data has added !";
		  }else{
			  echo "data not added!";
		  }  
	  }
	  
	 
?>


		<div class="row" id="menu">
	        <div class="col-md-4">
			  <ul class="nav nav-pills">
				  <li role="presentation" class="active "><a href="list_emp.php"> بازگشت به صفحه قبل</a></li>
				</ul>
			</div>
	    </div>
		<br/>
		<div class="row" id="content">
	         <div class="col-md-8 col-md-offset-2" dir="rtl">
           <h2 class="title">راجستر کارمند جدید</h2>
		   <br/>
		     <form class="form-horizontal" action="" method="post">
				  <div class="form-group">
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="name" name="name" placeholder="اسم کارمند">
					</div>
					<label for="name" class="col-sm-2 control-label">اسم کارمند</label>
				  </div>
				  
				  <div class="form-group">
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="fname" name="fname" placeholder="اسم پدر">
					</div>
					<label for="name" class="col-sm-2 control-label">اسم پدر</label>
				  </div>
				  
				 
				  
				  <div class="form-group">
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="job" name="job" placeholder="وظیفه کارمند">
					</div>
					<label for="name" class="col-sm-2 control-label">وظیفه کارمند</label>
				  </div>
				   <div class="form-group">
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="surname" name="surname" placeholder="تخلص">
					</div>
					<label for="name" class="col-sm-2 control-label">تخلص</label>
				  </div>
				 
				  <div class="form-group">
				  <div class="col-md-2">
					  <button type="submit" name="subbtn" class="btn btn-danger btn-block">راجستر کارمند</button>
					</div>
				  <div class="col-md-10"> </div>
					
				  </div>
				</form>
				   
				  
			</div>
	    </div>
	
	
	</div>
	
	
	
	
	
	
	
	
	
	



