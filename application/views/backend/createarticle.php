<div class="row">
	<div class="col s12">
		<h4 class="pad-left-15">Create Article</h4>
	</div>
	<form class="col s12" method="post" action="<?php echo site_url('site/createarticlesubmit');?>" enctype="multipart/form-data">
		<div class="row">
			<div class="input-field col m6 s12">
				<label for="name">Title</label>
				<input type="text" id="title" name="title" value="<?php echo set_value('title');?>">
			</div>
		</div>

		</div>




		<div class="row">
			<div class="file-field input-field col m6 s12">
				<div class="btn blue darken-4">
					<span>Image</span>
					<input name="image" type="file" multiple>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" placeholder="Upload one or more files" value="<?php echo set_value('image');?>">
				</div>
			</div>
		</div>

        <div class="row">
			<div class="input-field col m6 s12">
				<textarea name="content" class="materialize-textarea" length="120"><?php echo set_value( 'content');?></textarea>
				<label>Content</label>
			</div>
		</div>




		<div class=" form-group">
			<div class="row">
				<div class="col m6 s12">
					<button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
					<a href="<?php echo site_url('site/viewusers'); ?>" class="waves-effect waves-light btn red">Cancel</a>
				</div>
			</div>
		</div>
	</form>
</div>
