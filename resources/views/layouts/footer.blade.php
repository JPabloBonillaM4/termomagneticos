        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
        <script src="{{ asset('js/simple-lightbox.jquery.min.js?v='.rand()) }}"></script>
        <script src="{{ asset('js/simple-lightbox.min.js?v='.rand()) }}"></script>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
                integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
                crossorigin=""></script>
        <script src="{{ asset('js/smooth-scroll.min.js?v='.rand()) }}"></script>
        <script src="{{ asset('js/moment.min.js?v='.rand()) }}"></script>
        <script src="{{ asset('js/daterangepicker.js?v='.rand()) }}"></script>
        <script src="{{ asset('js/iziToast.min.js?v='.rand()) }}"></script>
        <script>
            var scroll = new SmoothScroll('a[href*="#"]', {
                speed: 2000
            });
        </script>
        {{-- Mensaje de sesión --}}
        @if (Session::has('type'))
            <script>
                $(document).ready(function(){
                    iziToast.show({
                        title    : "{{ Session::get('message.title') }}",
                        message  : "{{ Session::get('message.text') }}",
                        color    : "{{ Session::get('type') }}",
                        position : "topRight"
                    });    
                });
            </script>
        @endif
        <script src="{{ asset('js/functions.js?v='.rand()) }}"></script>
        <script>
            $(window).on('load', function(){
                setTimeout(() => {
                    $('.loader_bg').fadeOut(); 
                }, 1000);
            })
        </script>
    </body>
</html>