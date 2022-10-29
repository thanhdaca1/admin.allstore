<p class="form-group h3">Danh sách Bài Viết</p>
<div class="form-group">
  <a href="<?= url_posts . url_addnew ?>">
    <button type="button" class="btn btn-primary">
      Thêm bài viết
    </button>
  </a>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tiêu đề</th>
      <th scope="col">Nội dung</th>
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
            <td>" . $item['title'] . "</td>
            <td>" . $item['content'] . "</td>
            <td>" . $item['user_id'] . "</td>
            <td>" . $item['created_at'] . "</td>
            <td>" . $item['updated_at'] . "</td>
            <td>
              <a href='" . url_posts . url_edit . "&id=" . $item['id'] . "' class='text-decoration-none'>
                Sửa
              </a>
              <a href='" . url_posts . url_delete . "&id=" . $item['id'] . "' class='text-danger text-decoration-none'>
                Xoá
              </a>
            </td>
          </tr>";
      }
    ?>
  </tbody>
</table>