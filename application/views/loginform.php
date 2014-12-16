<?php require_once 'header.php';?>
    <div class="container">
    		<div class="jumbotron">
    		<?php echo validation_errors(); ?>
		 <h2>Login:</h2>
		 
		 <?php 
		      $attribute = array(
		      		'class' => 'form-horizontal', 
		      		'role' => 'form'
		      		 );
		      echo form_open('domain/checklogin', $attribute); 
		      ?>
		 <div class="form-group">
				  <?php $attrib1 = array('class' => 'col-sm-2 control-label');
				  	echo form_label('Enter Your Username','username',$attrib1)
				  ?>
				  
				    <div class="col-sm-10">
				    	<?php 
				    	$data = array(
				    			'type' => 'text',
				    			'class' => 'form-control',
				    			'placeholder' => 'Username',
				    			'value' => '',
				    			'name' => 'uname',
				    			'required' => ''
				    	);
				    	echo form_input($data);?>
				   </div>
		</div>
		
		<div class="form-group">
				  <?php $attrib1 = array('class' => 'col-sm-2 control-label');
				  	echo form_label('Enter Your  Password','pwd',$attrib1)
				  ?>
				  
				    <div class="col-sm-10">
				    	<?php 
				    	$data = array(
				    			'type' => 'text',
				    			'class' => 'form-control',
				    			'placeholder' => 'Password',
				    			'value' => '',
				    			'name' => 'pwd',
				    			'required' => ''
				    	);
				    	echo form_password($data);?>
				   </div>
		</div>
		<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				    <?php 
				    $data3 = array(
				    		'class'=> 'btn btn-primary',
				    		'name' => 'submit',
				    		'value' => 'Login'
				    		
				    );
				    echo form_submit($data3);
				    ?>
				    
				      
				    </div>
		</div>
	</div>
    </div>

    <?php require_once 'footer.php';