<form action='{{ url('update/{id}') }}' method='post'>
    @csrf
    <div class="my-1 p-1 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="editNamaProduk" class="col-sm-2 col-form-label">Nama
                Produk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required="required" name='nama_produk' id="editNamaProduk">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="editDeskripsiProduk" class="col-sm-2 col-form-label">Deskripsi Produk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required="required" name='deskripsi_produk'
                    id="editDeskripsiProduk">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="editHargaProduk" class="col-sm-2 col-form-label">Harga Produk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required="required" name='harga_produk' id="editHargaProduk">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="editKategori" class="col-sm-2 col-form-label">Kategori
                Produk</label>
            <div class="col-sm-10">

                <select class="form-control" required="required" name="kategori" id="editKategori">
                    <option value="">- Pilih kategori</option>
                    <option value="Buah">Buah</option>
                    <option value="Sayuran">Sayuran</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="editGambarProduk" class="col-sm-2 col-form-label">Gambar Produk</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name='gambar_produk' id="editGambarProduk">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        <button onclick="{{ url('admin') }}" type="submit" name="submit" class="btn btn-primary">simpan</button>
        <input type="hidden" id="editProdukId" name="id">
    </div>
</form>
