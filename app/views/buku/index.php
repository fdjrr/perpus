<div class="container mt-4 mb-4">
    <div class="row">
        <div class="col-8">
            <div class="card border-0">
                <div class="card-header border-0 p-3">
                    <small>Daftar Buku</small>
                </div>
                <div class="card-body">
                    <table class="table table-hover text-center align-middle display" id="bukuTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Buku</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data["buku"]["data"] as $key => $value) : ?>
                            <tr>
                                <th scope="row"><?= $key + 1; ?></th>
                                <td><?= $value["name"]; ?></td>
                                <td>
                                    <button class="btn btn-sm btn-warning text-white btnModalUpdateBuku"
                                        data-bs-toggle="modal" data-bs-target="#bukuModal"
                                        data-id="<?= $value["id"] ?>"><small>Update</small></button>
                                    <button class="btn btn-sm btn-danger btnHapusBuku"
                                        data-id="<?= $value["id"] ?>"><small>Delete</small></button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card border-0">
                <div class="card-header border-0 p-3">
                    <small>Tambah Daftar Buku</small>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="namaBuku" class="form-label"><span class="text-danger">*</span> <small>Nama
                                    Buku</small></label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-book"></i></span>
                                <input type="text" name="name" class="form-control" id="namaBuku" require>
                                <div class="invalid-feedback">
                                    <small>Please provide a valid book name. </small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-flex justify-content-end">
                                <button type="button"
                                    class="btn btn-sm btn-primary btnTambahBuku"><small>Submit</small></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="bukuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="bukuModalLabel">Update Data Buku</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" name="id" value="" id="idBukuModel">
                    <div class="mb-3">
                        <label for="namaBukuModal" class="form-label"><span class="text-danger">*</span> <small>Nama
                                Buku</small></label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-book"></i></span>
                            <input type="text" name="name" class="form-control" id="namaBukuModal" require>
                            <div class="invalid-feedback">
                                <small>Please provide a valid book name. </small>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary"
                    data-bs-dismiss="modal"><small>Close</small></button>
                <button type="button"
                    class="btn btn-sm btn-warning text-white btnUpdateBuku"><small>Update</small></button>
            </div>
            </form>
        </div>
    </div>
</div>