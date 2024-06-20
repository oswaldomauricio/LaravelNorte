@section('modal')
    <div class="modal fade" id="contactModal_trocarPeloId" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true"
        data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex justify-center items-center">
                    <h1 class="modal-title text-center" id="contactModalLabel">Por favor, digite o cep da sua região</h1>
                </div>
                <div class="modal-body flex items-center justify-center flex-col gap-4">
                    <form action="#" method="GET" class="modal-body flex items-center justify-center flex-col gap-4">
                        {{ csrf_field() }}
                        <input type="text" name="cepInput" id="cepInput" maxlength="9" required
                            class="form-control max-w-xs w-2/3" placeholder="Digite seu CEP" aria-label="Digite seu CEP"
                            aria-describedby="addon-wrapping" oninput="handleZipCode(event)"  />
                        <div class="flex items-center justify-center flex-col gap-8 w-2/3">
                            {{-- <button
                        class="flex items-center justify-center text-[#2846D2] font-bold sm:text-xl text-[12px]">
                        <ion-icon name="location-outline" class="text-xl"></ion-icon> 
                        <span>USAR MINHA LOCALIZAÇÃO</span>
                    </button> --}}
                            <p class="flex justify-center text-center text-xs">
                                Digite seu CEP para verificarmos os produtos e lojas disponíveis
                                para sua região.
                            </p>
                            <input type="submit" id="okButton" class="btn btn-primary px-8" />
                    </form>
                    <div id="loadingSpinner" class="spinner-border text-primary hidden" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <p id="error-message" class="text-red-500 text-xs hidden">Por favor, digite seu CEP.</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    {{-- Carregar modal --}}
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        @if (isset($data))
            document.addEventListener("DOMContentLoaded", function() {
                var data = @json($data);

                localStorage.setItem('zipCode', data.zipCode);
                localStorage.setItem('address_type', data.address_type);
                localStorage.setItem('address_name', data.address_name);
                localStorage.setItem('address', data.address);
                localStorage.setItem('state', data.state);
                localStorage.setItem('district', data.district);
                localStorage.setItem('lat', data.lat);
                localStorage.setItem('lng', data.lng);
                localStorage.setItem('city', data.city);
            });
        @endif

        const handleZipCode = (event) => {
            let input = event.target
            input.value = zipCodeMask(input.value)
        }

        const zipCodeMask = (value) => {
            if (!value) return ""
            value = value.replace(/\D/g, '')
            value = value.replace(/(\d{5})(\d)/, '$1-$2')
            return value
        }
    </script>
    <script src="/js/cep.js"></script>
@endsection

<!-- Certifique-se de incluir o Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
