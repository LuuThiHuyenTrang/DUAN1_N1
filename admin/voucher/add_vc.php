<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h1 class="page-title"> THÊM VOUCHER </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">TRANG CHỦ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">DANH SÁCH VOUCHER</li>
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
                                <label for="exampleInputName1">Điều kiện </label>
                                <input type="number" class="form-control" id="exampleInputName1" placeholder="Số tiền tối thiểu đơn hàng" name="dieukien">
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
                            <button type="submit" class="btn btn-primary mr-2">GỬI</button>
                            <button type="reset" class="btn btn-dark">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>