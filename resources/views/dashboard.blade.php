@extends('layouts.links')
@section('sidebar')
	<div class="navbar-btn">
		<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
	</div>
@endsection
@section('content')
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="panel">
							<div class="panel-heading">
								<div class="pull-right">
									<button type="button" data-toggle="modal" data-target="#modalCreate"><i class="lnr lnr-plus-circle"></i></button>
								</div>
								<div class="pull-left">
									<h3>Data Links</h3>
								</div>
							</div>
							<div class="panel-body">
								<table class="table table-hover">
									<thead style="text-align: center;">
									    <tr>
									      <th scope="col">Slug</th>
									      <th scope="col">Redirect</th>
									      <th scope="col">Hits</th>
									      <th scope="col" style="text-align: center;">Action</th>
									    </tr>
									</thead>
									<tbody>
									  	@foreach ($links as $link)
									    <tr>
									      <td>{{ $link->slug }}</td>
									      <td>{{ $link->redirect }}</td>
									      <td>{{ $link->clicks }}</td>
									      <td style="text-align: center;">
									      	<a href="{{ route('edit', $link->id) }}"><button class="btn btn-warning">Edit</button></a>
									      	<a href="{{ route('delete', $link->id) }}"><button class="btn btn-danger" onclick="return confirm('Yakin mau dihapus?')">Delete</button></a>
									      	<a href="{{ route('run', $link->slug) }}" target="_blank"><button class="btn btn-primary">Run</button></a>
									      </td>
									    </tr>
									    @endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>				
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">Shared by <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">BootstrapThemes</a></p>
			</div>
		</footer>
	</div>
	
	<!-- MODAL -->
		<div class="modal fade bg-dark" id="modalCreate" tabindex="-1" aria-labelledby="modalCreate" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
			     <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Create</h5>
				</div>
			    <form action="{{ route('create') }}" method="POST">
			      	{{@csrf_field()}}
			      	<div class="modal-body">
			        	<div class="mb-3">
					  		<label for="exampleFormControlInput1" class="form-label">Slug</label>
					  		<input name="slug" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Slug">
						</div>
						<div class="mb-3">
					  		<label for="exampleFormControlInput1" class="form-label">Redirect</label>
					  		<input name="redirect" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Redirect">
						</div>
			      	</div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        	<button type="submit" class="btn btn-primary">Submit</button>
			      	</div>
		      	</form>
		    </div>
		  </div>
		</div>		
	<!-- MDOAL -->
@endsection
								
				

	