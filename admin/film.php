<?php
require "template/header.php";
?>
    <main>
        <div class="container_admin container">
            <h5 class="text-center text-primary mt-5">THÔNG TIN CHI TIẾT PHIM</h5>
            <div>
                <a class="btn btn-primary" href="add_employee.php">Thêm phim</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên phim</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Tác giả</th>
                        <th scope="col">Đạo diễn</th>
                        <th scope="col">Loại phim</th>
                        <th scope="col">Kiểu phim</th>
                        <th scope="col">Năm</th>
                        <th scope="col">Ảnh bìa</th>
                        <th scope="col">Nội dung</th>
                        <th scope="col">Thời lượng</th>
                        <th scope="col">Lượt xem</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                    <?php
                        // Bước 01: Kết nối Database Server
                        $conn = mysqli_connect('localhost','root','','netflix');
                        if(!$conn){
                            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                        }
                        // Bước 02: Thực hiện truy vấn
                        $sql = "SELECT fl.id, fl.name, fl.status, fl.director, fl.actor, fl.category_id, fl.type_movie, fl.year, fl.image, fl.description, fl.duration, fl.num_view  FROM film fl ";
                        $result = mysqli_query($conn,$sql);
                        // Bước 03: Xử lý kết quả truy vấn
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                                <tr>
                                    <th scope="row"><?php echo $row['id']; ?></th>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['status']; ?></td>
                                    <td><?php echo $row['director']; ?></td>
                                    <td><?php echo $row['actor']; ?></td>
                                    <td><?php echo $row['category_id']; ?></td>
                                    <td><?php echo $row['type_movie']; ?></td>
                                    <td><?php echo $row['year']; ?></td>
                                    <td><?php echo $row['image']; ?></td>
                                    <td><?php echo $row['description']; ?></td>
                                    <td><?php echo $row['duration']; ?></td>
                                    <td><?php echo $row['num_view']; ?></td>
                                  
                                
                                    <td><a href="update_employee.php?id=<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a href="delete_employee.php?id=<?php echo $row['id']; ?>"><i class="bi bi-trash"></i></a></td>
                                </tr>
                    <?php
                            }
                        }
                        // Bước 04: Đóng kết nối Database Server
                        mysqli_close($conn);
                        <img src="" alt="">
                    ?>
                  
                    
                </tbody>
                </table>
        </div>    
    </main>

<?php
    include("template/footer.php");
?>