<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
    include("template/header.php");
?>
    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Thêm người xem mới</h5>
        <!-- Form thêm Dữ liệu nhân viên -->
        <form action="process-add-employee.php" method="post">
            <div class="form-group">
                <label for="txtHoTen">Họ và tên</label>
                <input type="text" class="form-control" id="txtHoTen" name="txtHoTen" placeholder="Nhập họ tên">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            
           
            <div class="form-group">
                <label for="txtEmail">Email</label>
                <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Nhập email">
               
            </div>
            <div class="form-group">
                <label for="txtHoTen">Mật khẩu</label>
                <input type="password" class="form-control" id="txtpassword" name="txtpassword" placeholder="Nhập mật khẩu">
               
            </div>
            
               
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
        </form>
    </div>    
    </main>

<?php
    include("template/footer.php");
?>