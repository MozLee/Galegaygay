//menu菜单
$('.menuIco ').click(
	function(){
		if($('.menuIco i').hasClass('icon-menu')){
			$('.sideBar').show(500);
		    $('.mark').show();
		    $('.menuIco i').removeClass("icon-menu").addClass("icon-close");
		}
		else{
			$('.sideBar').hide(500);
		    $('.mark').hide();
		    $('.menuIco i').removeClass("icon-close").addClass("icon-menu");
		}
	}
);
//gotoTOP
$(document).ready(function () {
            $.goup({

                trigger: 100,

                bottomOffset: 50,

                locationOffset: 100,

                title: '咻~',

                titleAsText: true

            });

        });
