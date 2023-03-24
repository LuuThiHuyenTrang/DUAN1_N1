<?php
if (is_array($sp)){
    extract($sp);
}


$sp["hinh"];


?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Edit Product </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Thêm Sản Phẩm</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="/DUAN1_N1/admin/index.php?duong_link=tnyc_updatesp" method="POST" enctype="multipart/form-data">
                           <input type="text" value="<?=$sp['id']?>" name ="id" hidden>
                        <div class="form-group">
                                <label for="exampleInputName1">Tên sản phẩm</label>
                                <input value="<?= $sp['ten_sp'] ?>" type="text" class="form-control" id="exampleInputName1" placeholder="Name Product" name="tensp">
                            </div>
                            <div class="form-group">
                                <label>File Ảnh</label>
                                <input type="file" name="img" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Ngày nhập</label>
                                <input value="<?= $sp['ngay_nhap'] ?>" type="date" class="form-control" id="exampleInputEmail3" placeholder="Date" name="ngaynhap">
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Mô tả</label>
                                <textarea  class="form-control" id="exampleTextarea1" rows="4" name="mota"> <?= $sp['mo_ta'] ?> </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Loại</label>
                                <select  class="form-control" id="exampleSelectGender" name="loai">

                                    <option value="<?= $sp['id_dm'] ?>" selected> <?= $sp['id_dm'] ?></option>
                                    <option value="1">Male</option>
                                    <option value="2">val</option>
                                </select>
                            </div>
<?php var_dump($sp) ?>
                            <hr>
                            <div style="margin: 50px 0;">
                                <div class="d-flex justify-content-start">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Màu</label>
                                        <input value="<?= $sp['mau'] ?>" type="text" class="form-control" id="exampleInputName1" placeholder="Color Trắng Đen Đỏ" name="mau1">
                                    </div>
                                    <div class="form-group" style="margin: 0 30px;">
                                        <label for="exampleInputName1">Size </label>
                                        <input value="<?= $sp['size'] ?>" type="text" class="form-control" id="exampleInputName1" placeholder="Size 36 37 38" name="size1">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1">Số Lượng </label>
                                        <input value="<?= $sp['so_luong'] ?>" type="text" class="form-control" id="exampleInputName1" placeholder="Quantily" name="soluong1">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label>File Ảnh</label>
                                        <input type="file" name="img1" class="form-control">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1">Tiền</label>
                                        <input value="<?= $sp['tien'] ?>" type="number" class="form-control" id="exampleInputName1" placeholder="Quantily" name="tien1">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1">Giảm giá </label>
                                        <input value="<?= $sp['giam_gia'] ?>" type="number" class="form-control" id="exampleInputName1" placeholder="Quantily" name="giamgia1">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start">
                                    <div class="form-group">
                                        <label for="exampleInputName1"> </label>
                                        <input value="<?= $sp['mau'] ?>" type="text" class="form-control" id="exampleInputName1" placeholder="Color Trắng Đen Đỏ" name="mau2">
                                    </div>
                                    <div class="form-group" style="margin: 0 30px;">
                                        <label for="exampleInputName1"> </label>
                                        <input value="<?= $sp['size'] ?>" type="text"   class="form-control" id="exampleInputName1" placeholder="Size 36 37 38" name="size2">
                                    </div>exampleInputName1
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1"></label>
                                        <input value="<?= $sp['so_luong'] ?>" type="text" class="form-control" id="" placeholder="Quantily" name="soluong2">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label></label>
                                        <input type="file" name="img2" class="form-control">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1"> </label>
                                        <input value="<?= $sp['tien'] ?>" type="number" class="form-control" id="exampleInputName1" placeholder="Quantily" name="tien2">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1"> </label>
                                        <input value="<?= $sp['giam_gia'] ?>" type="number" class="form-control" id="exampleInputName1" placeholder="Quantily" name="giamgia2">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start">
                                    <div class="form-group">
                                        <label for="exampleInputName1"> </label>
                                        <input value="<?= $sp['mau'] ?>"type="text" class="form-control" id="exampleInputName1" placeholder="Color Trắng Đen Đỏ" name="mau3">
                                    </div>
                                    <div class="form-group" style="margin: 0 30px;">
                                        <label for="exampleInputName1"> </label>
                                        <input value="<?= $sp['size'] ?>" type="text" class="form-control" id="exampleInputName1" placeholder="Size 36 37 38" name="size3">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1"></label>
                                        <input value="<?= $sp['so_luong'] ?>" type="text" class="form-control" id="exampleInputName1" placeholder="Quantily" name="soluong3">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label></label>
                                        <input type="file" name="img3" class="form-control">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1"> </label>
                                        <input value="<?= $sp['tien'] ?>" type="number" class="form-control" id="exampleInputName1" placeholder="Quantily" name="tien3">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1"> </label>
                                        <input value="<?= $sp['giam_gia'] ?>" type="number" class="form-control" id="exampleInputName1" placeholder="Quantily" name="giamgia3">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start">
                                    <div class="form-group">
                                        <label for="exampleInputName1"> </label>
                                        <input alue="<?= $sp['mau'] ?>" type="text" class="form-control" id="exampleInputName1" placeholder="Color Trắng Đen Đỏ" name="mau4">
                                    </div>
                                    <div class="form-group" style="margin: 0 30px;">
                                        <label for="exampleInputName1"> </label>
                                        <input value="<?= $sp['size'] ?>" type="text" class="form-control" id="exampleInputName1" placeholder="Size 36 37 38" name="size4">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1"></label>
                                        <input value="<?= $sp['so_luong'] ?>" type="text" class="form-control" id="exampleInputName1" placeholder="Quantily" name="soluong4">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label></label>
                                        <input type="file" name="img4" class="form-control">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1"> </label>
                                        <input value="<?= $sp['tien'] ?>" type="number" class="form-control" id="exampleInputName1" placeholder="Quantily" name="tien4">
                                    </div>
                                    <div class="form-group" style="margin-right: 30px;">
                                        <label for="exampleInputName1"> </label>
                                        <input value="<?= $sp['giam_gia'] ?>" type="number" class="form-control" id="exampleInputName1" placeholder="Quantily" name="giamgia4">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id" id="" value="<?php if(isset($id) && ($id > 0 )) echo $id ;?>">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-dark">Reset</button>
                            <a href="index.php?duong_link=listsp">
                                <input class="btn btn-dark" type="button" value="Danh sách sản phẩm">
                            </a>
                            <?php
                                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>