<div class="container" style="margin-top: 40px;margin:auto">
    <main>
        <div class="row g-3">
            <div class="col-md-12 col-lg-12">
                <h4 class="mb-3">Them san pham</h4>
                <form class="needs-validation"  method="POST" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="ten_hang" class="form-label">Ten san pham </label>
                            <input type="text" class="form-control" id="ten_hang" name="ten_hang" >
                        </div>
                        <div class="col-sm-6">
                            <label for="loai_hang" class="form-label">Loai hang</label>
                            <input type="text" class="form-control" id="loai_hang" name="loai_hang" >
                        </div>
                        <div class="col-sm-6">
                            <label for="gia_ca" class="form-label">Gia ca</label>
                            <input type="number" class="form-control" id="gia_ca" name="gia_ca" >
                        </div>
                        <div class="col-sm-6">
                            <label for="so_luong" class="form-label">So luong</label>
                            <input type="text" class="form-control" id="so_luong" name="so_luong"  >
                        </div>
                        <div class="col-sm-6">
                            <label for="ngay_tao" class="form-label">Ngay tao</label>
                            <input type="text" class="form-control" id="ngay_tao" name="ngay_tao"  >
                        </div>
                        <div class="col-sm-6">
                            <label for="mo_ta" class="form-label">Mo ta</label>
                            <input type="text" class="form-control" id="mo_ta" name="mo_ta" >
                        </div>
                    </div>
                    <hr class="col-md-4">
                    <button class="btn btn-primary" type="submit">Them san pham</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Huy bo</button>
                </form>
            </div>
        </div>
    </main>
</div>

