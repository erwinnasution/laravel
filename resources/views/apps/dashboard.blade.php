@extends('layout.master')

@section('title-page')
<img src="assets/images/home.png" width="20" height="20" class="icon-img-title" alt=""> 
<h4>Dashboard</h4>
@endsection

@section('breadcrumbs')
<ul class="breadcrumbs">
<li class="breadcrumbs-item">Pages <i class="fas fa-chevron-right"></i> </li>
<li class="breadcrumbs-item active">Album</li>
</ul>
@endsection

@section('content')
<div class="row">
                <div class="col-12">
                    <div class="card-cs">
                        <div class="card-title-cs"><h5>INPUT</h5></div>

                        <button class="btn-cs btn-cs-warning">Warning</button>
                        <button class="btn-cs btn-cs-success">Success</button>
                        <button class="btn-cs btn-cs-primary">Info</button>
                        <button class="btn-cs btn-cs-danger">Danger</button>

                        <form action="" class="form-cs">
                            <div class="form-group-cs">
                                <label for="" class="label-form-cs">Album</label>
                                <input type="text" class="form-control-cs">
                            </div>
                            <div class="form-group-cs">
                                <label for="" class="label-form-cs"></label>
                                <input type="text" class="form-control-cs">
                            </div>
                            <div class="form-group-cs">
                                <label for="" class="label-form-cs">Photo</label>
                                <select name="" id="" class="form-control-cs">
                                    <option value="">-Select-</option>
                                    <option value="option_1">X</option>
                                    <option value="option_2">XI</option>
                                    <option value="option_3">XII</option>
                                </select>
                            </div>
                            <div class="form-group-cs">
                                <label for="" class="label-form-cs">Keterangan</label>
                                <textarea name="" id="" class="form-control-cs" cols="30" rows="5"></textarea>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-sm table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Album</th>
                                        <th>Photo</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Fruit Import</td>
                                        <td><img src="assets/images/administrator_male1600.png" width="20" height="20" class="icon-img-title" alt=""> </td>
                                        <td>Belanda</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer-cs">
                            <button class="btn-cs btn-cs-success">Simpan</button>
                            <button class="btn-cs btn-cs-danger">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
@endsection