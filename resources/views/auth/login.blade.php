<div class="card">
    <div class="card-header">
        <h2><i class="far fa-sign-in mr-1"></i> Đăng nhập</h2>
    </div>
    <div class="card-body">
        <form action="" method="POST" autocomplete="off">
            @csrf
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-3 col-form-label">Mật khẩu</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>
            <div class="text-center mt-4 mb-1">
                <button type="submit" class="btn btn-primary">
                    <i class="far fa-sign-in mr-2"></i>
                    <span>Đăng nhập</span>
                </button>
            </div>
            <div class="text-center mt-3">
                <span>Bạn chưa có tài khoản? <a href="#">Đăng ký</a></span>
            </div>
        </form>
    </div>
</div>