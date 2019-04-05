<html>
    <body>
    <form action="{{URL::to('/result')}}" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="search_input" placeholder="search...">
            <button type="submit" class="btn btn-light"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
        </form>
    </body>
</html>