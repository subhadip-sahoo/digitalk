(function($){
    $(function(){
        $(".chat").niceScroll();
        
        $(document).delegate('.user', 'click', function(){
            alert($(this).data('id'));
        });
    });
})(jQuery);


