<?php // -- CBA Standard Components Page JS - Version # 25080701 -- ?>
<!-- Date & Time Picker JS -->
<script src="<?php echo BASE_URL . DIRECTORY_SEPARATOR . '_ass/_js/components/moment.js'; ?>"></script>
<script src="<?php echo BASE_URL . DIRECTORY_SEPARATOR . '_ass/_js/components/datepicker.js'; ?>"></script>
<script src="<?php echo BASE_URL . DIRECTORY_SEPARATOR . '_ass/_js/components/timepicker.js'; ?>"></script>
<script>
    $(function() {
        $('#datepicker').datepicker({
            autoclose: true,
            startDate: "today",
            todayHighlight: true
        });

        $('#datetimepicker').datetimepicker();
    });
</script>