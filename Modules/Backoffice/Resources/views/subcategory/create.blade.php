@extends('backoffice::layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-6 col-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Nova subcategoria</h3>
                </div>
                <form action="{{route('backoffice.category-store')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nome*</label>
                            <input type="text" class="form-control" id="name" name="name">
                            @if($errors->has('name'))
                                <span class="text-danger" style="font-size: 13px; font-weight: 600;">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="category_id">Categoria*</label>
                            <select class="form-control" id="category_id" name="category_id">
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Cadastrar <i class="fas fa-save"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
