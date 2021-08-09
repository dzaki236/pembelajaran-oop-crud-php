<!-- Bootstrap core JavaScript-->
<script src="./Public/Assets/vendor/jquery/jquery.min.js"></script>
<script src="./Public/Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="./Public/Assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="./Public/Assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="./Public/Assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="./Public/Assets/js/demo/chart-area-demo.js"></script>
<script src="./Public/Assets/js/demo/chart-pie-demo.js"></script>
<script type="text/javascript" charset="utf8" src="./Public/Assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#blog').DataTable();
        $('[data-toggle="popover"]').popover({
            placement: 'top',
            trigger: 'hover'
        });
        $('#summernote').summernote({
            placeholder: 'Tulis Postingan mu disini',
            tabsize: 2,
            height: 520,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['picture', 'video']],
                ['view', ['codeview']]
            ]
        });
        $('form *').prop('autocomplete', 'off');
    });
</script>