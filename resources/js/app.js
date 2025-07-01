import "./bootstrap";
import "flowbite";
import "./sidebar";
// import "./charts";

// Image Preview when uploading image
const imageInput = document.getElementById("imageInput");
const previewContainer = document.getElementById("previewContainer");
const uploadSection = document.getElementById("uploadSection");
const addMoreSection = document.getElementById("addMoreSection");
const mainImageInput = document.getElementById("mainImageIndex");

let selectedFiles = [];
let mainImageIndex = 0;

function updateFileInput() {
    const dataTransfer = new DataTransfer();
    selectedFiles.forEach((file) => dataTransfer.items.add(file));
    imageInput.files = dataTransfer.files;
}

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

            // Tombol hapus
            const removeBtn = document.createElement("button");
            removeBtn.innerHTML = "&times;";
            removeBtn.className =
                "absolute top-0 right-0 bg-white text-red-600 rounded-full w-6 h-6 text-xs flex items-center justify-center shadow hover:bg-red-100";
            removeBtn.addEventListener("click", () => {
                selectedFiles.splice(index, 1);
                if (mainImageIndex >= selectedFiles.length) {
                    mainImageIndex = 0;
                }
                updateFileInput();
                renderPreviews();
            });

            // Label utama
            if (index === mainImageIndex) {
                const label = document.createElement("div");
                label.innerText = "Main Image";
                label.className =
                    "absolute bottom-0 left-0 bg-pink-600 text-white text-xs px-2 py-1 rounded-tr";
                wrapper.appendChild(label);
            } else {
                const setMainBtn = document.createElement("button");
                setMainBtn.innerText = "Set as Main";
                setMainBtn.className =
                    "absolute bottom-0 left-0 bg-white text-pink-600 text-xs px-2 py-1 rounded-tr hover:underline";
                setMainBtn.addEventListener("click", () => {
                    mainImageIndex = index;
                    mainImageInput.value = index;
                    renderPreviews();
                });
                wrapper.appendChild(setMainBtn);
            }

            wrapper.appendChild(img);
            wrapper.appendChild(removeBtn);
            previewContainer.appendChild(wrapper);
        };

        reader.readAsDataURL(file);
    });

    if (selectedFiles.length > 0) {
        uploadSection.classList.add("hidden");
        addMoreSection.classList.remove("hidden");
        previewContainer.appendChild(addMoreSection);
    } else {
        uploadSection.classList.remove("hidden");
        addMoreSection.classList.add("hidden");
    }

    mainImageInput.value = mainImageIndex;
}

imageInput.addEventListener("change", function (e) {
    const newFiles = Array.from(e.target.files);
    selectedFiles = selectedFiles.concat(newFiles);
    updateFileInput();
    renderPreviews();
});
