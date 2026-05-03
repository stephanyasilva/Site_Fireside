// transparencia navbar
const navbar = document.getElementById("mainNavbar");
window.addEventListener("scroll", function() {

    if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }

});

// slider clientes/parceiros
document.addEventListener("DOMContentLoaded", () => {
    const tracks = document.querySelectorAll(".slide-track");

    tracks.forEach(track => {
        if (track.dataset.cloned) return;

        const slider = track.closest(".slider");
        const sliderWidth = slider.offsetWidth;

        let totalWidth = track.scrollWidth;

        // duplica até passar da largura do container (com folga)
        while (totalWidth < sliderWidth * 2) {
            track.innerHTML += track.innerHTML;
            totalWidth = track.scrollWidth;
        }

        track.dataset.cloned = "true";
    });
});

// Mascara form contato
const telefone = document.getElementById('telefone');
telefone.addEventListener('input', (e) => {
  let value = e.target.value.replace(/\D/g, '');

  if (value.length > 11) value = value.slice(0, 11);

  value = value.replace(/^(\d{2})(\d)/g, '($1) $2');
  value = value.replace(/(\d{5})(\d)/, '$1-$2');

  e.target.value = value;
});

//envio do form sem mudar de tela
window.onSubmit = function(token) {

    const form = document.getElementById("formContato");
    const btn = document.querySelector(".g-recaptcha");
    const retorno = document.getElementById("retornoForm");

    if (window.enviando) return;
    window.enviando = true;

    btn.disabled = true;
    const textoOriginal = btn.innerText;
    btn.innerText = "Enviando...";

    const formData = new FormData(form);

    fetch("includes/enviar.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.json())
    .then(data => {

        retorno.innerHTML = `
            <div class="alert ${data.success ? 'alert-success' : 'alert-danger'}">
                ${data.message}
            </div>
        `;

        if (data.success) form.reset();

    })
    .catch(() => {
        retorno.innerHTML = `
            <div class="alert alert-danger">
                Erro na comunicação.
            </div>
        `;
    })
    .finally(() => {
        window.enviando = false;
        btn.disabled = false;
        btn.innerText = textoOriginal;

        if (typeof grecaptcha !== "undefined") {
            grecaptcha.reset();
        }
    });
};