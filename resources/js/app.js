import "./bootstrap";
import "flowbite";
import "./sidebar";
// import "./charts";

// Image Preview when uploading image
const imageInput = document.getElementById("imageInput");
const previewContainer = document.getElementById("previewContainer");
let selectedFiles = [];

imageInput.addEventListener("change", function (e) {
    const files = Array.from(e.target.files);
    previewContainer.innerHTML = ""; // kosongkan preview saat pilih ulang

    selectedFiles = files; // simpan array file baru

    files.forEach((file, index) => {
        const reader = new FileReader();

        reader.onload = function (e) {
            const imgWrapper = document.createElement("div");
            imgWrapper.className = "relative group";

            const img = document.createElement("img");
            img.src = e.target.result;
            img.className = "rounded w-full h-32 object-cover";

            const removeBtn = document.createElement("button");
            removeBtn.innerHTML = "&times;";
            removeBtn.className =
                "absolute top-0 right-0 bg-white rounded-full w-6 h-6 text-red-500 font-bold flex items-center justify-center shadow group-hover:opacity-100 opacity-0 transition";
            removeBtn.addEventListener("click", function () {
                selectedFiles.splice(index, 1);
                files.splice(index, 1);
                imageInput.value = ""; // reset input
                previewContainer.innerHTML = "";
                // rebuild preview
                const dataTransfer = new DataTransfer();
                selectedFiles.forEach((f) => dataTransfer.items.add(f));
                imageInput.files = dataTransfer.files;
                imageInput.dispatchEvent(new Event("change"));
            });

            imgWrapper.appendChild(img);
            imgWrapper.appendChild(removeBtn);
            previewContainer.appendChild(imgWrapper);
        };

        reader.readAsDataURL(file);
    });
});
