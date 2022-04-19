<div class="container mt-4 mb-4">
    <div class="row">
        <div class="col-8">
            <div class="card border-0">
                <div class="card-header border-0 p-3">
                    <small>Daftar Kelas</small>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam doloribus exercitationem, esse ut
                        earum odio tenetur debitis pariatur adipisci soluta, reprehenderit inventore sapiente vero sunt
                        doloremque necessitatibus voluptatem laboriosam ullam.</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card border-0">
                <div class="card-header border-0 p-3">
                    <small>Tambah Daftar Kelas</small>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="inputTingkatKelas" class="form-label"><span class="text-danger">*</span>
                                <small>Tingkat
                                    Kelas</small></label>
                            <div class="input-group">
                                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                <select name="tingkat_kelas" class="form-select" id="inputTingkatKelas">
                                    <option value="" selected>Choose ...</option>
                                    <?php foreach ($data["tingkat_kelas"] as $key => $value) : ?>
                                    <option value="<?= $value; ?>"><?= $value; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                    <small>Please select a valid tingkat kelas.</small>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputJurusan" class="form-label"><span class="text-danger">*</span>
                                <small>Jurusan</small></label>
                            <div class="input-group">
                                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                <select name="jurusan" class="form-select" id="inputJurusan">
                                    <option value="" selected>Choose ...</option>
                                    <?php foreach ($data["jurusan"] as $key => $value) : ?>
                                    <option value="<?= $value; ?>"><?= $value; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                    <small>Please select a valid jurusan.</small>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputNomorKelas" class="form-label"><span class="text-danger">*</span>
                                <small>Nomor
                                    Kelas</small></label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-list-ol"></i></span>
                                <input type="text" class="form-control" id="inputNomorKelas">
                                <div class="invalid-feedback">
                                    <small>Please select a valid nomor kelas.</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex justify-content-end">
                                <button type="button"
                                    class="btn btn-sm btn-primary btnTambahKelas"><small>Submit</small></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>