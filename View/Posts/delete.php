<p class="form-group h3">Xóa bài viết</p>

<form action="<?= url_posts . url_delete ?>&id=<?= $_GET['id'] ?>" method="post">
  
  <input type="hidden" name="id" value="<?= $data['id'] ?>">
  

  <div class="alert alert-danger" role="alert">
    Bạn có muốn xóa bài viết: "<?=$data['title'] ?>" này không ???
  </div>

  <a href="<?= url_posts ?>" class="text-decoration-none">
  <button type="button" class="btn btn-secondary" name="">Quay lại</button>
  </a>

  <button type="submit" class="btn btn-danger" name="submit">Xác nhận</button>
  
</form>