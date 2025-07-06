<?= $this->extend('default') ?>

<?= $this->section('content') ?>
	<div class="py-3 bg-dark">
    <form action="/login" method="post" class="login-form bg-primary w-100 m-auto">
		<div class="mb-3">
		  <label for="exampleFormControlInput1" class="form-label">Email address</label>
		  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
		  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>
	</form>
	</div>
<?= $this->endSection() ?>