<!DOCTYPE html>
<html>

<head>
    <title>Multiple Image Upload with Add and Delete Inputs</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .preview {
            display: inline-block;
            margin: 10px;
        }

        .preview img {
            width: 100px;
            height: 100px;
            margin-right: 10px;
        }

        .input-container {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div id="input-container">
        <div class="input-container">
            <input type="file" class="file-input" name="files[]" multiple>
            <button type="button" class="delete-input">Delete</button>
        </div>
    </div>
    <button type="button" id="add-input">Tambah Input File</button>
    <div id="preview-container"></div>

    <script>
        $(document).ready(function() {
            // Add new input file when 'Tambah Input File' button is clicked
            $("#add-input").on("click", function() {
                $("#input-container").append(
                    '<div class="input-container"><input type="file" class="file-input" name="files[]" multiple><button type="button" class="delete-input">Delete</button></div>'
                );
            });

            // Delete the input file when the 'Delete' button is clicked
            $("#input-container").on("click", ".delete-input", function() {
                $(this).parent(".input-container").remove();
            });

            // Preview images when input file changes
            $("#input-container").on("change", ".file-input", function() {
                var files = $(this)[0].files;
                $("#preview-container").empty();
                if (files.length > 0) {
                    for (var i = 0; i < files.length; i++) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $("<div class='preview'><img src='" + e.target.result + "'><button class='delete-preview'>Delete</button></div>").appendTo("#preview-container");
                        };
                        reader.readAsDataURL(files[i]);
                    }
                }
            });

            // Delete preview image when 'Delete' button is clicked
            $("#preview-container").on("click", ".delete-preview", function() {
                $(this).parent(".preview").remove();
            });
        });
    </script>
</body>

</html>
