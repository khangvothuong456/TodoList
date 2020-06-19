<div class="card">
    <form action="" method="POST" autocomplete="off" id="edit-task-form">
        @csrf
        <div class="card-header">
            <h2><i class="far fa-edit mr-1"></i> Cập nhật</h2>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="title">Tiêu đề</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="description">Nội dung</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="deadline_at">Hạn chót</label>
                <input type="date" class="form-control" id="deadline_at" name="deadline_at">
            </div>
            <div class="form-group">
                <label for="deadline_at">Đã hoàn thành</label>
                <div class="custom-control custom-radio">
                    <input type="radio" id="radio-1" name="is_completed" class="custom-control-input" checked>
                    <label class="custom-control-label" for="radio-1">No</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="radio-2" name="is_completed" class="custom-control-input">
                    <label class="custom-control-label" for="radio-2">Yes</label>
                </div>
            </div>
        </div>
        <div class="card-footer text-center py-3">
            <a href="#" class="btn btn-secondary rounded-0 mr-1">
                <i class="far fa-long-arrow-left mr-2"></i> Trở về
            </a>
            <button type="submit" class="btn btn-primary rounded-0 ml-1">
                <i class="far fa-save mr-2"></i> Lưu thiết lập
            </button>
        </div>
    </form>
</div>