function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      input.nextElementSibling.src = e.target.result;
    };

    reader.readAsDataURL(input.files[0]);
  }
}

const addBtn = document.querySelector(".add");
const uploadImg = document.querySelector(".upload-img");

addBtn.addEventListener("click", () => {
  const newPicture = document.createElement("div");
  newPicture.classList.add("picture");

  newPicture.innerHTML = `
      <input type="file" class="imgInp" />
      <img src="#" alt="Preview" class="preview" style="display: none;" />
      <button type="submit" class="upload">Upload</button>
  `;

  uploadImg.appendChild(newPicture);

  const inputFile = newPicture.querySelector(".imgInp");
  const imgPreview = newPicture.querySelector("img");

  inputFile.addEventListener("change", function () {
    if (this.files && this.files[0]) {
      imgPreview.style.display = "block";
      readURL(this);
    } else {
      imgPreview.style.display = "none";
    }
  });
});
