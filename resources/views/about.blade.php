@extends('layout')

@section('title')
	About Contacts - Agenda
@endsection

@section('content')

<div class="container">

	<div class="row">
		<div class="col-sm-12 rounded" style="background-color:#f5f5f5; border:solid 1px #eeeeee; margin: 0 auto;">
		    <div class="card" style="width: 100%;">
		        <div class="card-body">
		             <h5 class="card-title"><img src="../../img/ic_c.png" style="width:45px; height:45px;"/> {{ $cont->name }} {{ $cont->middleName }} {{ $cont->lastName }}</h5><br>
		             <h6 class="card-subtitle mb-2 text-muted"> <img src="../../img/job.png" style="width:25px; height:25px;"/> {{ $cont->jobTitle }}</h6>
		             <p class="card-text"><img src="../../img/mail.png" style="width:25px; height:25px;"/> {{ $cont->email }}</p
		             ><p class="card-text"><img src="../../img/birthday.png" style="width:25px; height:25px;"/> {{ $cont->birthday}}</p>
		             <p class="card-text"><img src="../../img/place.png" style="width:25px; height:25px;"/> {{ $cont->postalCode }}, {{ $cont->street }}, {{ $cont->streetNumber }}, {{ $cont->city }}, {{ $cont->state }}, {{ $cont->country }}</p>
		             <p class="card-text"><img src="../../img/phone.png" style="width:25px; height:25px;"/> {{ $cont->phone }}</p>
		             <p class="card-text"><img src="../../img/web.png" style="width:25px; height:25px;"/> {{ $cont->webPage }}</p>
		        </div>
		    </div>
		</div>
	</div>
  
	<div class="row">
		<div class="col-sm-12 rounded" style="background-color:#f5f5f5; border:solid 1px #eeeeee; margin: 0 auto;">
		    <div class="card" style="width: 100%;">
		        <div class="card-body">
		             <h5 class="card-title"><img src="../../img/place.png" style="width:45px; height:45px;"/> Others Addresses</h5>

		             @foreach ($addr as $adr)
		                <p class="card-text"><img src="../../img/place.png" style="width:25px; height:25px;"/>
		                 	{{ $adr->postalCode }}, {{ $adr->city }}, {{ $adr->street }}, {{ $adr->streetNumber }}, {{ $adr->state }}, {{ $adr->country }}
			            </p> 
		             @endforeach  

		             <a href="/contacts/about/newaddress/{{$cont->id}}" class="card-link">Add a new address</a>     
		        </div>
		    </div>
		</div>
	</div>
  
	<div class="row">
		<div class="col-sm-12 rounded" style="background-color:#f5f5f5; border:solid 1px #eeeeee; margin: 0 auto;">
		    <div class="card" style="width: 100%;">
		        <div class="card-body">
		             <h5 class="card-title"><img src="../../img/phone.png" style="width:45px; height:45px;"/> Others Phone Numbers</h5>

		             @foreach ($pho as $ph)
		             <p class="card-text"><img src="../../img/phone.png" style="width:25px; height:25px;"/> 
         				 {{ $ph->phone }}
		             </p> 
		             @endforeach         
		             <a href="/contacts/about/newphone/{{$cont->id}}" class="card-link">Add a new number</a>    
		        </div>
		    </div>
		</div>
	</div><br><br>
   
</div>



@endsection