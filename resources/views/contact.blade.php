<x-main>
    <div class="container py-5 my-5 form_custom">
        <div class="row">
            <div class="col-12 col-md-3"></div>
            <div class="col-12 col-md-6">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('send') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input class="form-control" type="text" name="fullname" placeholder="Nome" value="{{old('fullname')}}"/>
                    </div>
                    @error('fullname')
                    <span>error</span>
                    @enderror
                    
                    <div class="mb-3">
                        <label class="form-label">Telefono</label>
                        <input class="form-control" type="number" name="phone" placeholder="Telefono" value="{{old('phone')}}"/>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Email" value="{{old('email')}}"/>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Messaggio</label>
                        <textarea class="form-control" type="text" name="message" placeholder="Scrivi qui il tuo messaggio..." style="height: 10rem;">{{old('message')}}</textarea>
                    </div>
                    
                    
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg">Invia</button>
                    </div>
                    
                </form>
            </div>
            <div class="col-12 col-md-3"></div>
        </div>       
    </div>
</x-main>