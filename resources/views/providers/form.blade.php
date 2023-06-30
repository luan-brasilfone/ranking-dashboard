<form class="form form-vertical">
    <div class="form-body">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="upc-icon">{{ __('Code') }}</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-upc"></i>
                        </span>
                        <input type="text" class="form-control"
                            placeholder="{{ __('Provider Code') }}"
                            id="upc-icon" name="code">
                    </div>
                </div>
            </div>
            <div class="col-12">

                <div class="form-group">
                    <label for="check-id-icon">{{ __('Success') }} ({{ __('Status 200') }})</label>
                    <div class="input-group">
                        <span class="input-group-text" style="background-color:rgba(0,255,0,0.2)">
                            <i class="bi bi-check-circle text-success"></i>
                        </span>
                        <input type="text" data-type="int" class="form-control"
                            placeholder="{{ __('Provider reliability on') }} {{ __('Status 200') }}"
                            id="check-id-icon" name="s200">
                    </div>
                </div>
            </div>
            <div class="col-12">

                <div class="form-group">
                    <label for="person-id-icon">{{ __('Client Response') }} ({{ __('Status MO') }})</label>
                    <div class="input-group">
                        <span class="input-group-text" style="background-color:rgba(0,255,0,0.2)">
                            <i class="bi bi-person-circle text-success"></i>
                        </span>
                        <input type="text" data-type="int" class="form-control"
                            placeholder="{{ __('Provider reliability on') }} {{ __('Status MO') }}"
                            id="person-id-icon" name="mo">
                    </div>
                </div>
            </div>
            <div class="col-12">

                <div class="form-group">
                    <label for="exclamation-id-icon">{{ __('Internal Server Error') }} ({{ __('Status 500') }})</label>
                    <div class="input-group">
                        <span class="input-group-text" style="background-color:rgba(255,255,0,0.2)">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                        </span>
                        <input type="text" data-type="int" class="form-control"
                            placeholder="{{ __('Provider reliability on') }} {{ __('Status 500') }}"
                            id="exclamation-id-icon" name="s500">
                    </div>
                </div>
            </div>
            <div class="col-12">

                <div class="form-group">
                    <label for="slash-id-icon">{{ __('Service Unavailable') }} ({{ __('Status 503') }})</label>
                    <div class="input-group">
                        <span class="input-group-text" style="background-color:rgba(255,255,0,0.2)">
                            <i class="bi bi-slash-circle text-warning"></i>
                        </span>
                        <input type="text" data-type="int" class="form-control"
                            placeholder="{{ __('Provider reliability on') }} {{ __('Status 503') }}"
                            id="slash-id-icon" name="s503">
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="x-id-icon">{{ __('Not Found') }} ({{ __('Status 404') }})</label>
                    <div class="input-group">
                        <span class="input-group-text" style="background-color:rgba(255,0,0,0.2)">
                            <i class="bi bi-x-circle text-danger"></i>
                        </span>
                        <input type="text" data-type="int" class="form-control"
                            placeholder="{{ __('Provider reliability on') }} {{ __('Status 404') }}"
                            id="x-id-icon" name="s404">
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="question-id-icon">{{ __('No Status') }} ({{ __('Status') }} {{ __('Default') }})</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-question-circle"></i>
                        </span>
                        <input type="text" data-type="int" class="form-control"
                            placeholder="{{ __('Provider reliability on') }} {{ __('Status') }} {{ __('Default') }}"
                            id="question-id-icon" name="default">
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit"
                    class="btn btn-success me-1 mb-1">{{ __('Submit') }}</button>
                <button type="reset"
                    class="btn btn-light-secondary me-1 mb-1">{{ __('Reset') }}</button>
            </div>
        </div>
    </div>
</form>

<script src="{{ asset('mazer-assets/vendors/sweetalert2/sweetalert2.all.min.js') }}"></script>

<script>
    document.querySelector('button[type="submit"]').addEventListener('click', (event) => {
        event.preventDefault();

        let form = document.querySelector('form');
        let data = new FormData(form);

        let object = {};
        data.forEach((value, key) => {
            let type = document.querySelector(`input[name="${key}"]`).getAttribute('data-type')
            if (type == 'int' && parseInt(value))
                object[key] = parseInt(value);
            else
                object[key] = value;
        });
        let json = JSON.stringify(object);
        let method = "POST";

        let action = '{{ str_replace(url("/providers"), "", url()->current()) }}';
        if (action != '/new') method = "PUT";

        fetch("{{ url('/api/node/providers') }}", {
            method: method,
            body: json,
            headers: {
                "Content-Type": "application/json"
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success)
                Swal.fire({
                    title: '{{ __("Success") }}!',
                    text: data.message,
                    icon: 'success',
                    confirmButtonText: 'Ok',
                    backdrop: true
                })

            else
                Swal.fire({
                    title: '{{ __("Error") }}!',
                    text: data.message,
                    icon: 'error',
                    confirmButtonText: 'Ok',
                    backdrop: true
                })
        });
    });
</script>