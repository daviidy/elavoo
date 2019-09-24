$( document ).ready(function() {
    var selectPrice =  $('.value');
    var btnWhoChangeColor = $('.order-btn-map-view');
    var addBtn =  $('.item-add');
    var subBtn =  $('.item-substract');
 
                
            
    var prixBleu = 9500;
    
    addBtn.click(function(){
        if(parseInt(selectPrice.text()) < prixBleu){
            btnWhoChangeColor.css({'background': '#c1c0c0', 'color' : '#695c5c', 'opacity': '0.5','pointer-events': 'none'})
        }else if(parseInt(selectPrice.text()) >= prixBleu){
            btnWhoChangeColor.removeClass('btn-disable')
            .addClass('btn-activated')
            .css({'background': '#0274b5', 'color' : 'white','pointer-events': 'auto','opacity': '1','cursor': 'pointer'})
        }
    })
    

    
    subBtn.click(function(){
        if(parseInt(selectPrice.text()) < 12000){
            btnWhoChangeColor.removeClass('btn-activated')
                        .addClass('btn-disable')
                        .css({'background': '#c1c0c0', 'color' : '#695c5c', 'opacity': '0.5' ,'pointer-events': 'none'})
        }
    })


});