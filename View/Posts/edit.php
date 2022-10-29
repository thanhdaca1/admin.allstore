<p class="form-group h3">Chỉnh sửa bài viết</p>

<form action="<?= url_posts . url_edit ?>&id=<?= $_GET['id'] ?>" method="post">
  <p>
    <a href="<?= url_posts ?>" class="text-decoration-none">
      < Quay lại </a>
  </p>
  <input type="hidden" name="id" value="<?= $data['id'] ?>">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="title">Tên bài viết</label>
      <input type="text" class="form-control" id="title" name="title" value="<?= $data['title'] ?>">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-12">
      <label for="content" class="form-label">Mô tả cho danh mục</label>
      <textarea class="form-control" id="content" rows="10" name="content"><?= $data['content'] ?></textarea>
    </div>
  </div>

  <button type="submit" class="btn btn-success" name="submit">Hoàn thành</button>

</form>