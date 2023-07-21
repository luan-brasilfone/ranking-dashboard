<script src="{{ asset('mazer-assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('mazer-assets/vendors/sweetalert2/sweetalert2.all.min.js') }}"></script>

<script>
    let labels;
    let data_options;
    let dataTable = new Object();

    const button_config = {
        edit: "primary",
        delete: "danger",
        inspect: "info"
    }

    if ("{{ App::getLocale() }}" == 'pt_BR') {

        const locale_labels = {
            placeholder: '{{ __("Search...") }}',
            searchTitle: '{{ __("Search within table") }}',
            noRows: '{{ __("No entries found") }}',
            info: '{{ __("Showing {start} to {end} of {rows} entries") }}',
            noResults: '{{ __("No results match your search query") }}',
        }

        labels = locale_labels;   
    }

    getData = async () => {

        return fetch(`{{ url("/api/node/") }}/${data_options.url}`)
        .then(response => response.json())
        .then(data => {
            let rows = [];
            Object.keys(data).forEach(key => {

                if (typeof data[key] == 'string')
                    data[key] = JSON.parse(data[key]);

                let row = data[key];
                let arr = [];

                if (data_options.useId) arr.push(key);

                data_options.fields.forEach(field => {
                    if (field.split('::').length > 1) {
                        let value = field.split('::')[0];
                        let type = field.split('::')[1];

                        switch (type) {
                            case 'date':
                                row[field] = new Date(parseInt(row[value])).toLocaleString('{{ App::getLocale() }}'.replace('_', '-').toLowerCase());
                                break;
                            default:
                                break;
                        }
                    }
                    arr.push(row[field]);
                });

                if (data_options.buttons){

                    let buttons = "";
                    data_options.buttons.forEach(action => {
                        let button = "";
                        let url = data_options.url;
                        if (typeof url.explode === 'function') url = url.explode("/")[0];

                        switch (action) {
                            case 'edit':
                                button += `<a href="{{ url("/") }}/${url}/${action}/${key}" class="btn btn-${button_config[action]} btn-sm">{{ __('Edit') }}</a> `;
                                break;
                            case 'delete':
                                button += `<a href="{{ url("/api/node") }}/${url}/${key}" class="btn btn-${button_config[action]} btn-sm" onclick="return confirmDelete(this)">{{ __('Delete') }}</a> `;
                                break;
                            case 'inspect':
                                button += `<a href="{{ url("/") }}/${url}/${key}" class="btn btn-${button_config[action]} btn-sm">{{ __('Inspect') }}</a> `;
                            default:
                                break;
                        }

                        buttons += button;
                    });

                    arr.push(buttons);
                }
                rows.push(arr);
            });
            return rows;
        });
    }

    setData = async (configs) => {
        data_options = configs;
        let options = {labels: labels};

        let data = new Object();
        data.data = await getData(data_options);

        options.data = data;

        if (dataTable.destroy)
            dataTable.destroy();

        dataTable = new simpleDatatables.DataTable('#table1', options);
        
        if ("{{ App::getLocale() }}" == 'pt_BR')
            document.onload = document.querySelector('div.dataTable-dropdown label').textContent = '{{ __("entries per page") }}';
    }

    confirmDelete = target => {
        event.preventDefault();
        Swal.fire({
            title: '{{ __("Are you sure") }}?',
            text: `{{ __("You won't be able to revert this") }}!`,
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: '{{ __("No") }}',
            confirmButtonText: '{{ __("Yes") }}',
            backdrop: true
        })
        .then(result => {
            if (result.isConfirmed)
                fetch(target.href, {method: 'DELETE'})
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            title: '{{ __("Deleted") }}!',
                            text: '{{ __("Your record has been deleted") }}.',
                            icon: 'success',
                            backdrop: true
                        })
                        setData(data_options);
                    }
                    else {
                        Swal.fire({
                            title: '{{ __("Error") }}!',
                            text: data.message,
                            icon: 'error',
                            backdrop: true
                        });
                    }
                });
        })

        return false;
    }
</script>