(function(){
  emailjs.init(NjDfkMtd40E2jp7xV);
})();

document.getElementById("contactForm").addEventListener("submit", function(e) {
  e.preventDefault();

  emailjs.sendForm(
    service_1qq20wl,
    plantilla_ufzxc2m,
    this
  ).then(() => {
    alert("Mensaje enviado ✅");
    this.reset();
  }, () => {
    alert("Error al enviar ❌");
  });
});
