<!-- jQuery 3 -->
<script src="{{asset('../../bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('../../bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('../../bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('../../dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('../../dist/js/demo.js')}}"></script>
<!-- Datatable -->
<script src="{{asset('../../js/jquery.dataTables.min.js')}}"></script>

<script src="{{asset('../../bower_components/ckeditor/ckeditor.js')}}"></script>

<script>
	$(document).ready(function () {
		$('.sidebar-menu').tree()
	})
</script>
<script>
	$(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
})
</script>
