$(document).ready(function () {

    $("#status").click(function () {
        var value = $(this).val();
        if (value == "решена") {
            $(".add_photo2").css("visibility", "visible")
        } else {
            $(".add_photo2").css("visibility", "hidden")
        }
    });

    $(".sort a").click(function () {
        var id = $(this).attr("id");
        $.ajax({
            url: "my_apps.php",
            data: "sort_id=" + id,
            type: "post",
            success: function (html) {
                $(".application").html(html);
            }
        });
        return false;
    });

    $(".sort2 a").click(function () {
        var id = $(this).attr("id");
        $.ajax({
            url: "admin_apps.php",
            data: "sort_id=" + id,
            type: "post",
            success: function (html) {
                $(".application").html(html);
            }
        });
        return false;
    });

    $(".filter_block a").click(async function () {
        try {
            var filter = "new";
            let response = await fetch('connect.php', {
                method: 'POST',
                headers: {
                  'Content-Type': 'application/json;charset=utf-8'
                },
                body: JSON.stringify(filter)
              });
              console.log(response)
        } catch (error) {
            console.log(error)
        }
    })

});