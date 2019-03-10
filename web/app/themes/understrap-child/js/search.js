(function() {

    // We'll pass this variable to the PHP function example_ajax_request
    var fruit = 'Banana';

    console.log("This is a test");

    // This does the ajax request
    $.ajax({
        url: ajax_object.ajax_url, // or example_ajax_obj.ajaxurl if using on frontend
        data: {
            'action': 'search_site',
            'term' : fruit
        },
        success:function(data) {
            // This outputs the result of the ajax request
            console.log(data);
        },
        error: function(errorThrown){
            console.log(errorThrown);
        }
    });

})();