<div class="row">
    <div class="col-6">
        <form action="{{ route('order') }}" method="GET" class="form-inline my-lg-0">
            @csrf
            <div class="form-row my-2">
                <label for="orderBy">Order by</label>
                <select class="form-control ml-2 mr-4" name="order_by" id="orderBy">
                    <option value="created_at">Date</option>
                    <option value="first_name">First Name</option>
                    <option value="last_name">Last Name</option>
                    <option value="user_name">Username</option>
                    <option value="email">Email</option>
                </select>
            </div>

            <div class="form-row my-2">
                <button class="btn btn-outline-success btn-md my-2 my-sm-0 px-3" type="submit">Order</button>
            </div>
        </form>
    </div>

    <div class="col-6">
        <form action="{{ route('search') }}" method="GET" class="form-inline  my-lg-0">
            @csrf
            <label for="searchBy">Filter by User</label>
        
            <input id="searchBy" name="keywords" type="search" class="form-control mx-2" placeholder="search for user name, email,etc">

            <button type="submit" class="btn btn-outline-success btn-md my-2 my-sm-0 px-3">Search</button>
        </form>
    </div>


    <div class="col-12 mt-3">
        <form action="{{ route('filter.role') }}" method="GET">
            @csrf
            <div class="form-row my-2">
                <label class="mr-3 mt-2" for="filterByRole">Filter by Role/status:</label>
                <ul id="filterByRole" class="list-group list-group-horizontal px-1">
                    @foreach ($roles as $role)
                        <li class="mr-3 mt-2">
                            <label for="{{ $role->name }}">
                                <input id="{{ $role->name }}" type="radio" value="{{ $role->id }}" name="role">
                                {{ $role->name }}
                            </label>
                        </li>
                    @endforeach
                    <button type="submit" class="btn btn-outline-success btn-md my-sm-0 px-3">Filter</button>
                </ul>
            </div>
        </form>
    </div>


    {{-- Did not make it to complete this filter --}}
    {{-- <div class="col-12 mt-3">
        <form action="{{ route('filter.permission') }}" method="GET">
        @csrf
            <div class="form-row my-2">
                <label class="mr-3 mt-2" for="filterByUser">Filter by Permission:</label>
                <ul id="filterByUser" class="list-group list-group-horizontal px-1">
                    @foreach ($permissions as $permission)
                        <li class="mr-3 mt-2">
                            <label for="{{ $permission->code }}">
                                <input id="{{ $permission->code }}" type="checkbox" value="{{ $permission->code }}" name="permission[]">
                                {{ $permission->description }}
                            </label>
                        </li>
                    @endforeach
                    <button type="submit" class="btn btn-outline-success btn-md my-sm-0 px-3">Filter</button>
                </ul>
            </div>
        </form>
        
    </div> --}}


</div>