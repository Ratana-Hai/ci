<!DOCTYPE html>
<html>
<head>
	 <?php 
          include("parts/meta.php"); 
	      include("parts/style.php"); 
          include('parts/script.php');
    ?>
	<title>Hello CI!</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<form class="form-horizontal" method="POST" action="<?= base_url()?>update/person">
					<fieldset>

					<!-- Form Name -->
					<legend>Change Person Info</legend>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">id:</label>  
					  <div class="col-md-4">
					  <input id="textinput" name="id" class="form-control input-md" required="" value="<?= $value['id'] ?>" type="text" readonly >
					    
					  </div>
					</div>
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">name:</label>  
					  <div class="col-md-4">
					  <input id="textinput" name="name" placeholder="name" class="form-control input-md" value="<?= $value['name']?>" required="" type="text">
					    
					  </div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="selectbasic">sex:</label>
					  <div class="col-md-4">
					    <select id="selectbasic" name="sex" class="form-control" value="">
					    	<?php if($value['sex']== 'male'){ ?>
					      <option value="male" selected> male</option>
					       <option value="female">female</option>
					      <?php }else{?>
					      <option value="male" > male</option>
					      <option value="female" selected>female</option>
					      <?php }?>
					    </select>
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">address:</label>  
					  <div class="col-md-4">
					  <input id="textinput" name="address" placeholder="address" class="form-control input-md" required="" value="<?= $value['address'] ?>" type="text">
					    
					  </div>
					</div>

					<!-- Button (Double) -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="button1id"></label>
					  <div class="col-md-8">
					    <button id="button1id" type="submit"class="btn btn-success">submit</button>
					   
					  </div>
					</div>

					</fieldset>
					</form>
			</div>
		</div>
		
	</div>

</body>
</html>