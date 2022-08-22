@if (isset($edit))
    
<form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="firstName">First Name</label>
        <input type="text" class="form-control" id="firstName"
        name="first_name"
        value="{{ $user->first_name }}" required>
    </div>
    <div class="form-group">
        <label for="lastName">Last Name</label>
        <input type="text" class="form-control" id="lastName" 
        name="last_name"
        value="{{ $user->last_name }}" required>
    </div>
    <div class="form-group">
        <label for="userName">Username</label>
        <input type="text" class="form-control" id="userName" 
        name="user_name" 
        value="{{ $user->user_name }}"
        required>
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email"
        name="email"
        value="{{ $user->email }}"
        required>
    </div>
    <div class="form-group mb-5">
        <p>Choose status for user</p>
        <div class="form-group my-0">
            <input type="radio" id="administrator" name="status" value="administrator"
            @if ($user->role->name == "administrator")
                checked="checked"
            @endif
            required>
            <label for="administrator">Administrator</label>
        </div>
        <div class="form-group my-0">
            <input type="radio" id="editor" name="status" value="editor"
            @if ($user->role->name == "editor")
                checked="checked"
            @endif
            required>
            <label for="editor">Editor</label>
        </div>
        <div class="form-group my-0">
            <input type="radio" id="writer" name="status" value="writer"
            @if ($user->role->name == "writer")
                checked="checked"
            @endif
            required>
            <label for="writer">Writer</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>

<h1>CHANGE PASSWORD OPTION TODO</h1>

@endif





@if (isset($create))
    
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName"
            name="first_name" required>
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" 
            name="last_name" required>
        </div>
        <div class="form-group">
            <label for="userName">Username</label>
            <input type="text" class="form-control" id="userName" 
            name="user_name" required>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email"
            name="email"
            required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password"
            name="password"
            required>
        </div>
        <div class="form-group">
            <label for="passwordConfirmation">Password Confirm</label>
            <input type="password" class="form-control" id="passwordConfirmation" name="password_confirmation"
            required>
        </div>
        <div class="form-group mb-5">
            <p>Choose status for user</p>
            <div class="form-group my-0">
                <input type="radio" id="administrator" name="status" value="administrator" required>
                <label for="administrator">Administrator</label>
            </div>
            <div class="form-group my-0">
                <input type="radio" id="editor" name="status" value="editor" required>
                <label for="editor">Editor</label>
            </div>
            <div class="form-group my-0">
                <input type="radio" id="writer" name="status" value="writer" checked="checked" required>
                <label for="writer">Writer</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>

@endif