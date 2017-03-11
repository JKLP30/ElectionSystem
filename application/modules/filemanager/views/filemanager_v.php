<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">File Manager</div>
		<div class="panel-body">
				<?php foreach($rs as $count => $record) : ?>
					<a href="<?php echo base_url(). 'uploads/'.$record['filename'] ?>" download><img src="<?php echo base_url(). 'uploads/'.$record['filename'] ?>" class="img-rounded" height="150" width="150"></a>

					<!-- <li><a href="<?php echo base_url(). 'uploads/'.$record['filename'] ?>" download><?php echo $record['filename'] ?></a></li> -->
				<?php endforeach ?>
		</div>
	</div>
</div>