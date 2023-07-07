const output = document.querySelector("output")
    const input = document.querySelector("input")
    let imagesArray = []
    input.addEventListener("change", () => {

    })
    input.addEventListener("change", () => {
        const files = input.files
    })
    input.addEventListener("change", () => {
        const files = input.files
        for (let i = 0; i < files.length; i++) {
            imagesArray.push(files[i])
        }
    })
    input.addEventListener("change", () => {
        const files = input.files
        for (let i = 0; i < files.length; i++) {
            imagesArray.push(files[i])
        }
        displayImages()
    })

    function displayImages() {
        let images = ""
    }

    function displayImages() {
        let images = ""
        imagesArray.forEach((image, index) => {

        })
    }

    function displayImages() {
        let images = ""
        imagesArray.forEach((image, index) => {
            images += `<div class="image">
                <img src="${URL.createObjectURL(image)}" alt="image">
                <span onclick="deleteImage(${index})">&times;</span>
              </div>`
        })
    }

    function displayImages() {
        let images = ""
        imagesArray.forEach((image, index) => {
            images += `<div class="image">
                <img src="${URL.createObjectURL(image)}" alt="image">
                <span onclick="deleteImage(${index})">&times;</span>
              </div>`
        })
        output.innerHTML = images
    }

    function deleteImage(index) {
        imagesArray.splice(index, 1)
        displayImages()
    }