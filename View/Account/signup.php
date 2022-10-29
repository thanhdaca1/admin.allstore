<div class="row justify-content-center mt-5">
  <div class="col-6">
    <div class="card w-100">
      <div class="card-body">
        <h2 class="card-title form-group">Đăng ký</h2>
        <br>
        <form action="<?= url_signup ?>" method="post">
          <div class="form-group">
            <label for="name">Họ và Tên</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="form-group">
            <label for="email">Địa chỉ email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="phone">Số điện thoại</label>
            <input type="number" class="form-control" id="phone" name="phone">
          </div>
          <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="form-group">
            <label class="form-check-label">
              Đã có tài khoản? <a href="<?= url_login ?>">Đăng nhập ngay</a>
            </label>
          </div>
          <button type="submit" class="btn btn-primary" name="signup">Đăng ký</button>
        </form>
      </div>
    </div>
  </div>
</div>