$(document).ready(function(){

//click bouton plus
  $('.img-container .item-add').click(function(){
      //on fait apparaitre le bouton (-)
      $(this).siblings(".item-substract").css("display", "block");
      //on récupère le nom de l'article selected
      var item_name = $(this).parents().eq(1).find('.name').find('span').text();
      //on recupere les noms de tous les articles à droite
      var items = $('tbody').find('.name');
      var tab = [];

      for (i = 0; i < items.length; i++) {
          tab.push(items[i].textContent);
      }

      console.log(items);
      console.log(tab);

      function checkName(name) {
          return name == item_name;
        }
      if (!(tab.find(checkName))) {

          //si l'article n'est pas dans la liste de droite
          //ajouter dans le dom le nom de l'article

          $("#summary-items tbody").append(
                $('<tr/>', {'class': 'summary-item bundle', 'style': 'display: table-row'}).append(
                    $('<td/>', {'class': 'name', text: item_name})
                )
                .append(
                    $('<td/>', {'class': 'update-controls noselect'}).append(
                        $('<span/>', {'class': 'item-substract item-update', text: '-'})
                    ).append(
                        $('<span/>', {'class': 'item-amount', text: '1'})
                    ).append(
                        $('<span/>', {'class': 'item-add item-update', text: '+'})
                    )
                ).append(
                    $('<td/>', {'class': 'price'}).append(
                        $('<span/>', {text: $(this).parents().eq(1).find('.price').children().first().text()})
                    ).append(
                        $('<span/>', {text: ' FCFA'})
                    )
                )
            );

            //on ajoute le prix du produit au prix total
            $(".total-price-value .value").text(Number($(".total-price-value .value").text()) + Number($(this).parents().eq(1).find('.price').children().first().text()));

          /*var summary = '<tr class="summary-item bundle" style="display: table-row;">';

          var summary2 = '<td class="name">'+ item_name +'</td>';
          var summary3 = '<td class="update-controls noselect"><span class="item-substract item-update">-</span> <span class="item-amount">5</span> <span class="item-add item-update">+</span></td>';
          var summary4 = '<td class="price"><span>550</span> <span>FCFA</span></td>';
          var summary5 = '</tr>';               // Create element with HTML

          $("#summary-items tbody").append(summary, summary2, summary3, summary4, summary5);
          */

      }

      else{




      //on crée une variable qui va contenir l'article en question
      //si il est déjà dans la liste des articles a droite
      var found;

      //checkez si le nom de l'article en question est déjà dans la liste à droite
      //si oui trouver l'article

      for (i = 0; i < items.length; i++) {
          if (items[i].textContent == item_name) {
            found = items[i];

            //ajouter + 1 à sa quantite
            var quantity;

            for (i = 0; i < found.nextElementSibling.children.length; i++) {
                if (found.nextElementSibling.children[i].className == "item-amount") {
                  quantity = found.nextElementSibling.children[i];

                  var amount = Number(quantity.textContent) + 1;
                  quantity.innerHTML = amount;
                  console.log(quantity);
                  console.log(amount);

                  break;
                }

            }

            //on ajoute son prix unitaire au prix total de la liste de droite
            var unitPrice = found.nextElementSibling.nextElementSibling.children[0];

            var globalPrice = found.parentNode.parentNode.parentNode.parentNode.previousElementSibling.getElementsByClassName("value");
            console.log(globalPrice[0].textContent);
            var newGlobalPrice = Number(globalPrice[0].textContent) + Number(unitPrice.textContent);
            globalPrice[0].innerHTML = newGlobalPrice;
            console.log(newGlobalPrice);



            break;
          }

      }

  }


});//fin click bouton plus






//click bouton moins
  $('.img-container .item-substract').click(function(){
      //on fait apparaitre le bouton (-)

      //on récupère le nom de l'article selected
      var item_name = $(this).parents().eq(1).find('.name').find('span').text();
      //on recupere les noms de tous les articles à droite
      var items = $('tbody').find('.name');

      console.log(items);





      //on crée une variable qui va contenir l'article en question
      //si il est déjà dans la liste des articles a droite
      var found;

      //checkez si le nom de l'article en question est déjà dans la liste à droite
      //si oui trouver l'article

      for (i = 0; i < items.length; i++) {
          if (items[i].textContent == item_name) {
            found = items[i];

            //faire - 1 à sa quantite
            var quantity;
            var amount;

            for (i = 0; i < found.nextElementSibling.children.length; i++) {
                if (found.nextElementSibling.children[i].className == "item-amount") {
                  quantity = found.nextElementSibling.children[i];

                  amount = Number(quantity.textContent) - 1;
                  //si amount est 0 cacher le bouton moins



                  //et faire disparaitre l'article de la liste de droite
                  quantity.innerHTML = amount;
                  console.log(quantity);
                  console.log(amount);

                  break;
                }

            }

            //on ajoute son prix unitaire au prix total de la liste de droite
            var unitPrice = found.nextElementSibling.nextElementSibling.children[0];

            var globalPrice = found.parentNode.parentNode.parentNode.parentNode.previousElementSibling.getElementsByClassName("value");
            console.log(globalPrice[0].textContent);
            var newGlobalPrice = Number(globalPrice[0].textContent) - Number(unitPrice.textContent);
            globalPrice[0].innerHTML = newGlobalPrice;
            console.log(newGlobalPrice);

            if (amount == 0) {
                $(this).css("display", "none");
                found.parentNode.setAttribute("id", "toDelete");
                var toDelete = document.getElementById("toDelete");
                toDelete.parentNode.removeChild(toDelete);
                console.log("amount est "+amount);
            }



            break;
          }

      }




});//fin click bouton plus


//when user has finished to
//selct items and want to
//go to order page

$('#orderNowLink').click(function(){
    var items = $('tbody').find('.summary-item');
    var name = $('tbody').find('.name');
    var quantity = $('tbody').find('.item-amount');
    var unitPrice = $('tbody').find('.price');
    var tab = [];

    for (i = 0; i < items.length; i++) {
        tab[i] = [];
        tab[i].push(name[i].textContent);
        tab[i].push(quantity[i].textContent);
        tab[i].push(unitPrice[i].firstElementChild.textContent);

    }

    $.ajax({
                                url:'/command',
                                type: 'POST',
                                contentType: 'json',
                                data: JSON.stringify(tab),
                                contentType: 'application/json; charset=utf-8',
                                success: function() {
                                window.location = '/bills/create';
                                },
                                error: function(){
                                    alert('erreur');
                                }
                            });
});


//function when user wants to create
//adresse on order page

$('#adress').click(function(){
    var items = $('tbody').find('.summary-item');
    var name = $('tbody').find('.name');
    var quantity = $('tbody').find('.item-amount');
    var unitPrice = $('tbody').find('.price');



});















});//fin document ready
