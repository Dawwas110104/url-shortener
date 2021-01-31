@extends('layouts.master')
@section('action')
                <div class="col-12">
                    <form class="form" action="">
                        {{@csrf_field()}}
                            <div class="row">
                                <div class="col-10">
                                    <input value="{{ $slug }}" class="form-control form-control-lg" type="text" value="">
                                </div>
                                <div class="col-2">
                                    <a href="{{ route('Run', $slug) }}" target="_blank"><button type="submit" class="btn btn-primary btn-lg" style="margin: auto;">Run</button></a>
                                </div>
                            </div>
                     </form>
                </div>
@endsection