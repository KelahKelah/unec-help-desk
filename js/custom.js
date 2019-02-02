    // $(document).ready(function () {
    //     var url = window.location;
    //     $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
    //     $('ul.nav a').filter(function() {
    //         return this.href == url;
    //     }).parent().addClass('active');
    // });

// $('a[href="' + this.location.pathname + '"]').parents('li').addClass('active');

    //
    // $(".nav a li").on("click", function(){
    //     $(".nav").find(".active").removeClass("active");
    //     $(this).parent().addClass("active");
    // });
    //
    // $(document).ready(function(){
    //     $('.nav li').on('click', function(){
    //         //$(this).addClass('active').removeClass('off').siblings().addClass('off').removeClass('active'); // no need to add .off
    //         $(this).addClass('active').siblings().removeClass('active');
    //     });
    // });​


    $(document).ready(function() {

        // Get current page URL
        var url = window.location.href;

        // remove # from URL
        url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));

        // remove parameters from URL
        url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));

        // select file name
        url = url.substr(url.lastIndexOf("/") + 1);

        // If file name not avilable
        if(url == ''){
            url = 'index.html';
        }

        // Loop all menu items
        $('.menu li').each(function(){

            // select href
            var href = $(this).find('a').attr('href');

            // Check filename
            if(url == href){

                // Select parent class
                var parentClass = $(this).parent('ul').attr('class');

                if(parentClass == 'submenu'){

                    // Add class
                    $(this).addClass('subactive');
                    $(this).parents('.menu li').addClass('active');
                }else{

                    // Add class
                    $(this).addClass('active');
                }

            }
        });
    });