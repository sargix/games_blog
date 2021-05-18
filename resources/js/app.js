require("./bootstrap");
for (let i = 0; i < 10000; i++) {
    $("#myModal".i).on("shown.bs.modal", function () {
        $("#myInput").trigger("focus");
    });
}
