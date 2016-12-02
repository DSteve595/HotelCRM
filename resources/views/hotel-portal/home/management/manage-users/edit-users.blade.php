<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title"><i class="fa fa-user-plus"></i> Add an agent</h4>
    </div>
    <div class="panel-body">
        <form method="{{ @url('home/manage-users') }}" type="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="checkbox">
                <input type="checkbox" name="isAdmin" checked>
                <label for="checkbox_1">Is administrator?</label>
            </div>
            <button type="submit" class="btn btn-primary col-xs-12">Submit</button>
        </form>
    </div>
</div>
