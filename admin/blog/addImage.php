<?php
require_once '../../config/Config.php';
?>

<script type="text/javascript">

let base_url = '<?= BASE_URL ?>';
let url = base_url + "/admin/upload/index.php?position=blog";

let inputImage = document.querySelector('input[name="imageUpload"]');
let imageUrl = document.querySelector('input[name="imageUrl"]');

inputImage.addEventListener("change", function () {
    let image = document.querySelector("#image");
    let formData = new FormData();
    formData.append("thumbnailUpload", inputImage.files[0]);

    fetch(url, {
        method: "POST",
        body: formData,
    })
        .then((response) => {
            response.json()
                .then((data) => {
                    imageUrl.value = data;
                    let path = base_url + data;
                    image.setAttribute("src", path);
                })
                .catch((err) => {
                    console.log(err);
                });
        })
        .catch((err) => {
            console.log(err);
        });
});

</script>
