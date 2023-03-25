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
                            <input type="text" value="<?= $sp_can_edit['id'] ?>" name="id" hidden>
                            <div class="form-group">
                                <label for="exampleInputName1">Tên sản phẩm</label>
                                <input value="<?= $sp_can_edit['ten_sp'] ?>" type="text" class="form-control" id="exampleInputName1" placeholder="Name Product" name="tensp">
                            </div>
                            <div class="form-group">
                                <label>File Ảnh</label>
                                <input type="file" name="img" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Ngày nhập</label>
                                <input value="<?= $sp_can_edit['ngay_nhap'] ?>" type="date" class="form-control" id="exampleInputEmail3" placeholder="Date" name="ngaynhap">
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Mô tả</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="4" name="mota"> <?= $sp_can_edit['mo_ta'] ?> </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Loại</label>
                                <select class="form-control" id="exampleSelectGender" name="loai">

                                    <option value="<?= $sp_can_edit['id_dm'] ?>" selected> <?= $sp_can_edit['ten_loai'] ?></option>
                                    <?php foreach ($listdm as $dm) { ?>
                                        <option value="<?= $dm['id'] ?>">
                                            <?= $dm['ten_loai'] ?>
                                            <img src="/DUAN1_N1/image/<?= $dm['logo'] ?>" alt="deo">
                                        </option>

                                    <?php } ?>
                                </select>
                            </div>

                            <hr>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-dark">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>