/**
 * Created by ROJASAEU on 16/5/2017.
 */

console.log("probando el jquery");

/*Animando el logo principal*/
$(document).ready(function(){
    $("#logo").mouseenter(function(){
        $("#logo").animate({

            opacity: '0.5',

        });
    });

    $("#logo").mouseleave(function(){
        $("#logo").animate({

            opacity: '1',

        });
    });
});

/*Animando el boton  de LOGIN*/

$(document).ready(function(){
    $("#login").mouseenter(function(){
        $("#login").animate({

            opacity: '0.8',

        });
    });

    $("#login").mouseleave(function(){
        $("#login").animate({

            opacity: '1',

        });
    });
});

/*Animando el boton de PASO 1 */

$(document).ready(function(){
    $("#paso1").mouseenter(function(){
        $("#paso1").animate({

            opacity: '0.8',

        });
    });

    $("#paso1").mouseleave(function(){
        $("#paso1").animate({

            opacity: '1',

        });
    });
});