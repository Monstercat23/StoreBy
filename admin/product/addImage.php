<?php
require_once '../../config/Config.php';
?>

<script type="text/javascript">
    let base_url = '<?= BASE_URL ?>';
    let url = base_url + "/admin/upload/index.php?position=product";

    let inputThumbnail = document.querySelector('input[name="thumbnailUpload"]');
    let thumbnailUrl = document.querySelector('input[name="thumbnailUrl"]');

    inputThumbnail.addEventListener("change", function() {
        let thumbnail = document.querySelector("#thumbnail");

        let file = inputThumbnail.files[0];
        let formData = new FormData();
        formData.append("thumbnailUpload", file);

        fetch(url, {
                method: "POST",
                body: formData,
            })
            .then((response) => {
                console.log(response);
                response
                    .json()
                    .then((data) => {
                        console.log(data);
                        thumbnailUrl.value = data;
                        let path = base_url + data;
                        console.log("Path: " + path);
                        thumbnail.setAttribute("src", path);
                    })
                    .catch((err) => {
                        console.error("Error: " + err);
                    });
            });
    });

    /* IMAGE */

    let inputImages = document.querySelectorAll(".images");

    inputImages.forEach(function(item, index) {
        item.addEventListener("change", function() {
            let thumbnail = document.querySelector("#images-" + index);
            let thumbnailUrl = document.querySelector(
                `input[name="images[${index}]"]`
            );
            let formData = new FormData();

            formData.append("thumbnailUpload", item.files[0]);

            fetch(url, {
                    method: "POST",
                    body: formData,
                })
                .then((response) => {
                    response
                        .json()
                        .then((data) => {
                            console.log(data);
                            thumbnailUrl.value = data;
                            let path = base_url + data;
                            thumbnail.setAttribute("src", path);
                        })
                        .catch((err) => {
                            console.error(err);
                        });
                })
                .catch((err) => {
                    console.error(err);
                });
        });
    });
</script>
