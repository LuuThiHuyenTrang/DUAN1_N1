<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Add Product </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Trang chủ</a>
                    </li>
                    <!-- <input class="breadcrumb-item" type="submit" name="themoi" value="Thêm sản phẩm"> -->
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="/DUAN1_N1/admin/index.php?duong_link=tnyc_addsp" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputName1">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name Product" name="tensp">
                            </div>
                            <div class="form-group">
                                <label>File Ảnh</label>
                                <input type="file" name="img" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Ngày nhập</label>
                                <input type="date" class="form-control" id="exampleInputEmail3" placeholder="Date" name="ngay">
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Mô tả</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="4" name="mota"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Loại</label>
                                <select class="form-control" id="exampleSelectGender" name="loai">
                                    <option value="1">Male</option>
                                    <option value="2">val</option>
                                </select>
                            </div>

                            <hr>
                            <div style="margin: 50px 0;">
                                <div class="d-flex justify-content-start">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Màu </label>
                                        <input  type="text" class="form-control" id="exampleInputName1" placeholder="Color Trắng Đen Đỏ" name="mau1">
                                    </div>
                                    <div class="form-group" style="margin: 0 30px;">
                                        <label for="exampleInputName1">Size </label>
                                        <input  type="text" class="form-control" id="exampleInputName1" placeholder="Size 36 37 38" name="size1">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1">Số Lượng </label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Quantily" name="soluong1">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label>File Ảnh</label>
                                        <input type="file" name="img1" class="form-control">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1">Tiền </label>
                                        <input type="number" class="form-control" id="exampleInputName1" placeholder="Quantily" name="tien1">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1">Giảm giá </label>
                                        <input type="number" class="form-control" id="exampleInputName1" placeholder="Quantily" name="giamgia1">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start">
                                    <div class="form-group">
                                        <label for="exampleInputName1"> </label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Color Trắng Đen Đỏ" name="mau2">
                                    </div>
                                    <div class="form-group" style="margin: 0 30px;">
                                        <label for="exampleInputName1"> </label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Size 36 37 38" name="size2">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1"></label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Quantily" name="soluong2">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label></label>
                                        <input type="file" name="img2" class="form-control">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1"> </label>
                                        <input type="number" class="form-control" id="exampleInputName1" placeholder="Quantily" name="tien2">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1"> </label>
                                        <input type="number" class="form-control" id="exampleInputName1" placeholder="Quantily" name="giamgia2">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start">
                                    <div class="form-group">
                                        <label for="exampleInputName1"> </label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Color Trắng Đen Đỏ" name="mau3">
                                    </div>
                                    <div class="form-group" style="margin: 0 30px;">
                                        <label for="exampleInputName1"> </label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Size 36 37 38" name="size3">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1"></label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Quantily" name="soluong3">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label></label>
                                        <input type="file" name="img3" class="form-control">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1"> </label>
                                        <input type="number" class="form-control" id="exampleInputName1" placeholder="Quantily" name="tien3">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1"> </label>
                                        <input type="number" class="form-control" id="exampleInputName1" placeholder="Quantily" name="giamgia3">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start">
                                    <div class="form-group">
                                        <label for="exampleInputName1"> </label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Color Trắng Đen Đỏ" name="mau4">
                                    </div>
                                    <div class="form-group" style="margin: 0 30px;">
                                        <label for="exampleInputName1"> </label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Size 36 37 38" name="size4">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1"></label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Quantily" name="soluong4">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label></label>
                                        <input type="file" name="img4" class="form-control">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1"> </label>
                                        <input type="number" class="form-control" id="exampleInputName1" placeholder="Quantily" name="tien4">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1"> </label>
                                        <input type="number" class="form-control" id="exampleInputName1" placeholder="Quantily" name="giamgia4">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2" name="themmoi">Thêm</button>
                            <button type="reset" class="btn btn-dark">Reset</button>
                            <?php
                                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>