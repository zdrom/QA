<div class="row justify-content-center mt-3">
	<div class="col-lg-6">
		<div class="card">
		  <div class="card-block">
		  	<h4 class="card-title">Upload a Campaign Export</h4>
		    <form method="POST" action="/create" enctype='multipart/form-data'>
		    	{{ csrf_field() }}

				<div class="form-group">
					<input type="file" name="campaign">
				</div>
				<div class="form-group mb-0">
					<button class="btn btn-outline-secondary" type="submit">Upload Export</button>
				</div>
		    </form>
		  </div>
		</div>
	</div>
</div>