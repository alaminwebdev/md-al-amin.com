<style>
    .swal2-popup.swal2-toast {
        padding: 0.75rem .50rem;
    }

    .swal2-popup {
        border: none;
    }

    .colored-toast.swal2-icon-success {
        background-color: #17a2b8 !important;
    }

    .colored-toast.swal2-icon-error {
        background-color: #f27474 !important;
    }

    .colored-toast.swal2-icon-warning {
        background-color: #f8bb86 !important;
    }

    .colored-toast.swal2-icon-info {
        background-color: #3fc3ee !important;
    }


    .colored-toast .swal2-title {
        color: white !important;
        /* top: 45%; */
    }

    .colored-toast .swal2-close {
        color: white;
    }

    .colored-toast .swal2-html-container {
        color: white;
    }
</style>

<script>
    $(function() {
        let status_success = "{{ session()->has('success') }}";

        if (status_success) {
            showAlert('success', "{{ session()->get('success') }}");
        }

        let status_info = "{{ session()->has('info') }}";
        if (status_info) {
            showAlert('info', "{{ session()->get('info') }}");
        }

        let status_error = "{{ session()->has('error') }}";
        if (status_error) {
            showAlert('error', "{{ session()->get('error') }}");
        }

        let status_warning = "{{ session()->has('warning') }}";
        if (status_warning) {
            showAlert('warning', "{{ session()->get('warning') }}");
        }

        function showAlert(type, message) {
            Swal.fire({
                toast: true,
                customClass: {
                    popup: 'colored-toast'
                },
                iconColor: 'white',
                icon: type,
                title: message,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        }
    });
</script>
