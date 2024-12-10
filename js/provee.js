
var botones=document.getElementsByClassName("btnEdit")
for(var i=0;i<botones.length;i++){
  botones[i].onclick=(evt)=>{
    var btn =evt.target
    var name =btn.getAttribute("data-name")
    var pago =btn.getAttribute("data-pago")
    var phone =btn.getAttribute("data-phone")
    var prod =btn.getAttribute("data-prod")
    var cant =btn.getAttribute("data-cant")
    var fecha =btn.getAttribute("data-fecha")
    var id =btn.getAttribute("data-id")
    document.getElementById("txtIdEdit").value=id
    document.getElementById("txtDate").value=fecha
    document.getElementById("txtTel").value=phone
    document.getElementById("txtProduct").value=prod
    document.getElementById("txtCantProd").value=cant
    document.getElementById("txtHM").value=pago
    document.getElementById("txtName").value=name
  }
}