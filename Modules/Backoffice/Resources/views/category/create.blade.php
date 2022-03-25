@extends('backoffice::layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6 col-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Nova categoria</h3>
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
                            <label for="description">Descrição*</label>
                            <textarea  class="form-control" name="description" id="description" rows="2"></textarea>
                            @if($errors->has('description'))
                                <span class="text-danger" style="font-size: 13px; font-weight: 600;">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Imagem*</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Escolha um arquivo</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                            @if($errors->has('image'))
                                <span class="text-danger" style="font-size: 13px; font-weight: 600;">{{ $errors->first('image') }}</span>
                            @endif
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
