@extends('elektra-webartisan::_layout')

@section('formTitle')
  <h2 class="bd-title" id="content">
    Make job
  </h2>
  <p>
    Create a new job class.
  </p>
@endsection

@section('content')
    <?php
    if (session()->has('errors')) {
      $formSign = ' has-danger';
    }
    ?>
    <div class="form-group row {{ $formSign or null }}">
      <label for="name" class="col-sm-2 form-control-label">Name</label>
      <div class="col-sm-10">
        <input id="name" name="name" type="input" class="form-control" autocomplete="off">
      </div>
    </div>
    <div class="form-group">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="sync" value="1">
          Indicates that job should be synchronous.
        </label>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-12">
        <button type="submit" class="btn btn-md btn-primary center-block">
          Submit
        </button>
      </div>
    </div>
@endsection
