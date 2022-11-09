 
<style>
.footer{position:flex;
bottom:0;
width:100%;
height:60px;
background-color:red;
color:yellow;
margin-top:30px;
}
</style>
<div>

  <tr> 
     
      <p align="center">Работу сделал: Абдушукуров Алик</p> 
      

                     </td> 
  </tr> 
  </table> 
  <script>
const manufacturer = document.querySelector('select[name="manufacturer"]');
const name = document.querySelector('select[name="name"]');
manufacturer.onchange = function() {
  name.querySelectorAll('option').forEach(opt => {
    if (opt.dataset.id != manufacturer.value) opt.hidden = true;
    else opt.hidden = false;
  });
}


      const checkbox = document.querySelector(".checkbox");

checkbox.addEventListener("change", function () {
    if (this.checked) {
        console.log("checked");
    } else {
        console.log("unchecked");
    }
})

function myFunction() {
  var rowSumm = 0;
  var tdSumm = 0;
  var totalSumtd = 0;
  // берем таблицу
  var table = document.getElementById("mytab");
  // итерирование по строкам    
  for (var i = 1, row; row = table.rows[i]; i++) {
    // обнуляем сумму по строке
    rowSumm = 0;
    tdSumm = 0;
    // итерирование по столбцам      
    var q = 5;
     we = row.cells[q];
     rowSumm += parseFloat(we.firstChild.nodeValue); // parseFloat(col.innerHTML);  
     var j = 4;
     col = row.cells[j];
     tdSumm += parseFloat(col.firstChild.nodeValue); // parseFloat(col.innerHTML);            
     totalSumtd += tdSumm * rowSumm;
      
    console.log('сумма в строке: ' + tdSumm * rowSumm);
  }
  console.log('итоговая сумма: ' + totalSumtd);
  document.getElementById('itog').innerHTML = totalSumtd;
}
</script>
  <script src="script.js"></script>
</body> 
</html> 