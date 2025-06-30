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

imageInput.addEventListener("change", function (e) {
    const files = Array.from(e.target.files);

    // Sembunyikan upload awal, tampilkan "Add more"
    uploadSection.classList.add("hidden");
    addMoreSection.classList.remove("hidden");

    // Kosongkan preview lama
    previewContainer.innerHTML = "";
    selectedFiles = files;

    files.forEach((file, index) => {
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
            removeBtn.addEventListener("click", () => {
                selectedFiles.splice(index, 1);
                const dataTransfer = new DataTransfer();
                selectedFiles.forEach((f) => dataTransfer.items.add(f));
                imageInput.files = dataTransfer.files;
                imageInput.dispatchEvent(new Event("change"));

                // Jika tidak ada file tersisa, tampilkan upload awal lagi
                if (selectedFiles.length === 0) {
                    uploadSection.classList.remove("hidden");
                    addMoreSection.classList.add("hidden");
                }
            });

            wrapper.appendChild(img);
            wrapper.appendChild(removeBtn);
            previewContainer.appendChild(wrapper);
        };

        reader.readAsDataURL(file);
    });
});
