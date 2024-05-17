<x-main>
    <div class="container py-5 my-5 form_custom">
        <div class="row">
            <div class="col-12 col-md-4"></div>
            <div class="col-12 col-md-4 bg-form">
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
                        <input class="form-control rounded-5" type="text" name="fullname" placeholder="Nome" value="{{old('fullname')}}"/>
                    </div>
                    @error('fullname')
                    <span>error</span>
                    @enderror
                    
                    <div class="mb-3">
                        <label class="form-label">Telefono</label>
                        <input class="form-control rounded-5" type="number" name="phone" placeholder="Telefono" value="{{old('phone')}}"/>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control rounded-5" type="email" name="email" placeholder="Email" value="{{old('email')}}"/>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Messaggio</label>
                        <textarea class="form-control rounded-4" type="text" name="message" placeholder="Scrivi qui il tuo messaggio..." style="height: 5rem;">{{old('message')}}</textarea>
                    </div>
                    
                    
                    <div class="d-grid my-4">
                        <button class="btn btn-danger rounded-5 btn-lg my-4">Invia</button>
                    </div>
                    
                </form>
            </div>
            <div class="col-12 col-md-4"></div>
        </div>       
    </div>
</x-main>