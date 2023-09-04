<h2> <a href="{{route('subject.create')}}"> Add + </a></h2>


@foreach ($allData as $subjects)

<h2> Title: {{$subjects->sub_name}} </h2>
<h2> Details: {{$subjects->sub_details}} </h2>
<h2> Status: {{$subjects->sub_status}} </h2> 
<p> <a href="{{route('subject.edit',$subjects->id)}}"> Edit </a> &nbsp;&nbsp; 
<form action="{{ route('subject.destroy',$subjects->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" class="del-btn"> Delete </button>

</form><br>

@endforeach