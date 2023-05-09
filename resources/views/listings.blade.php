<h1>{{$heading}}</h1>

@unless (count($workposts) == 0)
@foreach($workposts as $workpost)
<h2>
    {{$workpost['title']}}
</h2>
<p>
    {{$workpost['description']}}
</p>
@endforeach

@else
<p>No work posts found</p>
@endunless