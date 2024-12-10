document.getElementById("btnSave").onclick =(evt)=>{
    //evt.preventDefault()//
    document.getElementById("formEdit").classList.add("was-validated")
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.onmouseenter = Swal.stopTimer;
          toast.onmouseleave = Swal.resumeTimer;
        }
      });
      Toast.fire({
        icon: "success",
        title: "Datos Guardados"
      });
}
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
    document.getElementById("txtDateEdit").value=fecha
    document.getElementById("txtTelEdit").value=phone
    document.getElementById("txtProductEdit").value=prod
    document.getElementById("txtCantProdEdit").value=cant
    document.getElementById("txtHMEdit").value=pago
    document.getElementById("txtNameEdit").value=name
  }
}