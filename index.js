$(document).ready(
    function ( ) {
        function resetMenu ( ) {
            $('nav>ul>li>a').css('color','#FFF');
        }
        function activateTab ( that ) {
            that.find('a').css('color','#06F');
        }
        $('nav>ul>li').click(
            function ( e ) {
                resetMenu();
                activateTab($(this));
            }
        );
        $("#tabs").tabs({
            show: 500
        });
        resetMenu();
        $('nav>ul>li').each(
            function ( index ) {
                if ($(this).hasClass('ui-tabs-active')) activateTab($(this));
            }
        );
        $('#map>object').removeClass('absent');
    }
);
