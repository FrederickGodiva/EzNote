const addBtn = document.querySelector(".add");
const notes = document.querySelector(".notes");

addBtn.addEventListener("click", () => {
  const newNote = document.createElement("div");
  newNote.classList.add("note");
  newNote.innerHTML = `
    <textarea placeholder="Title" class="title-area"></textarea>
    <textarea placeholder="Start writing" class="note-area"></textarea>
  `;
  notes.appendChild(newNote);

  noteFocus(newNote);
});

function noteFocus(el) {
  const inputFields = el.getElementsByTagName("textarea");
  let actionBtn;

  const removeActionBtn = () => {
    if (actionBtn) {
      el.removeChild(actionBtn);
      actionBtn = null;
    }
  };

  for (let i = 0; i < inputFields.length; i++) {
    inputFields[i].addEventListener("focus", () => {
      if (!actionBtn) {
        actionBtn = document.createElement("div");
        actionBtn.classList.add("d-flex", "justify-content-end", "gap-3");
        actionBtn.innerHTML = `
          <button class="btn btn-success save">Save</button>
          <button class="btn btn-danger delete">Delete</button>`;
        el.appendChild(actionBtn);
      }
    });

    inputFields[i].addEventListener("blur", removeActionBtn);
  }
}
