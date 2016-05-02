/**
 * Created by tobias.albert on 02.05.2016.
 */

var acc = 0;

function load_object(id){
    var id_l = ids[id];
    $('#object_div').remove();
    $('#loader').show();
    $.get("/parts/get_object.php", { id:id_l }, function(data){
        $('#count_acc').html(id + 1);
        $('#loader').hide();
        $('#loader').after(data);
    });
}

function forward(){
    if((ids.length - 1) > acc){
        load_object(++acc);
    }
}

function backward(){
    if(acc > 0){
        load_object(--acc);
    }
}

$( document ).ready(function() {
    load_object(0);
});