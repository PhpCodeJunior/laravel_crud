@extends("bootstrap_section.head")

@section("content")

    <table class="table">

        <thead>
        <tr>
            <th>Tittle</th>
            <th>Descriptions</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        @if(count($staff) > 0)
            @foreach( $staff->all() as $post)

                <tr>
                    <td>{{$post->tittle}}</td>
                    <td>{{$post->descriptions}}</td>
                    <td>{{$post->created_at}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection
@extends("bootstrap_section.footer")