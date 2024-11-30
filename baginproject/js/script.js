$(document).ready(function () {

    $("#status").click(function () {
        var value = $(this).val();
        if (value == "решена") {
            $(".add_photo2").css("visibility", "visible")
            $(".label_photo").css("visibility", "visible")
        } else {
            $(".add_photo2").css("visibility", "hidden")
            $(".label_photo").css("visibility", "hidden")
        }

        if (value == "отклонена") {
            $(".reason").css("visibility", "visible")
            $(".app_reason_label").css("visibility", "visible")
        } else {
            $(".reason").css("visibility", "hidden")
            $(".app_reason_label").css("visibility", "hidden")
        }
        return false;
    });

    // $(".status_update").click(function() {
    //     var value = $(this).val();
    //     $.ajax({
    //         url: "index.php",
    //         data: "value_status=" + value,
    //         type: "post",
    //         success: function (html) {
    //             $("value_status_check").html(html);
    //         },
    //         timeout: 5000
    //     });
    //     return false;
    // })

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

    // $(".filter_block a").click(async function () {
    //     try {
    //         var filter = "new";
    //         let response = await fetch('connect.php', {
    //             method: 'POST',
    //             headers: {
    //               'Content-Type': 'application/json;charset=utf-8'
    //             },
    //             body: JSON.stringify(filter)
    //           });
    //           console.log(response)
    //     } catch (error) {
    //         console.log(error)
    //     }
    // })

    $(".filter_block a").click(function() {
        let id = $(this).attr("id");
        $.ajax({
            type: "POST",
            url: "my_apps.php",
            data: "filter_id=" + id,
            success: function(html) {
                $(".application").html(html);
            },
          });
          return false;
    });

    $(".filter_block2 a").click(function() {
        let id = $(this).attr("id");
        $.ajax({
            type: "POST",
            url: "admin_apps.php",
            data: "filter_id=" + id,
            success: function(html) {
                $(".application").html(html);
            },
          });
          return false;
    });

});