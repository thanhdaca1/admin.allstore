<p class="form-group h3">Thêm mới bài viết</p>

<form action="<?= url_posts . url_addnew ?>" method="post">
  <p>
    <a href="<?= url_posts ?>" class="text-decoration-none">
      < Quay lại </a>
  </p>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="title">Tiêu đề bài viết</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-12">
      <label for="content" class="form-label">Nội dung của bài viết</label>
      <textarea class="form-control" id="content" rows="10" name="content"></textarea>
    </div>
  </div>

  <button type="submit" class="btn btn-success" name="submit">Hoàn thành</button>

</form>