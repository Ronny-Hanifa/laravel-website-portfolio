@extends('layout.app')


@section('content')
	<div class="container">
<div class="row">
<div class="col-md-12 p-5">
<table id="VisitorDt" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">NO</th>
	  <th class="th-sm">IP</th>
	  <th class="th-sm">Date & Time</th>
    </tr>
  </thead>
  <tbody>
  	@foreach ($visitorData as $visitorsData)
	<tr>
      <td>{{ $visitorsData->id }}</td>
      <td>{{ $visitorsData->ip_address }}</td>
      <td>{{ $visitorsData->visiting_time }}</td>
    </tr>	{{-- expr --}}
	@endforeach
    
  </tbody>
</table>

</div>
</div>
</div>
@endsection