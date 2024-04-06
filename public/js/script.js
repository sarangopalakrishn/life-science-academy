
    $(document).ready(function () {
        // Get the current page URL
        var currentPage = window.location.href;

        // Loop through each navigation link
        $('.navbar-nav a').each(function () {
            // Get the link URL
            var linkUrl = $(this).attr('href');

            // Check if the current page URL contains the link URL
            if (currentPage.indexOf(linkUrl) !== -1) {
                // Add the "active" class if there's a match
                $(this).addClass('active');
            }
        });
    });