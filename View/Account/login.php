<div class="row justify-content-center mt-5">
  <div class="col-6">
    <div class="card w-100">
      <div class="card-body">
        <h2 class="card-title form-group">Đăng nhập</h2>
        <br>
        <form action="<?= url_login ?>" method="post">
          <div class="form-group">
            <label for="email">Địa chỉ email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="form-group">
            <label class="form-check-label">
              Chưa có tài khoản? <a href="<?= url_signup ?>">Đăng ký ngay</a>
            </label>
          </div>
          <button type="submit" class="btn btn-primary" name="login">Đăng nhập</button>
        </form>
      </div>
    </div>
  </div>
</div>