@extends('layout')

@section('title')
	Login - Agenda
@endsection

@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-4 rounded" style="background-color:#f5f5f5; border:solid 1px #eeeeee; margin: 0 auto;">
       <form action="/log" method="post">
       	  {{ csrf_field() }}
          <br>
          <h4><img src="img/cont_icon.png" style="width:45px; height:45px; " title="Agenda Online"/> Agenda</h4>
          <div class="form-group">
             <label for="email">Email:</label>
             <input type="email" class="form-control" placeholder="Email Address" id="email" name="email" required>
          </div>
          
          <div class="form-group">
             <label for="pwd">Password:</label>
             <input type="password" class="form-control" placeholder="Password" id="pwd" name="pwd" required>
          </div>
          <div class="form-group form-check">
             <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
             </label>
          </div>
          <p class="small">Don't have an account? <a href="/newuser">register</a></p>
          <button type="submit" class="btn btn-dark">Sign in</button>
       </form>
       <br>
    </div>
</div>

@endsection