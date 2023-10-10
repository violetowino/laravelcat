

<script src="{{asset('backend/assets/vendors/core/core.js')}}"></script>
<script src="{{asset('backend/assets/vendors/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('backend/assets/js/template.js')}}"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const passwordField = document.getElementById("password");
        const toggleButton = document.getElementById("togglePassword");

        toggleButton.addEventListener("click", function() {
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        });
    });
</script>