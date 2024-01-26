<form action='{{ url('produk') }}' method='post'>
    @csrf
    <div class="my-1 p-1 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="nama_produk" class="col-sm-2 col-form-label">Nama
                Produk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"
                    required="required" name='nama_produk'
                    id="nama_produk">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="deskripsi_produk"
                class="col-sm-2 col-form-label">Deskripsi Produk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"
                    required="required" name='deskripsi_produk'
                    id="deskripsi_produk">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="harga_produk"
                class="col-sm-2 col-form-label">Harga Produk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"
                    required="required" name='harga_produk'
                    id="harga_produk">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori
                Produk</label>
                <div class="col-sm-10">
                    
                    <select class="form-control" required="required"
                    name="kategori" id="kategori">
                    <option value="">- Pilih kategori</option>
                    <option value="Buah">Buah</option>
                    <option value="Sayuran">Sayuran</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="gambar_produk"
                class="col-sm-2 col-form-label">Gambar Produk</label>
            <div class="col-sm-10">
                <input type="file" class="form-control"
                    required="required" name='gambar_produk'
                    id="gambar_produk">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
            data-dismiss="modal">Close</button>

        <button onclick="{{ url('admin') }}" type="submit"
            name="submit" class="btn btn-primary">simpan</button>
    </div>
</form>