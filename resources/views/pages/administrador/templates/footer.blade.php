    <script src="{{ asset('lte/js/jquery.min.js?v='.rand()) }}"></script>
    <script src="{{ asset('lte/js/bootstrap.bundle.min.js?v='.rand()) }}"></script>
    <script src="{{ asset('lte/js/adminlte.min.js?v='.rand()) }}"></script>
    <script src="{{ asset('lte/js/demo.js?v='.rand()) }}"></script>
    <script src="{{ asset('lte/js/iziToast.min.js?v='.rand()) }}"></script>
    <script src="{{ asset('lte/js/jquery.dataTables.min.js?v='.rand()) }}"></script>
    <script src="{{ asset('lte/js/dataTables.bootstrap4.min.js?v='.rand()) }}"></script>
    <script src="{{ asset('lte/js/bootstrap-datepicker.js')}} "></script>
    <script src="{{ asset('lte/js/locales/bootstrap-datepicker.es.js?v='.rand()) }}"></script>
    <script src="{{ asset('lte/js/select2.full.min.js?v='.rand()) }}"></script>
    <script src="{{ asset('lte/js/jquery.inputmask.bundle.min.js?v='.rand()) }}"></script>
    <script src="{{ asset('lte/js/moment.min.js?v='.rand()) }}"></script>
    <script src="{{ asset('lte/js/locales.min.js')}}"></script>
    <script src="{{ asset('lte/js/daterangepicker.js?v='.rand()) }}"></script>
    <script src="{{ asset('lte/js/fontawesome-iconpicker.min.js?v='.rand()) }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="{{ asset('lte/js/factory.js?v='.rand()) }}"></script>
    <script src="{{ asset('lte/js/admin-functions.js?v='.rand()) }}"></script>
    {{-- SWEETALERT --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- @include('sweet::alert') --}}
    {{-- PRELOADER --}}
    <script>
        $(window).on('load', function(){
            setTimeout(() => {
                $('.loader_bg').fadeOut(); 
            }, 1000);
        })
    </script>
</body>
</html>