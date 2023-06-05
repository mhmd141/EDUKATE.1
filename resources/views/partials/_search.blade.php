<form action="{{route('search')}}" method="POST">
    @csrf
        <div class="input-group">
        <div class="input-group-prepend">
            <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Courses</button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Courses 1</a>
                    <a class="dropdown-item" href="#">Courses 2</a>
                    <a class="dropdown-item" href="#">Courses 3</a>
                </div>
            <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="Keyword" name="q">
                <div class="input-group-append">
                    <button class="btn btn-secondary px-4 px-lg-5">Search</button>
                 </div>
        </div>
    </div>
</form>
