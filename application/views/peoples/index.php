<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h3 class="mt-3">List of People</h3>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach( $peoples as $People) : ?>
					<tr>
						<th><?= ++$start; ?></th>
						<td><?= $People['name'] ?></td>
						<td><?= $People['email'] ?></td>
						<td>
							<a href="" class="badge badge-warning">detail</a>
							<a href="" class="badge badge-success">detail</a>
							<a href="" class="badge badge-danger">detail</a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>	
			<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</div>