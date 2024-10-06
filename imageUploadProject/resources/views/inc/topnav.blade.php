<div class="d-flex justify-content-between align-items-center">
    <div>
        <a class="btn btn-danger" href="{{ route('home') }}"> Home </a>
        <a class="btn btn-primary" href="{{ route('create') }}"> Create Student </a>
        <a class="btn btn-primary" href="{{ route('list') }}"> Show all students</a>
    </div>

    <!-- Search form on the right -->
    <form class="form-inline" method="post" action="{{ route('search') }}">
        {{ csrf_field() }}
        <input class="form-control mr-sm-2" type="search" name="SearchId" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>