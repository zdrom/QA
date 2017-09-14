<div class="row justify-content-center">
	<div class="col-lg-6">
		<div class="card">
		  <div class="card-header">
		    Upload a Campaign Export
		  </div>
		  <div class="card-block">
		    <form method="POST" action="/campaign" enctype='multipart/form-data'>
		    	{{ csrf_field() }}

				<div class="form-group">
					<input type="file" name="campaign">
				</div>
				<div class="form-group mb-0">
					<button class="btn btn-primary" type="submit">Upload Export</button>
				</div>
		    </form>
		  </div>
		</div>
	</div>
</div>