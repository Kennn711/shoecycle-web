function previewFile() {
    const fileInput = document.getElementById("avatar");
    const previewImg = document.getElementById("preview-img");

    const file = fileInput.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            previewImg.src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}
