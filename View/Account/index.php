<p class="form-group h3">Danh sách tài khoản</p>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Họ và tên</th>
      <th scope="col">Email</th>
      <th scope="col">Số điện thoại</th>
      <!-- <th scope="col">Ảnh đại diện</th> -->
      <th scope="col">Ngày tạo tài khoản</th>
      <th scope="col">Ngày cập nhật</th>
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
            <td>" . $item['email'] . "</td>
            <td>" . $item['phone'] . "</td>
            
            <td>" . $item['created_at'] . "</td>
            <td>" . $item['updated_at'] . "</td>
          </tr>";

        // <td>
        //     <img src='" . upload_account . $item['avatar'] . "' height='50' width='50'>
        //   </td>
      }
    ?>
  </tbody>
</table>