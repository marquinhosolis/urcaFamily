function hamburguerMenu(){
    $('.hamburger').click(function(){
        $(this).toggleClass('hamburger--active');
        $('.mainMenu').toggleClass('mainMenu--visible');
    })
}

function homeIntroImage(){
    var homeIntroImage = $('.homeIntroImage').outerHeight();
    $('.homeIntroImage').closest('.container').css('min-height', homeIntroImage);
}

$(document).ready(function(){
    hamburguerMenu();
    storeList();
    storeFilter();
})

$(window).load(function(){
    homeIntroImage();
    flexslider();
})

$(window).resize(function(){
    homeIntroImage();
    flexslider();
})

function storeList(){
    if($(window).width() > 768 ){
        $('.storeList ul').css('max-height', $(window).height() - 300);
    }else{
        $('.storeList ul').css('max-height', $(window).height() - 120);
    }
    
    $('.storeList li').each(function(){
         $(this).click(function(e){
            if($(window).width() > 768){
                e.preventDefault();
                var src = $(this).find('.mapLink').attr('href');
                var iframe = $('.mapIframe').find('iframe');
                iframe.attr('src', src);
            }
        })
    })

    $('.storePhone a, .storeSite a').click(function(e){
        e.stopPropagation();
    })
}

function storeFilter(){
    arrCity = [];
    arrState = [];
    $('.store').each(function(){
        var city = $(this).find('.storeCity').text();
        if(jQuery.inArray(city,arrCity) == -1){
            arrCity.push(city);
            arrCity.sort();
        };
        
        var state = $(this).find('.storeState').text();
        if(jQuery.inArray(state,arrState) == -1){
            arrState.push(state);
            arrState.sort();
        };
    })

    for(var i=0; i< arrCity.length; i++){
        $('#storeCity').append($('<option>', {
            value: arrCity[i],
            text: arrCity[i]
        }));
    }

    for(var i=0; i< arrState.length; i++){
        $('#storeState').append($('<option>', {
            value: arrState[i],
            text: arrState[i]
        }));
    }

    var iframe1 = $( ".storeList li" ).first().find('a').attr('href');
    $('.mapIframe iframe').attr('src', iframe1)

    $('.storeFilter select').change(function(){
        var selected = $(this).val();
        var select = $(this).attr('id');

        if(selected != ""){
            $('.store').hide();
            
            $('.store').each(function(){
                var needle = $(this).find('.' + select).text();
                console.log('needle' + needle);
                console.log('selected: ' + selected);
                if(selected === needle){
                    $(this).show();
                }
            })
        }else{
            $('.store').show();
        }
    })
}

function flexslider(){
    if($(window).width() < 768){
        $('.productsSectionWrapper .flexslider').flexslider({
            animation: "slide",
            controlNav: false
        });
    }else{
        $('.productsSectionSlider').removeClass('flexslider');
    }
    
}