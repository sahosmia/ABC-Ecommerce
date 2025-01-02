<div id="loading-page"
    class="fixed inset-0 flex flex-col items-center justify-center bg-utility-white_background z-50 border-none">
    <img id="brand-logo" src="{{ asset('assets/logo.png') }}" alt="Brand Logo"
        class="w-24 h-24 rounded-full border-none drop-shadow-sm">
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const loadingPage = document.getElementById("loading-page");

        setTimeout(() => {
            loadingPage.style.display = "none";
        }, 2000);
    });
</script>
