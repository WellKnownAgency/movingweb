<script src="/js/core/jquery.min.js" type="text/javascript"></script>
<script src="/js/core/popper.min.js" type="text/javascript"></script>
<script src="/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="/js/plugins/moment.min.js"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
<script>
<!-- javascript for init -->
$('.datetimepicker').datetimepicker({
    icons: {
        time: "far fa-clock",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fas fa-camera',
        clear: 'fas fa-trash',
        close: 'far fa-calendar-times'
    }
});
</script>
<script type="text/javascript" src="{!! asset('/js/tinymce/tinymce.min.js') !!}"></script>
@yield('customjs')

<script>
  $(".delete").on("click", function(){
      return confirm("Are you sure?");
  });
</script>
