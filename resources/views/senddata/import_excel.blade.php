<form action="#senddata/preview" id="form-import">
    @csrf   
    <div class="row">
        <div class="form-group col-sm-8">
            <div class="input-group">
                <div class="custome-file">
                    <input type="file" class="custom-file-input" name='import_excel'>
                    <label class="custom-file-label" for="import_excel">Import Excel</label>  
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <a href="{{URL::to('/public/foramt_import.xlsx')}}" class="btn btn-success btn-block">Download Format Excel</a>
        </div>
    </div>
</form>
<div class="row">
    <div class="callout callout-warning col-sm-12">
        <ol>
            <li>Pastikan file excel yg di import berjenis *.xlsx</li>
            <li>Format file Excel harus sama dengan format yang telah di sediakan</li>
            <!-- <li>Pastikan format data merupakan data asli (Bukan mengambil dari data lain sperti Vlookup,dst)</li> -->
        </ol>
    </div>
    <div class="col-md-12" data-append='body_preview_senddata'>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title lh-35">Daftar Import Excel</h3>
                <div class="card-widget bold">
                    <ul>
                        <li>Jumlah   : <span name='jumlah'>0</span> </li>
                    </ul>
                </div>
            </div>
            <div class="card-body body-scroll">
                <form action="#" id="form_import">
                    @csrf  
                    <table id="example1" class="table table-bordered table-striped no-margin">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>data1</th>
                                <th>data1</th>
                                <th>data1</th>
                                <th>data1</th>
                                <th>data1</th>
                                <th>data1</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class='null'>
                                <td colspan="7" class="dataTables_empty text-center"> Data Masih Kosong</td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <div class="callout callout-warning col-sm-12">
        Response
        <ol>
            <li>...............</li>
        </ol>
    </div>
</div>
<div class="card-footer">
    <div class="row">
        <div class="col-md-6"><a href="javascript:;" class="btn btn-block btn-primary"  data-uri='#senddata/store' data-form='#form_import'>Kirim Data</a></div>
        <div class="col-md-6"><a href="javascript:;" class="btn btn-block btn-primary"  data-uri='#senddata/store' data-form='#form_import'>Download XML</a></div>
    </div>
</div>