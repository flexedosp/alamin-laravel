$(document).ready(function () {
    // Fungsi filter pencarian berdasarkan ID
    $("#searchInput").on("keyup", function () {
        const query = $(this).val().toLowerCase().trim();

        // Jika input kosong, tampilkan semua surat
        if (query === "") {
            $(".cardSurat").show();
            return;
        }

        // Loop melalui setiap kartu surat dan cek apakah ID-nya cocok dengan query
        $(".cardSurat").each(function () {
            const cardId = $(this).attr("id").toLowerCase();

            if (cardId.includes(query)) {
                $(this).show(); // Tampilkan jika cocok
            } else {
                $(this).hide(); // Sembunyikan jika tidak cocok
            }
        });
    });

    $("#searchInputHadits").on("keyup", function () {
        const query = $(this).val().toLowerCase().trim();

        // Jika input kosong, tampilkan semua surat
        if (query === "") {
            $(".cardHadits").show();
            return;
        }

        // Loop melalui setiap kartu surat dan cek apakah ID-nya cocok dengan query
        $(".cardHadits").each(function () {
            const cardId = $(this).attr("id").toLowerCase();

            if (cardId.includes(query)) {
                $(this).show(); // Tampilkan jika cocok
            } else {
                $(this).hide(); // Sembunyikan jika tidak cocok
            }
        });
    });
});
