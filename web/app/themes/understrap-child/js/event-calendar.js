(function () {

    function initialiseObserver() {
        const targetNodes = $(".wcs-timetable__wrapper");
        const MutationObserver = window.MutationObserver || window.WebKitMutationObserver;
        const observer = new MutationObserver(handleVueMutation);
        const obsConfig = {childList: true, characterData: false, attributes: true, subtree: true};


        targetNodes.each(function () {
            observer.observe(this, obsConfig);
        });
    }

    function handleVueMutation(mutationsList, observer) {
        mutationsList.forEach(function (mutation) {
            if (mutation.type === 'childList') {
                const wrapper = $(".wcs-timetable__wrapper");
                $(wrapper).each(function () {
                    const container = $(this).children()[0];
                    if ($(container).hasClass("wcs-timetable__container") && !$(container).hasClass("b3-eco-container")) {
                        addOverrideClasses(container);
                        modifyCalendarSideColDOM(container);
                    }
                });
            }
        });
    }

    function addOverrideClasses(container) {
        const {table, mainCol, sideCol, agenda} = getMainCalendarElements(container);
        $(container).addClass("b3-eco-container");
        $(table).addClass("b3-eco-table");
        $(mainCol).addClass("b3-eco-main");
        $(sideCol).addClass("b3-eco-side");
        $(agenda).addClass("b3-eco-agenda");
        $(agenda).find(".wcs-class__image").each(function () {
            $(this).addClass("b3-eco-event-image");
        });
    }

    function modifyCalendarSideColDOM(container) {
        const {agenda} = getMainCalendarElements(container);
        const imageDiv = $(agenda).find(".wcs-class__image")[0];
        $(agenda).prepend($(imageDiv));
        const eventContainers = $(agenda).children(".wcs-class");
        $(eventContainers).each(function () {
            const innerContainer = $(this).children()[0];
            modifyEventDOM(innerContainer);
        })
    }

    function modifyEventDOM(eventContainer) {
        console.log($(eventContainer));
        const eventTime = $(eventContainer).children(".wcs-class__time-duration")[0];
        const eventLoc = $(eventContainer).children(".wcs-class__meta")[0];
        $(eventTime).insertAfter($(eventLoc));
    }

    function getMainCalendarElements(container) {
        const table = $(container).children()[0];
        const mainCol = $(table).children(".wcs-timetable__main-col")[0];
        const sideCol = $(table).children(".wcs-timetable__side-col")[0];
        const agenda = $(sideCol).children()[0];
        return {table, mainCol, sideCol, agenda};
    }

    initialiseObserver();

})();