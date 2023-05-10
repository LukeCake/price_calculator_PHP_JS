         function calcTotal()
         {
            var itemTotal = 0;


            var items = document.getElementsByTagName("input");
            var items2 = parseInt(document.getElementById('item').value);
            var itemsLen = document.getElementsByTagName('input').length;
        
            console.log(items);
            console.log(items2);
            console.log(itemsLen);
    

            for (var i = 0; i < itemsLen; i++)
            {
               if (items[i].checked)
               {
                  itemTotal += (items[i].value * 1);
               }
               
               var total = (itemTotal + items2);
               document.getElementById("total").innerHTML = "Celková cena:  " + total + " Kč / měsíc";
            }
         }

       
         var calcButton = document.getElementById("calcButton");
         if (calcButton.addEventListener) 
         {
            calcButton.addEventListener("click", calcTotal, false); 
         }
         else if (calcButton.attachEvent)
         {
            calcButton.attachEvent("onclick", calcTotal);   
         }