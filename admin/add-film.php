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
        <h3 class="text-center text-primary mt-5">THÊM PHIM MỚI </h3>
        <!-- Form thêm Dữ liệu nhân viên -->
        <form action="process-add-film.php" method="post">
            <div class="form-group">
                <label for="txtTenPhim">Tên phim</label>
                <input type="text" class="form-control" id="txtTenPhim" name="txtTenPhim" placeholder="Nhập họ tên">
                
            </div>
            
            <div class="form-group">
                <label for="txtTrangThai">Trạng thái</label>
                <input type="text" class="form-control" id="txtTrangThai" name="txtTrangThai" placeholder="Nhập trạng thái phim">
                
            </div>

            <div class="form-group">
                <label for="txtTacGia">Tác giả </label>
                <input type="text" class="form-control" id="txtTacGia" name="txtTacGia" placeholder="Nhập tác giả">
                
            </div>
            <div class="form-group">
                <label for="txtDaoDien">Đạo diễn</label>
                <input type="text" class="form-control" id="txtDaoDien" name="txtDaoDien" placeholder="Tên đạo diễn">
                
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Loại phim</label>
                <select class="form-control" id="cboLoaiPhim" name="cboLoaiPhim">
                    <!-- Truy vấn dữ liệu để Hiển thị lựa chọn Đơn vị -->
                    <?php 
                        // Bước 01: Kết nối Database Server
                        $conn = mysqli_connect('localhost','root','','netflix');
                        if(!$conn){
                            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                        }
                        // Bước 02: Thực hiện truy vấn
                        $sql = "SELECT * FROM category";

                        $result = mysqli_query($conn,$sql);

                        // Bước 03: Xử lý kết quả truy vấn
                        if(mysqli_num_rows($result)){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                                <option value="<?php echo $row['category_id']; ?>"><?php echo $row['name']; ?></option>
                    <?php
                            }
                        }
                        // Bước 04: Đóng kết nối
                        mysqli_close($conn);
                    ?>
               
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect3">Kiểu phim</label>
                <select class="form-control" id="cbokieuphim" name="cbokieuphim">
                    <!-- Truy vấn dữ liệu để Hiển thị lựa chọn Đơn vị -->
                    <?php 
                        // Bước 01: Kết nối Database Server
                        $conn = mysqli_connect('localhost','root','','netflix');
                        if(!$conn){
                            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                        }
                        // Bước 02: Thực hiện truy vấn
                        $sql = "SELECT * FROM typemovie";

                        $result = mysqli_query($conn,$sql);

                        // Bước 03: Xử lý kết quả truy vấn
                        if(mysqli_num_rows($result)){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                                <option value="<?php echo $row['type_movie']; ?>"><?php echo $row['nametm']; ?></option>
                    <?php
                            }
                        }
                        // Bước 03: Đóng kết nối
                        mysqli_close($conn);
                    ?>
               
                </select>
            </div>
            
            <div class="form-group">
                <label for="txtNam">Năm ra mắt</label>
                <input type="text" class="form-control" id="txtNam" name="txtNam" placeholder="Năm ra mắt">
                
            </div>
            <div class="form-group">
                <label for="txtAnh">Ảnh bìa</label>
                <input type="text" class="form-control" id="txtAnh" name="txtAnh" placeholder="Link anh">
                
            </div>
            <div class="form-group">
                <label for="txtNoiDung">Nội dung</label>
                <input type="text" class="form-control" id="txtNoiDung" name="txtNoiDung" placeholder="Nội dung phim">
                
            </div>
            <div class="form-group">
                <label for="txtThoiLuong">Thời lượng</label>
                <input type="text" class="form-control" id="txtThoiLuong" name="txtThoiLuong" placeholder="Thời lượng phim ">
            </div>
            <button type="submit" class="btn btn-danger mt-3">Lưu lại</button>
            </div>

            
        </form>
    </div>    
    </main>

<?php
    include("template/footer.php");
?>