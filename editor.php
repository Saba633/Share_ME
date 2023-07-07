<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit your Image</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Import custom stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!-- Compiled and minified JavaScript -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
    </script>
</head>
<style>
.nav-header {
    font-size: 1.5rem;
}

.row {
    margin-bottom: 0;
}

#sourceImage,
.image-controls,
.image-save,
.preset-filters {
    display: none;
}

.image-preview {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

#canvas {
    max-height: 420px;
    object-fit: contain;
}

#back-btn {
    width: 100px;
    height: 40px;
    color: white;
    background-color: grey;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 18px;
    float: right;
    margin-right: 10px;
}

#back-btn:hover {
    background-color: white;
    color: black;
}
</style>

<body style="background-color: rgb(59, 58, 58); color:white;">
    <div style="margin-right:5%;">
        <a href=" ./home.php">
            <button id="back-btn">Go Back</button>
        </a>
    </div>
    <!-- Hidden image that will be used for
	holding the source image -->
    <img id="sourceImage" crossorigin="anonymous">

    <div class="image-preview">

        <!-- Canvas that will hold the
		image to be edited -->
        <canvas id="canvas" height="0"></canvas>
    </div>
    <div class="container app">

        <!-- Text to be shown at the beginning
		of the application -->
        <div class="help-text center-align">
            <h5>Please Upload an Image to Start Editing</h5>
        </div>

        <!-- All the image controls that will be
		used for modifying the image -->
        <div class="image-controls">
            <h6>Image Controls</h6>
            <div class="row">
                <div class="col s6">
                    <span class="range-field">
                        <label for="brightnessSlider">
                            Brightness
                        </label>
                        <input id="brightnessSlider" type="range" value="100" min="0" max="300"
                            onchange="applyFilter()">
                    </span>
                </div>
                <div class="col s6">
                    <span class="range-field">
                        <label for="contrastSlider">
                            Contrast
                        </label>
                        <input id="contrastSlider" type="range" value="100" min="0" max="200" onchange="applyFilter()">
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="col s6">
                    <span class="range-field">
                        <label for="grayscaleSlider">
                            Grayscale
                        </label>
                        <input id="grayscaleSlider" type="range" value="0" min="0" max="100" onchange="applyFilter()">
                    </span>
                </div>
                <div class="col s6">
                    <span class="range-field">
                        <label for="saturationSlider">
                            Saturation
                        </label>
                        <input id="saturationSlider" type="range" value="100" min="0" max="300"
                            onchange="applyFilter()">
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="col s6">
                    <span class="range-field">
                        <label for="sepiaSlider">
                            Sepia
                        </label>
                        <input id="sepiaSlider" type="range" value="0" min="0" max="200" onchange="applyFilter()">
                    </span>
                </div>
                <div class="col s6">
                    <span class="range-field">
                        <label for="hueRotateSlider">
                            Hue
                        </label>
                        <input id="hueRotateSlider" type="range" value="0" min="0" max="360" onchange="applyFilter()">
                    </span>
                </div>
            </div>
        </div>

        <!-- Buttons that will be used to change
		the values to preset ones -->
        <div class="preset-filters">
            <h6>Preset Filters</h6>
            <button class="btn green" onclick="brightenFilter()">
                Brighten
            </button>
            <button class="btn green" onclick="bwFilter()">
                Black and White
            </button>
            <button class="btn green" onclick="funkyFilter()">
                Funky
            </button>
            <button class="btn green" onclick="vintageFilter()">
                Vintage
            </button>
        </div>
        <div class="buttons">
            <ul class="right image-save">
                <button class="btn btn-flat blue white-text" onclick="saveImage()">
                    Save
                </button>
                <button class="btn btn-flat red white-text" onclick="resetImage()">
                    Reset
                </button>
            </ul>
        </div>
        <!-- File control to upload a new file -->
        <div class="file-controls">
            <h6>File Controls</h6>

            <!-- Element that will be later used to download
			the canvas image from code -->
            <a id="link"></a>

            <!-- File Selector for uploading the image -->
            <div class="file-field input-field">
                <div class="btn green">
                    <span>Upload Image</span>
                    <input type="file" accept="image/*" onchange="uploadImage(event)">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path" type="text">
                </div>
            </div>
        </div>
    </div>

    <!-- Load the script for the editor -->
    <script src="app.js"></script>
    <script>
    // Get the source image to be edited
    let image = document.getElementById('sourceImage');

    // Get the canvas for the edited image
    let canvas = document.getElementById('canvas');

    // Get the 2D context of the image
    let context = canvas.getContext('2d');

    // Get all the sliders of the image
    let brightnessSlider = document.getElementById("brightnessSlider");
    let contrastSlider = document.getElementById("contrastSlider");
    let grayscaleSlider = document.getElementById("grayscaleSlider");
    let hueRotateSlider = document.getElementById("hueRotateSlider");
    let saturateSlider = document.getElementById("saturationSlider");
    let sepiaSlider = document.getElementById("sepiaSlider");

    function uploadImage(event) {

        // Set the source of the image from the uploaded file
        image.src = URL.createObjectURL(event.target.files[0]);

        image.onload = function() {
            // Set the canvas the same width and height of the image
            canvas.width = this.width;
            canvas.height = this.height;
            canvas.crossOrigin = "anonymous";
            applyFilter();
        };

        // Show the image editor controls and hide the help text
        document.querySelector('.help-text').style.display = "none";
        document.querySelector('.image-save').style.display = "block";
        document.querySelector('.image-controls').style.display = "block";
        document.querySelector('.preset-filters').style.display = "block";
    };

    // This function is used to update the image
    // along with all the filter values
    function applyFilter() {

        // Create a string that will contain all the filters
        // to be used for the image
        let filterString =
            "brightness(" + brightnessSlider.value + "%" +
            ") contrast(" + contrastSlider.value + "%" +
            ") grayscale(" + grayscaleSlider.value + "%" +
            ") saturate(" + saturateSlider.value + "%" +
            ") sepia(" + sepiaSlider.value + "%" +
            ") hue-rotate(" + hueRotateSlider.value + "deg" + ")";

        // Apply the filter to the image
        context.filter = filterString;

        // Draw the edited image to canvas
        context.drawImage(image, 0, 0);
    }
    // A series of functions that handle the preset filters
    // Each of these will first reset the image
    // and then apply a certain parameter before
    // redrawing the image
    function brightenFilter() {
        resetImage();
        brightnessSlider.value = 130;
        contrastSlider.value = 120;
        saturateSlider.value = 120;
        applyFilter();
    }

    function bwFilter() {
        resetImage();
        grayscaleSlider.value = 100;
        brightnessSlider.value = 120;
        contrastSlider.value = 120;
        applyFilter();
    }

    function funkyFilter() {
        resetImage();

        // Set a random hue rotation everytime
        hueRotateSlider.value =
            Math.floor(Math.random() * 360) + 1;
        contrastSlider.value = 120;
        applyFilter();
    }

    function vintageFilter() {
        resetImage();
        brightnessSlider.value = 120;
        saturateSlider.value = 120;
        sepiaSlider.value = 150;
        applyFilter();
    }
    // Reset all the slider values to there default values
    function resetImage() {
        brightnessSlider.value = 100;
        contrastSlider.value = 100;
        grayscaleSlider.value = 0;
        hueRotateSlider.value = 0;
        saturateSlider.value = 100;
        sepiaSlider.value = 0;
        applyFilter();
    }

    function saveImage() {
        // Select the temporary element we have created for
        // helping to save the image
        let linkElement = document.getElementById('link');
        linkElement.setAttribute(
            'download', 'edited_image.png'
        );

        // Convert the canvas data to a image data URL
        let canvasData = canvas.toDataURL("image/png")

        // Replace it with a stream so that
        // it starts downloading
        canvasData.replace(
            "image/png", "image/octet-stream"
        )

        // Set the location href to the canvas data
        linkElement.setAttribute('href', canvasData);

        // Click on the link to start the download
        linkElement.click();
    }
    </script>
</body>

</html>