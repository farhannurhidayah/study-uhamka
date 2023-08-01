<div class="modal" id="ModalInsert">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="/tambah" method="post" enctype="multipart/form-data" id="formdata">
                {{ csrf_field() }}

            
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Pendaftaran Buku Baru</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">

                <table>
                    <!-- <tr>
                        <td>id : </td><td><input type="number" id="id" name="id" class="form-control"></td>
                    </tr> -->
                    <tr>
                        <td>Nama Kota : </td><td><input type="text" id="nama_kota" name="nama_kota" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Nama Provinsi : </td><td><input type="text" id="nama_provinsi" name="nama_provinsi" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Nama Pulau :</td>
                        <td>
                            <select name="nama_pulau" id="nama_pulau" style="width: 200px;" class="form-select form-select-lg">
                                <option value="Jawa">Jawa</option>
                                <option value="Kalimantan">Kalimantan</option>
                                <option value="Bali">Bali</option>
                                <option value="Sumatra">Sumatra</option>
                            </select>
                        </td>
                    </tr>
                    
                </table>
                </div>
                <div class="modal-footer">
                <input type="submit" class="btn btn-danger" value="submit" id="submit">
                </div>

            </form>
        </div>
    </div>
</div>