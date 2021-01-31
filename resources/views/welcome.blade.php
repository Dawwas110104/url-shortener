@extends('layouts.master')
@section('action')

    <div class="col-12">
        <form class="form" action="{{ route('random') }}" method="POST">
            {{@csrf_field()}}
                <div class="row">
                    <div class="col-11">
                        <input name="redirect" class="form-control form-control-lg" type="text" name="link" placeholder="Shorten your link">
                    </div>
                    <div class="col-1">
                        <button type="submit" class="btn btn-primary btn-lg" style="margin: auto;">Shorten</button>
                    </div>
                </div>
         </form>
    </div>

@endsection