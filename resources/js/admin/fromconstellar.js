const chooseFile = document.getElementById("linkpic");
const imgPreview = document.getElementById("img-preview");
chooseFile.addEventListener("change", function () {
    getImgData();
});
function getImgData() {
const files = chooseFile.files[0];
if (files) {
    const fileReader = new FileReader();
        fileReader.readAsDataURL(files);
        fileReader.addEventListener("load", function () {
            imgPreview.style.display = "block";
            imgPreview.innerHTML = '<img style ="width: 533px; height: 325px; object-fit: cover;" src="' + this.result + '" />';
        });    
    }
}
    