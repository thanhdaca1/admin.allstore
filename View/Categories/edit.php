<p class="form-group h3">Chỉnh sửa danh mục</p>

<form action="<?= url_categories . url_edit ?>&id=<?= $_GET['id'] ?>" method="post">
  <p>
    <a href="<?= url_categories ?>" class="text-decoration-none">
      < Quay lại </a>
  </p>
  <input type="hidden" name="id" value="<?= $data['id'] ?>">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Tên danh mục</label>
      <input type="text" class="form-control" id="name" name="name" value="<?= $data['name'] ?>">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-12">
      <label for="description" class="form-label">Mô tả cho danh mục</label>
      <textarea class="form-control" id="description" rows="3" name="description"><?= $data['description'] ?></textarea>
    </div>
  </div>

  <button type="submit" class="btn btn-success" name="submit">Hoàn thành</button>

</form>