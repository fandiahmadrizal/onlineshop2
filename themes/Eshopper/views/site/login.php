
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<?php $form=$this->beginWidget('CActiveForm', array(
							'id'=>'pelanggantbl-form',
							'enableAjaxValidation'=>false,
						)); ?>
							<?php echo $form->textField($model,'username',array('size'=>35,'maxlength'=>35,'placeholder'=>'Name'))?>
							<?php echo $form->passwordField($model,'password',array('size'=>35,'maxlength'=>35,'placeholder'=>'Password'))?>
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						<?php $this->endWidget(); ?>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	