<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Quản lý sinh viên điểm danh</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Trường ĐH Thủy Lợi</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Quản lý điểm danh</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Danh sách sinh viên -->
  <div class="container mt-4">
    <h3>Danh sách sinh viên</h3>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Họ và tên</th>
          <th scope="col">Mã số sinh viên</th>
          <th scope="col">Lớp</th>
          <th scope="col">Trạng thái điểm danh</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Nguyễn Văn A</td>
          <td>123456</td>
          <td>18TCLC1</td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Đã điểm danh
              </label>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Trần Thị B</td>
          <td>234567</td>
          <td>18TCLC2</td>
          <td>
            <div class="form-check-input">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
              <label class="form-check-label" for="defaultCheck2">
                Chưa điểm danh
              </label>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Phạm Văn C</td>
          <td>345678</td>
          <td>18TCLC3</td>
          <td>
            <div class="form-check-input">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
              <label class="form-check-label" for="defaultCheck3">
                Chưa điểm danh
              </label>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Footer -->
  <footer class="footer mt-auto py-3 bg-light">
    <div class="container">
      <span class="text-muted" style="text-align: center;">Trường Đại Học Thủy Lợi</span>
    </div>
  </footer>

</body>
</html>