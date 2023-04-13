<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h1 class="page-title"> HÓA ĐƠN </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php?duong_link=addsp"></a></li>
                </ol>
            </nav>
        </div>
        <h2 style="color: red; font-weight: 700;"><?= isset($mess) ? $mess : ""; ?></h2>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <a href="/DUAN1_N1/admin/index.php?duong_link=listhd">
                                    <h3>All</h3>
                                </a>
                                <form action="/DUAN1_N1/admin/index.php?duong_link=listhd" method="post">
                                    <input type="text" name="idhd" placeholder="ID hóa đơn" style="width: 100px;">
                                    <button type="submit" class="btn btn-outline-success" style="color: black;">Tìm</button>
                                </form>
                                <form action="/DUAN1_N1/admin/index.php?duong_link=listhd" method="post">
                                    <select name="trang_thai" style="width: 130px;">
                                        <option> Lọc Trạng Thái</option>
                                        <option value="đã xác nhận">Đã xác nhận</option>
                                        <option value="chưa xác nhận">Chưa xác nhận</option>
                                    </select>
                                    <button type="submit" class="btn btn-outline-warning" style="color: black;">Lọc</button>
                                </form>
                                <form action="/DUAN1_N1/admin/index.php?duong_link=listhd" method="post">
                                    <select name="tinh_trang" style="width: 130px;">
                                        <option>Lọc Tình Trạng</option>
                                        <option value=" Đang chuẩn bị hàng">Đang chuẩn bị hàng</option>
                                        <option value="Đang giao">Đang giao</option>
                                        <option value="Giao hàng thành công">Giao hàng thành công</option>
                                        <option value="Hủy hàng" style="color: red; font-weight: 700;">Đã hủy hàng</option>
                                    </select>
                                    <button type="submit" class="btn btn-outline-info" style="color: black;">Lọc</button>
                                </form>
                            </div>
                            <table class="table table-striped" style="color: black; font-weight: 500;">
                                <thead>
                                    <tr>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> # </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Thông tin khách mua </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Số sản phẩm </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Voucher </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Tổng tiền </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Ngày đặt </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Trạng thái </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Tình trạng </th>
                                        <th style="color: blue; font-size: 20px; font-weight: 700;"> Action </th>
                                    </tr>
                                </thead>
                                <tbody style="color:black">
                                    <?php foreach ($listhd as $hd) {
                                        $so_sp_mua = so_sp_mua($hd["id"]);
                                    ?>
                                        <tr>
                                            <td width="5%"><?= $hd['id']; ?></td>
                                            <td style="line-height: 20px;"> - <?= $hd['ten_kh']; ?> <br> - <?= $hd['sdt']; ?> <br> - <?= $hd['email']; ?><br> - <?= $hd['dia_chi']; ?></td>
                                            <td><?= $so_sp_mua ?></td>
                                            <td> <?= $hd['ten_voucher']; ?> </td>
                                            <td style="color: red; font-weight: 900; "> <?= number_format($hd['tong_tien']); ?>VNĐ </td>
                                            <td> <?= $hd['ngay_dat']; ?> </td>
                                            <td> <?php if ($hd['trang_thai'] == "đã xác nhận") {
                                                        echo "<h5 style='color: purple; font-weight:700'>" . $hd['trang_thai'] . "</h5>";
                                                    } else {
                                                        echo "<h5 style='color: red;font-weight:700; text-decoration:underline' >" . $hd['trang_thai'] . "</h5>";
                                                    } ?>
                                            </td>

                                            <td><?= $hd['tinh_trang']; ?></td>
                                            <td>
                                                <?php
                                                if ($hd['tinh_trang'] != 'Đã hủy') { ?>
                                                    <?php
                                                    if ($hd['trang_thai'] != 'đã xác nhận') { ?>
                                                        <a href="./index.php?duong_link=capnhatTT&idhd=<?= $hd['id']; ?>"><button class="btn btn-danger">Xác nhận đơn hàng</button></a>

                                                    <?php } ?>

                                                    <form action="./index.php?duong_link=capnhattinhtranghd&idhd=<?= $hd['id']; ?>" method="post" style="margin-top: 10px; display: flex;">
                                                        <select required name="tinhtranghoadon" class="form-control bg-secondary valueCapnhat" id="exampleSelectGender" style="width: 120px;">
                                                            <option selected>Tình trạng</option>
                                                            <option value="Đang chuẩn bị hàng">Đang chuẩn bị hàng</option>
                                                            <option value="Đang giao">Đang giao</option>
                                                            <option value="Giao hàng thành công">Giao hàng thành công</option>
                                                            <?php
                                                            if ($hd['tinh_trang'] == 'Đang chuẩn bị hàng' || $hd['tinh_trang'] == 'chờ xác nhận') { ?>
                                                                <option value="Đã hủy" style="color: red; font-weight: 700;">Hủy hàng</option>
                                                            <?php } ?>
                                                        </select>
                                                        <button class="btn btn-primary capnhat" type="submit"> Cập nhật </button>
                                                    </form>

                                                <?php } ?>
                                                <br>
                                                <a href="./index.php?duong_link=chitiethd&idhd=<?= $hd['id']; ?>"><button class="btn btn-warning " style="margin:20px;">Chi tiết</button></a>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>