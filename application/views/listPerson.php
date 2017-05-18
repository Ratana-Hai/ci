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
  <h2>List person Info</h2>
	<div class="col-md-4 col-md-offset-11">
		<a href="<?= base_url() ?>form"> (+)Insert </a>
	</div>  
  <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>sex</th>
        <th>address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php foreach($person as $key ):?>
    	<tr>
    		<td><?php echo $key['id'] ;?></td>
    		<td><?php echo $key['name'] ;?></td>
    		<td><?php echo $key['sex'] ;?></td>
    		<td><?php echo $key['address'] ;?></td>
    		<td>
    			
    			<a href="<?= base_url()?>edit/<?= $key['id'] ?>"><button class="btn btn-primary">Edit</button></a>
                <a href="<?= base_url()?>remove/person/<?= $key['id'] ?>"><button class="btn btn-danger"> Delete </button></a>	
    		</td>

    	</tr>
    	<?php endforeach;?>
      
    </tbody>
  </table>
</div>

</body>
</html>