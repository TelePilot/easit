(function() {
    /*
    function fetchSearchResult(term){
        if(term.length < 1){
            $("#search-results").html("");
        } else {
            $.ajax({
                url: ajax_object.ajax_url,
                data: {
                    'action': 'search_site',
                    'term' : term
                },
                success:function(data) {
                    $("#search-results").html(data);
                },
                error: function(errorThrown){
                    console.log(errorThrown);
                }
            });
        }
    }
    */

    $("#search-field").keyup(function (e) {
        if(e.keyCode === 13){
            $("#search-button").trigger("click");
        }
    });

    $("#search-button").on("click", function () {
        const term = $("#search-field").val().trim();
        window.location.href = wp_helper.search_url + "?s=" + term + "&submit=Search";
    });
})();