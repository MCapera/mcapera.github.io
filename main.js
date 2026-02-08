
emailjs.init({
  publicKey: "p8Kzb71k2qX5xVCqS",
});

document.getElementById("contactForm").addEventListener("submit", function (e) {
  e.preventDefault();

  emailjs.sendForm(
    "service_1qq20w1",
    "plantilla_ufzxc2m",
    this
  ).then(
    () => {
      alert("Mensaje enviado ✅");
      this.reset();
    },
    (error) => {
      console.error(error);
      alert("Error al enviar ❌");
    }
  );
});