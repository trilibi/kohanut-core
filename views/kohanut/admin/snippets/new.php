<div class="grid_12">
	
	<div class="box">
		<h1>Create New Snippet</h1>
		
		<?php include Kohana::find_file('views', 'kohanut/admin/errors') ?>
			
			<?php echo Form::open() ?>
			
			<p>
				<label><?php echo $snippet->label('name') ?></label>
				<?php echo $snippet->input('name') ?>
			</p>
			
			<p>
				<label><?php echo $snippet->label('code') ?></label>
				<?php echo $snippet->input('code') ?>
			</p>
			
			<p>
				<?php echo $snippet->input('markdown',array('class'=>'check')) ?>
				Enable Markdown
				<?php echo $snippet->input('twig',array('class'=>'check')) ?>
				Enable Twig
			</p>
			
			<p>
				<input type="submit" name="submit" value="Create Snippet" class="submit" />
				<a href="/admin/snippets/">cancel</a>
			</p>
			
			<?php echo Form::close();  ?>
			
	</div>
	
</div>

<div class="grid_4">
	<div class="box">
		<h1>Help</h1>
		<p>Help goes here</p>
	</div>
</div>