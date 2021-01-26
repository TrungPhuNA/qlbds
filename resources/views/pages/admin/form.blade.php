<form class="" method="POST" >
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Email Login</label>
        <input type="email" class="form-control" name="email"  placeholder="" required value="{{ $admin->email ?? '' }}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
        <input type="password" class="form-control" name="password"  placeholder="" {{ isset($admin) ? '' : 'required' }} value="">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" name="name" value="{{ $admin->name ?? '' }}" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Phone</label>
        <input type="text" class="form-control" name="phone" value="{{ $admin->phone ?? '' }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Thêm mới</button>
    <a href="{{ route('get.admin.index') }}" class="btn btn-outline-danger">Trở về </a>
</form>
