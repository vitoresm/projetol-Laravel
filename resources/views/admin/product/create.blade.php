@extends('layouts.app2')

@section('conteudo')


<div class="container" >
    <div class="card">  
        <div class="card-header h5">Cadastar Produto</div>

            <div class="card-body">
            <form action="{{route('admin.products.store')}}" method="POST">
                
                @csrf
                
                <div class="form-group">
                    
                    <label for="">Nome Produto</label>
                    <input type="text" name="nome" id="" class="form-control @error('nome') is-invalid 
                    
                    @enderror" value="{{old('nome')}}">
                    @error('nome')
                        <div class="invalid-feedback">
                        {{$message}}
                        </div>
                    
                    @enderror
                
                </div>
                
                <div class="form-group">
                    
                    <label for="">Descrição</label>
                    <textarea id="my-textarea"  name="descricao" rows="3" class="form-control @error('descricao') is-invalid @enderror" value="{{old('descricao')}}"></textarea>
                
                    @error('descricao')
                    
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>

                    @enderror
                
                </div>
                
                <label for="">Preço</label>
                
                <div class="input-group form-group mb-3">    
              
                    <div class="input-group-prepend">
                        <span class="input-group-text">R$</span>
                    </div>

                    <input type="number" step="0.01"  class="form-control" name="preco" onKeyUp="mascaraMoeda(this, event)"  value="">
                    
                    @error('preco')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                     @enderror
                </div>
                
                <div class="form-group">
                    <button class="btn btn-lg btn-primary" type="submit">salvar</button>
                </div>
                
            </form>
    </div>    
</div>
@endsection