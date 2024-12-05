document.getElementById("btnSave").onclick =(evt)=>{
    //evt.preventDefault()//
    document.getElementById("form").classList.add("was-validated")
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
    var email =btn.getAttribute("data-email")
    var name =btn.getAttribute("data-name")
    var id =btn.getAttribute("data-id")
    document.getElementById("txtIdEdit").value=id
    document.getElementById("txtEmailEdit").value=email
    document.getElementById("txtNameEdit").value=name
  }
}

