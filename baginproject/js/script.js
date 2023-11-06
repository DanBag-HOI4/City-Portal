$(document).ready(function () {

    $("#status").click(function() {
        var value = $(this).val();
        if (value == "решена") {
            $(".photo2").css("visibility", "visible")
        } else {
            $(".photo2").css("visibility", "hidden")
        }
    });

    $(".sort a").click(function () {
        var id = $(this).attr("id");
        $.ajax({
            url:"my_apps.php",
            data: "sort_id="+id,
            type: "post",
            success:function (html) {
                $(".application").html(html);
            }
        });
        return false
    });

    $(".sort a").click(function () {
        var id = $(this).attr("id");
        $.ajax({
            url:"admin_apps.php",
            data: "sort_id="+id,
            type: "post",
            success:function (html) {
                $(".application").html(html);
            }
        });
        return false
    });

    $(".app_card").click(function () {
        var pic = $(".photo2").css("visibility", "hidden")
    });
});