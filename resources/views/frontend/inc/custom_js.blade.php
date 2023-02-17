<script>
    function dslp_session_flash(reson, msg) {
        sessionStorage.setItem(reson, msg);

        if (sessionStorage.getItem("success") != null) {
            $('#flash_js_msg').append('<div class="alert alert-success" role="alert">' + sessionStorage.getItem(
                "success") + '</div>');
            $("#flash_msg").slideDown(300).delay(5000).slideUp(300);
            setTimeout(function() {
                $('#flash_js_msg').html('');
            }, 5000);
            sessionStorage.clear();
        }

        if (sessionStorage.getItem("error") != null) {
            $('#flash_js_msg').append('<div class="alert alert-danger" role="alert">' + sessionStorage.getItem(
                "error") + '</div>');
            $("#flash_msg").slideDown(300).delay(5000).slideUp(300);
            setTimeout(function() {
                $('#flash_js_msg').html('');
            }, 5000);
            sessionStorage.clear();
        }

        if (sessionStorage.getItem("warning") != null) {
            $('#flash_js_msg').append('<div class="alert alert-warning" role="alert">' + sessionStorage.getItem(
                "warning") + '</div>');
            $("#flash_msg").slideDown(300).delay(5000).slideUp(300);
            setTimeout(function() {
                $('#flash_js_msg').html('');
            }, 5000);
            sessionStorage.clear();
        }

        if (sessionStorage.getItem("info") != null) {
            $('#flash_js_msg').append('<div class="alert alert-info" role="alert">' + sessionStorage.getItem("info") +
                '</div>');
            $("#flash_msg").slideDown(300).delay(5000).slideUp(300);
            setTimeout(function() {
                $('#flash_js_msg').html('');
            }, 5000);
            sessionStorage.clear();
        }


    }
</script>