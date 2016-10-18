(function () {
    var animationMenu = {
        init: function () {
            $(document).ready(function () {

                /*add management of click on the hamburger menu picture*/
                $("#menuImg").click(function () {
                    $(this).fadeOut(500);
                    $("#closeMenu").fadeIn(500);
                    $("#mainMenuContent").slideToggle();
                });

                /*add management of the click on the close menu picture*/
                $("#closeMenu").click(function () {
                    $(this).fadeOut(500);
                    $("#menuImg").fadeIn(500);
                    $("#mainMenuContent").slideToggle();
                });

            })
        }
    };
    animationMenu.init()
})();
