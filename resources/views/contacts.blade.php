@extends('layout')

@section('title')
	Contacts - Agenda
@endsection

@section('content')

<div class="container">
    @if (!$cont)
      <div class="row">
          <div class="col-sm-12 rounded" style="background-color:#f5f5f5; border:solid 1px #eeeeee; margin: 0 auto;">
               <div class="card" style="width: 100%;">
                  <div class="card-body">
                      <h5 class="card-title">No contact was found!! </h5>
                      <h6 class="card-subtitle mb-2 text-muted">First of all, welcome to your agenda.</h6>
                      <p class="card-text">With this agenda, you can manage your contacts easily and get access to their information fast. </p>
                      <a href="contact.php" class="card-link">Add new contacts</a>
                  </div>
              </div>
          </div>
      </div>
    @else
    
    @foreach ($cont as $c)
    <div class="row">
        <div class="col-sm-12 rounded" style="background-color:#f5f5f5; border:solid 1px #eeeeee; margin: 0 auto;">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title"><img src="img/ic_c.png" style="width:45px; height:45px;"/> {{ $c->name }} {{ $c->lastName }} </h5>
                    <h6 class="card-subtitle mb-2 text-muted"> {{ $c->email }} </h6>
                    <p class="card-text"><img src="img/place.png" style="width:25px; height:25px;"/> {{ $c->city }}, {{ $c->state }}, {{ $c->country  }} </p>
                    <p class="card-text"><img src="img/phone.png" style="width:25px; height:25px;"/> {{ $c->phone }}</p>
                    <a href="/contacts/about/{{$c->id}}" class="card-link">More About</a>
                    <a href="#" class="card-link">Update</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    @endif
</div>

@endsection