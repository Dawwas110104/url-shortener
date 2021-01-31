<@extends('layouts.links')
@section('content')

        <div class="container" style="padding-top: 15vh;">
            <div class="row">
                <div class="panel">
                    <div class="col-8" style="margin: 15px;">
                        <div class="card">
                            <div class="card-header">
                				<h3>Edit Data</h3>
                            </div>
                            <div class="card-body">
                                
                				<form action="{{ route('update', $links->id) }}" class="form">
                					{{@csrf_field()}}
                				 	<div class="mb-3">
                				  		<label for="exampleInputEmail" class="form-label">Slug</label>
                				   	 	<input id="exampleInputEmail" name="slug" type="text" class="form-control" value="{{$links->slug}}">
                				  	</div>
                				  	<div class="mb-3">
                				    	<label for="exampleInputEmail" class="form-check-label">Redirect</label>
                				    	<input id="exampleInputEmail" name="redirect" type="text" class="form-control" value="{{$links->redirect}}">
                				  	</div>
                                    <div class="mb-3 float-end" >
                				  	     <button type="submit" class="btn btn-warning float-end" style="margin-top: 20px;">Update</button>
                                    </div>
                				</form>
                            </div>
            			</div>
            		</div>		
                </div>
            </div>
        </div>




@endsection

