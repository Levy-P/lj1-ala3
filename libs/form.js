let popups = document.getElementsByClassName("popup");
const form = document.getElementById("form"),
      loading = document.getElementById("loading"),
      popup = (popups.length>0)?popups[0]:false;

function submit() {
    loading.removeAttribute("hidden");
    form.setAttribute("hidden",'');
    if (popup) popup.remove();
    form.submit();
}