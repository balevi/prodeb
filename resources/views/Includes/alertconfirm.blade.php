@if (session('confirm'))
                                <div class="alert alert-danger">
                                <h3> {{ session('confirm')}}</h3>
                                <form  action="{{ route('produto.destroy',$produto->id)  }}" method="delete">
                                @csrf
                                <button type="submit"class="btn btn-outline-warning">Sim</button>
                                <input type="button" value="não" class="btn btn-outline-warning">
                                </div>
 @endif