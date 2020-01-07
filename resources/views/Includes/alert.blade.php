                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if (session('error'))
                                    <div style="heigth:10px;" class="alert alert-danger">
                                     {{ session('error')}}
                                    </div>
                                @endif

                                @if (session('success'))
                                    <div class="alert alert-success">
                                    <h3> {{ session('success')}}</h3>
                                    </div>
                                @endif

                                @if(isset($customer))
                                    <div class="alert alert-danger">
                                        <h3>Tem Certeza que Deseja Excluir esse Produto? </h3>
                                        <div><form action="{{ route('produto.destroy', $customer->id) }}" method="post" style="display: inline-block;padding-right:20px">
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" value="Sim" class="btn btn-outline-warning"></form>
                                        <a href= "{{route('produto.index')}}" >
                                        <button type="submit"class="btn btn-outline-warning">Não</button></a></div>
                                    </div>
                                @endif

