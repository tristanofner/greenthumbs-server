{{-- This view portrays the home page of the Course Planning System showcasing navigations and additional information about the app --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header container-fluid">My Garden
                    <div class="col-sm-2 float-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add plant</button>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add plant</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="POST" action="{{ route('create') }}">
            @csrf
            <div class="form-group row">
                <label for="plantName" class="col-md-4 col-form-label text-md-right">{{ __('Nickname') }}</label>
                <div class="col-md-6">
                    <input id="plantName" type="text" class="form-control" name="plantName" autofocus>

                </div>

            </div>

            <div class="form-group row">
                <label for="speciesID" class="col-md-4 col-form-label text-md-right">{{ __('Species') }}</label>

                <div class="col-md-6">
                    <input id="speciesID" type="speciesID" class="form-control" name="speciesID">

                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Create Plant') }}
                    </button>
                </div>
            </div>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
@endsection
