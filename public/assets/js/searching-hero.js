$(document).ready(function () {
    $("#searchShoes").on("keyup", function () {
        let value = $(this).val().toLowerCase();
        $(".shoes-card").filter(function () {
            $(this).toggle(
                $(this).find("h5").text().toLowerCase().indexOf(value) > -1
            );
        });
    });
});
