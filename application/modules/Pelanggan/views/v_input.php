<div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" action="<?php echo base_url(). 'pelanggan/save_data'; ?>" method="post">
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">ID Pelanggan</label>
                                        <div class="col-md-12">
                                            <input type="text" name="id_pelanggan"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Nama Pelanggan</label>
                                        <div class="col-md-12">
                                            <input type="text" name="nama_pelanggan"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Alamat Pelanggan</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" name="alamat_pelanggan" class="form-control ps-0 form-control-line"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Nomor Hp</label>
                                        <div class="col-md-12">
                                            <input type="text" name="no_kontak"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>    
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Pekerjaan</label>
                                        <div class="col-md-12">
                                            <input type="text" name="pekerjaan"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>                            
                                    <div class="form-group">
                                        <div class="col-sm-12 d-flex">
                                            <button type="submit" class="btn btn-success mx-auto mx-md-0 text-white">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>