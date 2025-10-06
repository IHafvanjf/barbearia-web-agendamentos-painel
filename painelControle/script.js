document.addEventListener("DOMContentLoaded", function () {
    const monthNames = [
        "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
        "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
    ];

    let selectedProfessional = "";
    let selectedDate = "";
    let currentMonth = new Date().getMonth();
    let currentYear = new Date().getFullYear();

    const professionalMap = {
        "carlos": "Profissional 1",
        "ricardo": "Profissional 2",
        "marcos": "Profissional 3"
    };

    // Exibe calendário e agenda do profissional
    window.showScheduleTable = function (professional) {
        selectedProfessional = professional;
        document.getElementById("professionals-container").style.display = "none";

        document.querySelectorAll(".schedule-table").forEach(el => el.style.display = "none");
        document.getElementById(`schedule-${professional}`).style.display = "block";

        updateCalendars();
    };

    window.showProfessionals = function () {
        document.getElementById("professionals-container").style.display = "flex";
        document.querySelectorAll(".schedule-table").forEach(el => el.style.display = "none");
    };

    window.changeMonth = function (step) {
        currentMonth += step;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        } else if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        updateCalendars();
    };

    function updateCalendars() {
        document.querySelectorAll(".monthName").forEach(el => {
            el.textContent = `${monthNames[currentMonth]} ${currentYear}`;
        });

        document.querySelectorAll(".daysList").forEach(daysList => {
            const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
            daysList.innerHTML = "";

            for (let day = 1; day <= daysInMonth; day++) {
                const fullDate = `${currentYear}-${(currentMonth + 1).toString().padStart(2, '0')}-${day.toString().padStart(2, '0')}`;
                const button = document.createElement("button");
                button.className = "px-4 py-2 bg-white text-gray-900 border border-gray-300 rounded-lg hover:bg-blue-500 hover:text-white transition";
                button.textContent = day;
                button.onclick = () => {
                    selectedDate = fullDate;
                    loadAppointments();
                };
                daysList.appendChild(button);
            }
        });
    }

    function loadAppointments() {
        if (!selectedProfessional || !selectedDate) return;

        const profName = professionalMap[selectedProfessional] || selectedProfessional;

        fetch(`get_agendamentos.php?profissional=${encodeURIComponent(profName)}&data=${encodeURIComponent(selectedDate)}`)
            .then(res => res.json())
            .then(data => {
                const table = document.getElementById(`schedule-${selectedProfessional}`);
                const tbody = table.querySelector("tbody");
                tbody.innerHTML = "";

                if (data.length === 0) {
                    tbody.innerHTML = `<tr><td colspan="6" class="text-center text-gray-500 py-5">Nenhum agendamento encontrado.</td></tr>`;
                    return;
                }

                data.forEach(ag => {
                    const row = document.createElement("tr");
                    row.innerHTML = `
                        <td class="px-6 py-5">${ag.name}</td>
                        <td class="px-6 py-5">${ag.time_slot}</td>
                        <td class="px-6 py-5">${ag.phone}</td>
                        <td class="px-6 py-5">${ag.services?.replace(/["\[\]]/g, '') || 'Nenhum'}</td>
                        <td class="px-6 py-5">${ag.duration || "N/A"} min</td>
                        <td class="px-6 py-5 text-right pr-4">
                            <img src="../img/3pts.png" class="w-6 h-6 cursor-pointer" onclick="openDetailModal('${ag.name}', '${ag.time_slot}', '${ag.phone}', '${ag.services}', '${ag.duration}')">
                        </td>`;
                    tbody.appendChild(row);
                });
            })
            .catch(err => console.error("Erro ao carregar agendamentos:", err));
    }

    window.openDetailModal = function (name, time, phone, services, duration) {
        document.getElementById("detailName").textContent = name;
        document.getElementById("detailTimeSlot").textContent = time;
        document.getElementById("detailPhone").textContent = phone || "Não informado";
        document.getElementById("detailServices").textContent = services || "Nenhum serviço cadastrado";
        document.getElementById("detailDuration").textContent = duration ? `${duration} min` : "N/A";

        document.getElementById("detailModal").classList.remove("hidden");
    };

    window.closeModal = function () {
        document.getElementById("detailModal").classList.add("hidden");
    };

    // ======================== BLOQUEIO ========================
    let diasSelecionadosBloqueio = [];
    let mesBloqueioAtual = new Date().getMonth();
    let anoBloqueioAtual = new Date().getFullYear();

    window.abrirModalBloqueio = function () {
        document.getElementById("modalBloqueioDias").classList.remove("hidden");
        gerarCalendarioBloqueio();
    };

    window.fecharModalBloqueio = function () {
        document.getElementById("modalBloqueioDias").classList.add("hidden");
        diasSelecionadosBloqueio = [];
    };

    window.enviarDiasBloqueados = function () {
        if (!diasSelecionadosBloqueio.length) {
            alert("Selecione ao menos um dia.");
            return;
        }

        const profName = professionalMap[selectedProfessional] || selectedProfessional;

        fetch("bloquear_dias.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ 
                dias: diasSelecionadosBloqueio,
                profissional: profName
            })
        })        
        .then(res => res.text())
        .then(msg => {
            alert(msg);
            fecharModalBloqueio();
        })
        .catch(err => console.error("Erro ao enviar dias bloqueados:", err));
    };

    window.abrirModalVisualizarBloqueios = function () {
        const profName = professionalMap[selectedProfessional] || selectedProfessional;

        fetch(`get_dias_bloqueados.php?professional=${encodeURIComponent(profName)}`)
            .then(res => res.json())
            .then(dias => {
                const lista = document.getElementById("listaDiasBloqueados");
                lista.innerHTML = dias.length
                    ? dias.map(dia => `
                        <li class="flex justify-between items-center border p-2 rounded">
                            <span>${dia}</span>
                            <button onclick="removerDiaBloqueado('${dia}', '${profName}')" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Desbloquear</button>
                        </li>
                    `).join("")
                    : "<p class='text-gray-500'>Nenhum dia bloqueado.</p>";

                document.getElementById("modalVisualizarBloqueios").classList.remove("hidden");
            });
    };

    window.fecharModalVisualizarBloqueios = function () {
        document.getElementById("modalVisualizarBloqueios").classList.add("hidden");
    };

    window.removerDiaBloqueado = function (dia, profissional) {
        if (!confirm(`Remover bloqueio do dia ${dia}?`)) return;

        fetch("desbloquear_dia.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ dia, profissional })
        })
        .then(res => res.text())
        .then(msg => {
            alert(msg);
            abrirModalVisualizarBloqueios();
        });
    };

    window.mudarMesBloqueio = function (direcao) {
        mesBloqueioAtual += direcao;
        if (mesBloqueioAtual > 11) {
            mesBloqueioAtual = 0;
            anoBloqueioAtual++;
        } else if (mesBloqueioAtual < 0) {
            mesBloqueioAtual = 11;
            anoBloqueioAtual--;
        }
        gerarCalendarioBloqueio();
    };

    function gerarCalendarioBloqueio() {
        const calendario = document.getElementById("calendarioBloqueio");
        calendario.innerHTML = "";
        const totalDias = new Date(anoBloqueioAtual, mesBloqueioAtual + 1, 0).getDate();

        for (let d = 1; d <= totalDias; d++) {
            const data = `${anoBloqueioAtual}-${(mesBloqueioAtual + 1).toString().padStart(2, '0')}-${d.toString().padStart(2, '0')}`;
            const btn = document.createElement("button");
            btn.textContent = d;
            btn.className = "p-2 rounded bg-white border text-gray-900 hover:bg-blue-500 hover:text-white transition";
            if (diasSelecionadosBloqueio.includes(data)) btn.classList.add("bg-blue-600", "text-white");
            btn.onclick = () => toggleDiaBloqueado(data, btn);
            calendario.appendChild(btn);
        }

        document.getElementById("tituloMesBloqueio").textContent = `${monthNames[mesBloqueioAtual]} ${anoBloqueioAtual}`;
    }

    function toggleDiaBloqueado(data, botao) {
        const index = diasSelecionadosBloqueio.indexOf(data);
    
        if (index === -1) {
            diasSelecionadosBloqueio.push(data);
            botao.classList.add("bg-blue-600", "text-white");
            botao.classList.remove("bg-white", "text-gray-900");
        } else {
            diasSelecionadosBloqueio.splice(index, 1);
            botao.classList.remove("bg-blue-600", "text-white");
            botao.classList.add("bg-white", "text-gray-900");
        }
    }
    

    // inicia mostrando a seleção de profissional
    showProfessionals();
});
