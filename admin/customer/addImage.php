<?php
    require_once '../../config/Config.php';
?>

<script type="text/javascript">

let base_url = '<?= BASE_URL ?>';
let url = base_url + "/admin/upload/index.php?position=customer";

let inputThumbnail = document.querySelector('input[name="thumbnailUpload"]');
let thumbnailUrl = document.querySelector('input[name="thumbnailUrl"]');

inputThumbnail.addEventListener("change", () => {
    let thumbnail = document.querySelector("#thumbnail");
    let formData = new FormData();

    formData.append("thumbnailUpload", inputThumbnail.files[0]);
    fetch(url,
        {
            method: "POST",
            body: formData,
        })
        .then((response) => {
            response.json()
                .then((data) => {
                    thumbnailUrl.value = data;
                    let path = base_url + data;
                    thumbnail.setAttribute("src", path);
                })
                .catch((err) => {
                    console.log(err);
                });
        })
        .catch((err) => {
            console.error(err);
        });
});

</script>
