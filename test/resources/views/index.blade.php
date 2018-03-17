@extends("bootstrap_section.head")

@section("content")

    <table class="table">
    @if(session("info"))
            <div class="col-mg-6 alert alert-success">
                {{session("info")}}
            </div>
    @endif
    <thead>
    <tr>
        <th>Tittle</th>
        <th>Descriptions</th>
        <th>Date</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @if(count($staff) > 0)
    @foreach( $staff->all() as $post)

    <tr>
        <td>{{$post->tittle}}</td>
        <td>{{$post->descriptions}}</td>
        <td>{{$post->created_at}}</td>
        <td>
            <a href="{{ url("/read/{$post->id}")}}" class="btn btn-primary">READ</a>
            <a href="{{ url("/delete/{$post->id}")}}" class="btn btn-danger">DELETE</a>
        <a href='{{ url("/update/{$post->id}") }}' class="btn btn-info">EDIT</a>
        </td>
    </tr>
    @endforeach
    @endif
    </tbody>
</table>
@endsection
@extends("bootstrap_section.footer")