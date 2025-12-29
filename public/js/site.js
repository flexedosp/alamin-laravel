$(document).ready(function () {
    $(document).on("click", ".underDevBtn", function () {
        underDevelopment();
    });

    $(document).on("click", ".navPageLimit", function () {
        reachLimit();
    });

    function underDevelopment() {
        Swal.fire({
            title: "Under Development!",
            text: "Maaf, fitur ini sedang dalam pengembangan.",
            icon: "info",
        });
    }
    function reachLimit() {
        Swal.fire({
            title: "Sudah sampa batas!",
            text: "Anda telah mencapai batas halaman.",
            icon: "warning",
        });
    }

    /* ---------- AOS ---------- */
    AOS.init({
        duration: 1000,
        delay: 200,
        once: true,
    });
});
