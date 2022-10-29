<p class="form-group h3">Thêm mới sản phẩm</p>

<form action="<?= url_products . url_addnew ?>" method="post" enctype="multipart/form-data">
  <p>
    <a href="<?= url_products ?>" class="text-decoration-none">
      < Quay lại </a>
  </p>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Tên sản phẩm</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>

    <div class="form-group col-md-6">
      <label for="price">Giá (VNĐ)</label>
      <input type="number" class="form-control" id="price" name="price">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="category">Danh mục</label>
      <select id="category" class="custom-select" name="category_id">
        <option selected hidden disabled>Chọn...</option>
        <?php
        foreach ($categories as $key => $item) {
          echo "<option value='" . $item['id'] . "'>" . $item['name'] . "</option>";
        }
        ?>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="quantity">Số lượng tồn kho</label>
      <input type="number" class="form-control" id="quantity" name="quantity">
    </div>

    <div class="form-group col-md-4">
      <label for="image">Hình ảnh sản phẩm</label>
      <div class="input-group">
        <input type="file" class="custom-file-input" id="image" name="image">
        <label class="custom-file-label" for="image">Lựa chọn hình ảnh</label>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-12">
      <label for="description" class="form-label">Mô tả cho sản phẩm</label>
      <textarea class="form-control" id="description" rows="7" name="description"></textarea>
    </div>
  </div>

  <button type="submit" class="btn btn-success" name="submit">Hoàn thành</button>

</form>