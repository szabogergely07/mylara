<html>
    <body>
    <form action="{{URL::to('/result')}}" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="search_input" placeholder="Search something...">
            <input class="btn btn-primary" type="submit">
        </div>
        </form>
    </body>
</html>