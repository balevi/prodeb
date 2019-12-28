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
                                <h1> {{ session('success')}}</h1>
                                </div>
                                @endif

