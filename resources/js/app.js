import "./bootstrap";
import "flowbite";
import "./sidebar";
// import "./charts";

// Image Preview when uploading image
const imageInput = document.getElementById("imageInput");
const previewContainer = document.getElementById("previewContainer");
const uploadSection = document.getElementById("uploadSection");
const addMoreSection = document.getElementById("addMoreSection");

let selectedFiles = [];

function renderPreviews() {
    previewContainer.innerHTML = "";
    selectedFiles.forEach((file, index) => {
        const reader = new FileReader();

        reader.onload = function (e) {
            const wrapper = document.createElement("div");
            wrapper.className = "relative group";

            const img = document.createElement("img");
            img.src = e.target.result;
            img.className = "w-full h-32 object-cover rounded shadow";

            const removeBtn = document.createElement("button");
            removeBtn.innerHTML = "&times;";
            removeBtn.className =
                "absolute top-0 right-0 bg-white text-red-600 rounded-full w-6 h-6 text-xs flex items-center justify-center shadow hover:bg-red-100";
            removeBtn.setAttribute("data-index", index);

            removeBtn.addEventListener("click", (event) => {
                const removeIndex = parseInt(
                    event.target.getAttribute("data-index")
                );
                selectedFiles.splice(removeIndex, 1);

                const updatedTransfer = new DataTransfer();
                selectedFiles.forEach((f) => updatedTransfer.items.add(f));
                imageInput.files = updatedTransfer.files;

                renderPreviews(); // render ulang, tanpa trigger event change
            });

            wrapper.appendChild(img);
            wrapper.appendChild(removeBtn);
            previewContainer.appendChild(wrapper);
        };

        reader.readAsDataURL(file);
    });

    // Show/hide section sesuai state
    if (selectedFiles.length > 0) {
        uploadSection.classList.add("hidden");
        addMoreSection.classList.remove("hidden");
    } else {
        uploadSection.classList.remove("hidden");
        addMoreSection.classList.add("hidden");
    }
}

imageInput.addEventListener("change", function (e) {
    const newFiles = Array.from(e.target.files);
    selectedFiles = selectedFiles.concat(newFiles); // gabung lama + baru

    const dataTransfer = new DataTransfer();
    selectedFiles.forEach((f) => dataTransfer.items.add(f));
    imageInput.files = dataTransfer.files;

    renderPreviews(); // tampilkan semua gambar
});
