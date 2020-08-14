<form method="post" class="ajax-submit" autocomplete="off" action="{{action('RoleController@update', $id)}}" enctype="multipart/form-data">
	{{ csrf_field()}}
	<input name="_method" type="hidden" value="PATCH">				
	
	<div class="col-md-12">
				 <div class="form-group">
					<label class="control-label">{{ _lang('Role Name') }}</label>						
					<input type="text" class="form-control" name="role_name" value="{{ $role->role_name }}" required>
				 </div>
				</div>

				<div class="col-md-12">
				 <div class="form-group">
					<label class="control-label">{{ _lang('Note') }}</label>						
					<textarea class="form-control" name="note">{{ $role->note }}</textarea>
				 </div>
				</div>

				
	<div class="form-group">
	  <div class="col-md-12">
		<button type="submit" class="btn btn-primary">{{ _lang('Update') }}</button>
	  </div>
	</div>
</form>

