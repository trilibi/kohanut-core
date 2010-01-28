<div class="grid_12">
	
	<div class="box">
		<h1>Create New Redirect</h1>
		
		<?php include Kohana::find_file('views', 'kohanut/admin/errors') ?>
			
			<?php echo Form::open() ?>
			
			<ul>
			<?php foreach ($redirect->inputs() as $label => $input): ?>
				<p>
					<label><?php echo $label ?></label>
					<?php echo $input ?>
				</p>
			<?php endforeach ?>
			
			<p>
				<input type="submit" name="submit" value="Create Redirect" class="submit" />
				<a href="/admin/redirects/">cancel</a>
			</p>
			
			</form>
	</div>
	
</div>

<div class="grid_4">
	<div class="box">
		<h1>Help</h1>
		<h3>What are redirects?</h3>
		<p>You should add a redirect if you move a page or a site, so links on other sites do not break, and search engine rankings are preserved.</p>
		<p>When a user types in the outdated link, or clicks on an outdated link, they will be taken to the new link.</p>
		<p>Redirect type should be permanent (301) in most cases, as this helps to preserve search engine rankings better. Leave it as permanent unless you know what you are doing.</p> 
	
	</div>
</div>