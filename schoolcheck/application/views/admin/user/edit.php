<div class="modal-header">

	<h3><?php echo empty($users->user_id)?'Add a new user':'Edit user'.$users->name;?> </h3>

	<p>Please log in using your credentials</p>
<div>

<div class="modal-body">
<?php echo validation_errors();?>
	<?php echo form_open();?>


<?php if(isset($users->email)):$value_email=$users->email; else: $value_email=""; endif;?>
	<?php if(isset($users->name)):$value_name=$users->name; else: $value_name=""; endif;?>

<table>
	
		<tr>
			<td>Email</td>
			<td><?php echo form_input('email',$value_email);?></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><?php echo form_input('name',$value_name);?></td>
		</tr>	

		<tr>
			<td>Password</td>
			<td><?php echo form_input('password');?></td>
		</tr>

		<tr>
			<td>confirm Password</td>
			<td><?php echo form_input('password_confirm');?></td>
		</tr>			
		<tr>
			<td></td>
			<td><?php echo form_submit('submit','Log in','class="btn btn-primary"');?></td>

		</tr>


</table>

<?php echo form_close();?>
</div>