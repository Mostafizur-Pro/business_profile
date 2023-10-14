
<!-- Success Message -->
@if(session('Success'))
<div class="toast toast-top toast-center">
    <div class="alert alert-success">
        <span>{{ session('Success') }}</span>
    </div>
</div>
<script>
    setTimeout(function() {
        document.querySelector('.alert-success').style.display = 'none';
    }, 3000); // Hide the success message after 3 seconds (3000 milliseconds)
</script>
@endif

<!-- Error Message -->
@if(session('Fail'))
<div class="toast toast-top toast-center">
    <div class="alert alert-error">
        <span>{{ session('Fail') }}</span>
    </div>
</div>
<script>
    setTimeout(function() {
        document.querySelector('.alert-error').style.display = 'none';
    }, 3000); // Hide the error message after 3 seconds (3000 milliseconds)
</script>
@endif