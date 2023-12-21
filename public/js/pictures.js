const addBtn = document.querySelector(".add");
const uploadImg = document.querySelector(".upload-img");

addBtn.addEventListener("click", () => {
  const newPicture = document.createElement("div");
  newPicture.classList.add("picture");

  newPicture.innerHTML = `
    <input type="file" />
    <button type="submit" class="upload">Upload</button>
  `;

  uploadImg.appendChild(newPicture);
});
