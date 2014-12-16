<?php require_once 'header.php';?>
  
  	
    	
    	<div class="container">
    		<div class="jumbotron">
		 <h2>Registration Form:</h2>		 
		      <?php 
		      $attribute = array(
		      		'class' => 'form-horizontal', 
		      		'role' => 'form'
		      		 );
		      echo form_open('domain/register', $attribute); 
		      ?>
		      
			<div class="form-group">
				  <?php $attrib1 = array('class' => 'col-sm-2 control-label');
				  	echo form_label('Domain name','domain_name',$attrib1)
				  ?>				  
				    <div class="col-sm-10">
				    
				    	<?php 
				    	$data = array(
				    			'type' => 'text',
				    			'class' => 'form-control',
				    			'placeholder' => 'Domain Name',
				    			'value' => '',
				    			'name' => 'dname',
				    			'required' => ''
				    	);
				    	echo form_input($data);?>
				    	<?php echo  form_error('dname','<div class="alert alert-warning" role="alert">', '</div>'); ?>
				   </div>
			</div>
				  
			<div class="form-group">
				     <?php echo form_label('Register date:','password',$attrib1)?>
				 <div class="col-sm-10">
				    	<?php 
				    	$data2 = array(
				    			'class' => 'form-control',
				    			'placeholder' => 'Date of Registration',
				    			'value' => '',
				    			'name' => 'rdate',
				    			'type' => 'date',
				    			'required' => ''
				    	);
				    	echo form_input($data2);?>
				      
				</div>
			</div>
			
			<div class="form-group">
				     <?php echo form_label('Expiry date:','password',$attrib1)?>
				 <div class="col-sm-10">
				    	<?php 
				    	$data2 = array(
				    			'class' => 'form-control',
				    			'placeholder' => 'Date of Domain Expiry',
				    			'value' => '',
				    			'name' => 'edate',
				    			'type' => 'date',
				    			'required' => ''
				    	);
				    	echo form_input($data2);?>
				      
				</div>
			</div>
				  
			<div class="form-group">
				  <?php $attrib1 = array('class' => 'col-sm-2 control-label');
				  	echo form_label('Client Name','client_name',$attrib1)
				  ?>
				  
				    <div class="col-sm-10">
				    	<?php 
				    	$data = array(
				    			'type' => 'text',
				    			'class' => 'form-control',
				    			'placeholder' => 'Client Name',
				    			'value' => '',
				    			'name' => 'cname',
				    			'required' => ''
				    	);
				    	echo form_input($data);?>
				   </div>
			</div>
			<h2>Set Username and Password field for client</h2>
			<div class="form-group">
				  <?php $attrib1 = array('class' => 'col-sm-2 control-label');
				  	echo form_label('Preferred Username','username',$attrib1)
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
				    	<?php echo  form_error('uname','<div class="alert alert-warning" role="alert">', '</div>'); ?>
				   </div>
			</div>
			
			<div class="form-group">
				  <?php $attrib1 = array('class' => 'col-sm-2 control-label');
				  	echo form_label('Set Password','pwd',$attrib1)
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
				  <?php $attrib1 = array('class' => 'col-sm-2 control-label');
				  	echo form_label('Confirm Password','confpwd',$attrib1)
				  ?>
				  
				    <div class="col-sm-10">
				    	<?php 
				    	$data = array(
				    			'type' => 'text',
				    			'class' => 'form-control',
				    			'placeholder' => 'Confirm Password',
				    			'value' => '',
				    			'name' => 'confpwd',
				    			'required' => ''
				    	);
				    	echo form_password($data);?>
				    	<?php echo  form_error('confpwd','<div class="alert alert-warning" role="alert">', '</div>'); ?>
				   </div>
			</div>
			
			
			
			<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				    <?php 
				    $data3 = array(
				    		'class'=> 'btn btn-primary',
				    		'name' => 'submit',
				    		'value' => 'Register'
				    		
				    );
				    echo form_submit($data3);
				    ?>
				    
				      
				    </div>
			</div>
			<div class="col-sm-offset-2 col-sm-10 pull-left">
			OR, You can 
			</div>
			<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			<?php $style = array(
					'class' => 'btn btn-primary'
			);
			echo anchor('domain/domainlist', 'View registered domains!', $style)?>
			</div>
			</div>
				  
			
    		</div>
    	</div>

    <?php require_once 'footer.php';