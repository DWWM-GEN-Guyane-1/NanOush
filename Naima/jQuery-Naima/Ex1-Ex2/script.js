$(document).ready(function() {
    $("button").click(function() {
        $("p").toggle("slow", function() {
            if ($("p").is(":visible")) {
                alert("Le paragraphe est visible.");
            } else {
                alert("Le paragraphe est caché.");
            }
        });
    });
});