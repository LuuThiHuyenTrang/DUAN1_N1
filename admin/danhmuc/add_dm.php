<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> THÊM DANH MỤC </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Danh Sách Danh Mục</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="/DUAN1_N1/admin/index.php?duong_link=tnyc_adddm" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputName1">Tên </label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Tên loại" name="tenloai">
                            </div>
                            <div class="form-group">
                                <label>File Ảnh LOGO</label>
                                <input type="file" name="logo" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Tên thương hiệu </label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Tên thương hiệu" name="tenTH">
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