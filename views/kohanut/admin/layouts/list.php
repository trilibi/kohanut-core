<div id="side">
	
	<div class="box">
		<h2>Help</h2>
		<div class="content">
			
			<p>blah</p>
			
		</div>
	</div>
	
</div>

<div id="main">
	
	<div class="box">
		<h2><img src='/kohanutres/img/fam/layout.png' alt="link" class='headericon' />Layouts</h2>
		<div class="content">
			
			<ul id="layoutlist" class="standardlist">
				<li class="addli">
					<a id="showaddform"><p><img src="/kohanutres/img/fam/layout_add.png"/>Add a Layout</p></a>
					<div id="addform">
						<?php echo $form ?>
					</div>
				</li>
			<?php
			$zebra = false;
			foreach($list as $item)
			{
			?>
				<li <?php if ($zebra) echo "class='z' " ?> title="Click to edit" >
					<div class="actions">
						<a href="/admin/layouts/edit/<?php echo $item->id ?>"><img src="/kohanutres/img/fam/layout_edit.png" alt="edit" /><br/><span>edit</span></a>
						<a href="/admin/layouts/copy/<?php echo $item->id ?>" title="Click to copy"><img src="/kohanutres/img/fam/layout_go.png" alt="copy" /><br/><span>copy</span></a>
						<a href="/admin/layouts/delete/<?php echo $item->id ?>" onclick="javascript:return confirm('Really delete that layout?')" title="Click to delete"><img src="/kohanutres/img/fam/layout_delete.png" alt="delete" /><br/><span>delete</span></a>
					</div>
					<a href="/admin/layouts/edit/<?php echo $item->id ?>" ><p>
						<?php echo $item->name ?>
						<span class="layoutdesc"><?php echo $item->desc ?></span>
					</p></a>
				
				</li>
				
			<?php
				$zebra = !$zebra;
			}
			?>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
	
</div>


<script type="text/javascript">
$(document).ready(function(){
	$("#showaddform").click( function(){
		$("#addform").animate({height:"toggle"},"fast");
	});

});
</script>