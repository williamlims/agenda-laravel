@extends('layout')

@section('title')
	Phone Contacts - Agenda
@endsection

@section('content')

<div class="container">
	
<div class="row">
	<div class="col-sm-12 rounded" style="background-color:#f5f5f5; border:solid 1px #eeeeee; margin: 0 auto;">
	   <form>
	      <input type="hidden" id="contId" name="contId" value="{{ $id }}">
	      <br>
	      <h4><img src="../../../img/cont_icon.png" style="width:45px; height:45px; " title="Agenda Online"/> Add a new number</h4> 
	      <div class="form-group">
	         <label for="phoneNumber">Phone Number:</label>
	         <input type="text" class="form-control" placeholder="Type the phone number" id="phoneNumber" name="phoneNumber">
	      </div>       
	          <div id="status" class="alert alert-success" style="display: none;"></div>
	          <div id="status2" class="alert alert-warning" style="display: none;"></div>
	      <br>
	      <button type="button" id="btn" name="btn" class="btn btn-dark">Add Number</button>
	   </form>
	   <br>
	</div>
</div>

</div>

@endsection