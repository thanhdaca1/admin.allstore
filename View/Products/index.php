<p class="form-group h3">Danh sách sản phẩm</p>
<div class="form-group">
  <a href="<?= url_products . url_addnew ?>">
    <button type="button" class="btn btn-primary">
      Thêm sản phẩm
    </button>
  </a>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Danh mục</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Giá (VNĐ)</th>
      <th scope="col">Tồn kho</th>
      <th scope="col">Đã bán</th>
      <th scope="col">Người tạo</th>
      <th scope="col">Ngày thêm</th>
      <th scope="col">Ngày cập nhật</th>
      <th scope="col">Thao tác</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if ($data)
      foreach ($data as $key => $item) {
        echo
        "<tr>
            <th scope='row'>" . $item['id'] . "</th>
            <td>" . $item['name'] . "</td>
            <td>" . $item['category_id'] . "</td>
            <td>
              <img src='" . upload_product . $item['image'] . "' height='50' width='50'>
            </td>
            <td>" . $item['price'] . "</td>
            <td>" . $item['quantity'] . "</td>
            <td>" . $item['sold'] . "</td>
            <td>" . $item['user_id'] . "</td>
            <td>" . $item['created_at'] . "</td>
            <td>" . $item['updated_at'] . "</td>
            <td>
              <a href='" . url_products . url_edit . "&id=" . $item['id'] . "' class='text-decoration-none'>
                Sửa
              </a>
              <a href='" . url_products . url_delete . "&id=" . $item['id'] . "' class='text-danger text-decoration-none'>
                Xoá
              </a>
            </td>
          </tr>";
      }
    ?>
  </tbody>
</table>