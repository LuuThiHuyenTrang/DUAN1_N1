<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> THÊM VOUCHER </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Danh Sách Voucher</li>
                </ol>
            </nav>
        </div>
        <h2 style="color: red; font-weight: 700;"><?= isset($mess) ? $mess : ""; ?></h2>

        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="/DUAN1_N1/admin/index.php?duong_link=tnyc_addvc" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputName1">Tên voucher </label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Tên voucher" name="tenvoucher">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Mô tả </label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Mô tả" name="mota">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Mức giảm giá </label>
                                <input type="number" class="form-control" id="exampleInputName1" placeholder="Mức giảm giá" name="mucgiamgia">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Số lượng </label>
                                <input type="number" class="form-control" id="exampleInputName1" placeholder="Số lượng" name="soluong">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Ngày tạo </label>
                                <input type="date" class="form-control" id="exampleInputName1" placeholder="Ngày tạo" name="ngaytao">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Hạn sử dụng </label>
                                <input type="date" class="form-control" id="exampleInputName1" placeholder="Hạn sử dụng" name="hsd">
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