<div class="card">
    <div class="card-header">
        <h2><i class="far fa-user mr-1"></i> Đăng ký</h2>
    </div>
    <div class="card-body">
        <form action="" method="POST" autocomplete="off">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Họ tên</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
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
            <div class="form-group row">
                <label for="password_confirmation" class="col-sm-3 col-form-label">Xác nhận mật khẩu</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>
            </div>
            <div class="text-center mt-4 mb-1">
                <a href="#" class="btn btn-secondary mx-2">
                    <i class="far fa-long-arrow-left mr-2"></i>
                    <span>Trở về</span>
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="far fa-save mr-2"></i>
                    <span>Đăng ký</span>
                </button>
            </div>
        </form>
    </div>
</div>