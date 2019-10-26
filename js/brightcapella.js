const NavMenu = document.getElementById('nav_menu');
const SideNav = document.getElementById('side_navigation');
const SideNavBar = document.getElementById('side_nav_bar');
const CloseNav = document.querySelectorAll('.close_nav');
const TopNavBar = document.getElementById('navigation_bar');
const dropdown = document.getElementById("dropdown_id");
const shop_links = document.getElementById("shop_links");
const Nav_Website_Logo_2 = document.getElementById("Nav_Website_Logo_2");
const Filter_btn = document.getElementById("Filter_btn");
const Filter_btn_arrow = document.getElementById("Filter_btn_arrow");

function myFunction(x) {
    if (!x.matches) { // If media query matches
        let top_pos_no_scroll = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
            if(top_pos_no_scroll > 46 && !x.matches){
                shop_links.style = "display: flex;";
                Nav_Website_Logo_2.style = "display: flex;"
            }else if(top_pos_no_scroll < 46 && !x.matches){
                shop_links.style = "display: none;";
                Nav_Website_Logo_2.style = "display: none;"  
            }

        window.addEventListener('scroll', (event)=>{
            let scroll_down = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
            if(scroll_down > 46 && !x.matches){
                shop_links.style = "display: flex;";
                Nav_Website_Logo_2.style = "display: flex;"   
            }else if(scroll_down < 46 && !x.matches){
                shop_links.style = "display: none;"; 
                Nav_Website_Logo_2.style = "display: none;"
            }
        })

    }
}
  
const x = window.matchMedia("(max-width: 767px)");

myFunction(x);

var $j = jQuery.noConflict();

$j('.autoplay').slick({
    infinite: true,
    arrows: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 8000,
    responsive: [
        {
            breakpoint: 1180,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
            }
        },
        {
            breakpoint: 700,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 500,
            settings: {
                arrows: false,
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
    ]
});


//counter up
//onload animation
let count_up_animation = 0;
window.addEventListener("load", function(){
    let count_up = $j("#count_up");
    if(count_up.length){
        let oTop = count_up.offset().top - window.innerHeight;
        if(count_up_animation === 0 && $j(window).scrollTop() > oTop){
            $j('.stat-number').each(function () {
                var size = $j(this).text().split(".")[1] ? $j(this).text().split(".")[1].length : 0;
                $j(this).prop('Counter', 0).animate({
                   Counter: $j(this).text()
                }, {
                   duration: 5000,
                   step: function (func) {
                      $j(this).text(parseFloat(func).toFixed(size));
                   }
                });
            });
            count_up_animation = 1;
        }        
    }

})

//onscroll animation

$j(window).scroll(function() {
    let count_up = $j("#count_up");
    if(count_up.length){
        let oTop = count_up.offset().top - window.innerHeight;
        if(count_up_animation === 0 && $j(window).scrollTop() > oTop){
            $j('.stat-number').each(function () {
                var size = $j(this).text().split(".")[1] ? $j(this).text().split(".")[1].length : 0;
                $j(this).prop('Counter', 0).animate({
                   Counter: $j(this).text()
                }, {
                   duration: 5000,
                   step: function (func) {
                      $j(this).text(parseFloat(func).toFixed(size));
                   }
                });
            });
            count_up_animation = 1;
        }        
    } 
})

if(Filter_btn){
    Filter_btn.addEventListener('click', function(){
        Filter_btn_arrow.classList.toggle("Filter_btn_rotate");
    })
}

//Remove Error Message on change
$j("#brc_first_name").bind("change paste keyup", function() {
    $j(this).parent('.form-group').removeClass('has-error');
});

$j("#brc_last_name").bind("change paste keyup", function() {
    $j(this).parent('.form-group').removeClass('has-error');
});

$j("#brc_email").bind("change paste keyup", function() {
    $j(this).parent('.form-group').removeClass('has-error');
});

$j("#brc_message").bind("change paste keyup", function() {
    $j(this).parent('.form-group').removeClass('has-error');
    let trimed_msg = $j(this).val().trim();
    $j('#msg_value_length').text(trimed_msg.length);
    
    if(trimed_msg.length > 29){
        $j(this).parent('.form-group').removeClass('has-min-msg-err');
    }
});
  
//Validate then send data with ajax
$j('#brcContactForm').on('submit', function(e){
    e.preventDefault();

    $j('.form-group').removeClass('has-error'); 
    $j('.form-group').removeClass('has-min-msg-err'); 
    $j('.js-show-feedback').removeClass('js-show-feedback');

    let form = $j(this);

    let FirstName = form.find('#brc_first_name').val();
    let LastName = form.find('#brc_last_name').val();
    let email = form.find('#brc_email').val();
    let message = form.find('#brc_message').val();

    let ajaxurl = form.data('url');

    let trimed_FirstName = FirstName.trim();
    let trimed_LastName = LastName.trim();
    let trimed_email = email.trim();
    let trimed_message = message.trim();

    if(FirstName === '' || trimed_FirstName.length < 1  ){
        $j('#brc_first_name').parent('.form-group').addClass('has-error');
        return;
    }

    if(FirstName === '' || trimed_LastName.length < 1  ){
        $j('#brc_last_name').parent('.form-group').addClass('has-error');
        return;
    }

    if(email === '' || trimed_email.length < 1  ){
        $j('#brc_email').parent('.form-group').addClass('has-error');
        return;
    }

    if(message === ''){
        $j('#brc_message').parent('.form-group').addClass('has-error');
        return;
    }else if(trimed_message.length <= 29){
        $j('#brc_message').parent('.form-group').addClass('has-min-msg-err');
        return;
    }

    let name = `${FirstName} ${LastName}`;

    form.find('input, button, textarea').attr('disabled', 'disabled');
    $j('.js-form-submission').addClass('js-show-feedback');


    $j.ajax({
        url: ajaxurl,
        type: 'post',
        data:{
            name: name,
            email: email,
            message: message,
            action: 'brc_save_user_contact_form'
        },
        error: function( response ){
            $j('.js-form-submission').removeClass('js-show-feedback');
            $j('.js-form-error').addClass('js-show-feedback');
            form.find('input, button, textarea').removeAttr('disabled', 'disabled');
        },
        success: function(response){
            if(response == 0){
                setTimeout(() => {
                    $j('.js-form-submission').removeClass('js-show-feedback');
                    $j('.js-form-error').addClass('js-show-feedback');
                    form.find('input, button, textarea').removeAttr('disabled', 'disabled');                   
                }, 2000);

            }else{
                setTimeout(() => {
                    $j('.js-form-submission').removeClass('js-show-feedback');
                    $j('.js-form-error').removeClass('js-show-feedback');
                    $j('.js-form-success').addClass('js-show-feedback');
                    form.find('input, button, textarea').removeAttr('disabled', 'disabled').val('');                    
                }, 2000);
            }
        }
    })


});
          