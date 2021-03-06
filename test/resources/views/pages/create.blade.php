@extends("bootstrap_section.head")

@section("content")
    <div class="jumbotron">
        <form class="form-horizontal" action="{{url("/create")}}" method="post">
            {{csrf_field()}}
            @if(count($errors)>0)
                @foreach($errors->all() as $err)
                    <div class="alert alert-danger">
                        {{$err}}
                    </div>
                @endforeach
            @endif
            <div class="form-group">
                <label class="control-label col-sm-2" for="tittle">TITTLE:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="tittle" id="email" placeholder="ENTER TITTLE">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="descriptions">DESCRIPTIONS:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="pwd" name="descriptions" placeholder="ENTER DESCRIPTIONS">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">CREATE</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@extends("bootstrap_section.footer")