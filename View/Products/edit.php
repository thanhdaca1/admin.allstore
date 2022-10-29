<p class="form-group h3">Chỉnh sửa sản phẩm</p>

<form action="<?= url_products . url_edit ?>&id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">
  <p>
    <a href="<?= url_products ?>" class="text-decoration-none">
      < Quay lại </a>
  </p>
  <input type="hidden" name="id" value="<?= $data['id'] ?>">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Tên sản phẩm</label>
      <input type="text" class="form-control" id="name" name="name" value="<?= $data['name'] ?>">
    </div>

    <div class="form-group col-md-6">
      <label for="price">Giá (VNĐ)</label>
      <input type="number" class="form-control" id="price" name="price" value="<?= $data['price'] ?>">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="category">Danh mục</label>
      <select id="category" class="custom-select" name="category_id">
        <option selected hidden disabled>Chọn...</option>
        <?php
        foreach ($categories as $key => $item) {
          $selected = $item['id'] == $data['category_id'] ? 'selected' : '';
          echo
          "<option value='" . $item['id'] . "' " . $selected . ">"
            . $item['name'] .
            "</option>";
        }
        ?>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="quantity">Số lượng tồn kho</label>
      <input type="number" class="form-control" id="quantity" name="quantity" value="<?= $data['quantity'] ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="image">Hình ảnh sản phẩm</label>
      <div class="input-group">
        <input type="file" class="custom-file-input" id="image" name="image">
        <input type="hidden" name="old_image" value="<?= $data['image'] ?>">
        <label class="custom-file-label" for="image">Lựa chọn hình ảnh</label>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-12">
      <label for="description" class="form-label">Mô tả cho sản phẩm</label>
      <textarea class="form-control" id="description" rows="7" name="description"><?= $data['description'] ?></textarea>
    </div>
  </div>

  <button type="submit" class="btn btn-success" name="submit">Hoàn thành</button>

</form>