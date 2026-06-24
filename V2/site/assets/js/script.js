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

/* Modal Galeria Carrossel */
const modalElement = document.getElementById('videoModal');
const modalVideo = document.getElementById('modalVideo');
let videoModal = null;

if (modalElement && modalVideo) {
    videoModal = new bootstrap.Modal(modalElement);
}

// Gera thumbnail automática dos vídeos
function gerarThumbnail(video) {
    return new Promise((resolve, reject) => {
        const finalizar = () => {
            const canvas = document.createElement('canvas');
            const ctx = canvas.getContext('2d');
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;

            ctx.drawImage(
                video,
                0,
                0,
                canvas.width,
                canvas.height
            );

            resolve(
                canvas.toDataURL('image/webp', 0.82)
            );
        };

        const irParaFrame = () => {
            const segundo = Number.isFinite(video.duration)
                ? Math.min(1, Math.max(video.duration - 0.1, 0))
                : 0;

            if (Math.abs(video.currentTime - segundo) < 0.05) {
                finalizar();
                return;
            }

            video.currentTime = segundo;
        };
        video.addEventListener(
            'loadeddata',
            irParaFrame,
            { once: true }
        );
        video.addEventListener(
            'seeked',
            finalizar,
            { once: true }
        );
        video.addEventListener(
            'error',
            reject,
            { once: true }
        );
        video.load();
    });
}

// Aplica thumbnail nos cards
document .querySelectorAll('.video-card video:not([poster])').forEach((video) => {
    gerarThumbnail(video)

    .then((thumb) => {
        video.setAttribute(
            'poster',
            thumb
        );
        video.pause();
    })

    .catch(() => {
        console.log(
            'Não foi possível gerar thumbnail:',
            video
        );
    });
});

// Abrir vídeo no modal
document.querySelectorAll('.video-card').forEach((card) => {
    card.addEventListener('click', () => {
        const caminhoVideo = card.dataset.video;
        modalVideo.src = caminhoVideo;
        modalVideo.muted = true;
        modalVideo.volume = 0;
        modalVideo.load();
        videoModal.show();
        modalVideo.play()
        .catch((erro) => {
            console.error(
                'Erro ao iniciar vídeo:',
                erro
            );
        });
    });
});

// Fechar modal
if (modalElement) {
    modalElement.addEventListener(
        'hidden.bs.modal',
        () => {
            modalVideo.pause();
            modalVideo.removeAttribute(
                'src'
            );
            modalVideo.load();
        }
    );
}

