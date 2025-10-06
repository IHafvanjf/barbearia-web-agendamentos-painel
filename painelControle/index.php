<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel-Barbearia</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="../img/logoBarber.png" type="image/x-icon">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center py-8">


    <!-- Seleção de Profissionais -->
    <div id="professionals-container" class="w-full max-w-5xl p-4 bg-transparent rounded-lg flex flex-wrap justify-center gap-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Selecione um profissional</h1>
        <div id="profissionais">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <img src="https://placehold.co/100" class="mx-auto mb-4 rounded-full">
            <h3 class="text-lg font-semibold mb-2">Carlos Silva</h3>
            <button onclick="showScheduleTable('carlos')" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Selecionar</button>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <img src="https://placehold.co/100" class="mx-auto mb-4 rounded-full">
            <h3 class="text-lg font-semibold mb-2">Ricardo Souza</h3>
            <button onclick="showScheduleTable('ricardo')" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Selecionar</button>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <img src="https://placehold.co/100" class="mx-auto mb-4 rounded-full">
            <h3 class="text-lg font-semibold mb-2">Marcos Oliveira</h3>
            <button onclick="showScheduleTable('marcos')" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Selecionar</button>
        </div>
        </div>
    </div>

    <!-- Blocos dos profissionais -->
    <!-- Carlos -->
    <div id="schedule-carlos" class="schedule-table w-full max-w-5xl p-4 bg-white shadow-lg rounded-lg hidden mt-6">
        <!-- Botões de Bloqueio carlos -->
        <div class="flex gap-4 mt-6">
            <button onclick="abrirModalBloqueio()" class="bg-red-600 text-white font-bold py-2 px-4 rounded hover:bg-red-700 transition">Bloquear Dia</button>
            <button onclick="abrirModalVisualizarBloqueios()" class="bg-yellow-500 text-white font-bold py-2 px-4 rounded hover:bg-yellow-600 transition">Ver Dias Bloqueados</button>
        </div>
        <div class="flex flex-col items-center">
            <div class="flex items-center justify-center text-xl font-bold mb-2">
                <button class="prevMonth text-gray-700 hover:text-gray-900 text-2xl px-3" onclick="changeMonth(-1)">&lt;</button>
                <span class="monthName mx-4">Março</span>
                <button class="nextMonth text-gray-700 hover:text-gray-900 text-2xl px-3" onclick="changeMonth(1)">&gt;</button>
            </div>
            <div class="relative w-full overflow-x-auto whitespace-nowrap border rounded-lg p-2 bg-gray-100">
                <div class="daysList flex space-x-2 px-4"></div>
            </div>
        </div>
        <button onclick="showProfessionals()" class="mb-4 mt-4 px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700 transition">← Voltar</button>
        <h2 class="text-xl font-bold mb-4">Agendamentos - Carlos Silva</h2>
        <div class="overflow-x-auto">
            <table class="w-full min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-5 text-left text-sm font-semibold">Nome</th>
                        <th class="px-6 py-5 text-left text-sm font-semibold">Horário</th>
                        <th class="px-6 py-5 text-left text-sm font-semibold">Telefone</th>
                        <th class="px-6 py-5 text-left text-sm font-semibold">Serviços</th>
                        <th class="px-6 py-5 text-left text-sm font-semibold">Duração</th>
                        <th class="px-6 py-5 text-right text-sm font-semibold">Detalhe</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white"></tbody>
            </table>
        </div>
        
    </div>

    

    <!-- Ricardo -->
    <div id="schedule-ricardo" class="schedule-table w-full max-w-5xl p-4 bg-white shadow-lg rounded-lg hidden mt-6">
               <!-- Botões de Bloqueio Ricardo -->
    <div class="flex gap-4 mt-6">
        <button onclick="abrirModalBloqueio()" class="bg-red-600 text-white font-bold py-2 px-4 rounded hover:bg-red-700 transition">Bloquear Dia</button>
        <button onclick="abrirModalVisualizarBloqueios()" class="bg-yellow-500 text-white font-bold py-2 px-4 rounded hover:bg-yellow-600 transition">Ver Dias Bloqueados</button>
    </div>
        <!-- igual ao bloco acima, só muda nome no título -->
        <div class="flex flex-col items-center">
            <div class="flex items-center justify-center text-xl font-bold mb-2">
                <button class="prevMonth text-gray-700 hover:text-gray-900 text-2xl px-3" onclick="changeMonth(-1)">&lt;</button>
                <span class="monthName mx-4">Março</span>
                <button class="nextMonth text-gray-700 hover:text-gray-900 text-2xl px-3" onclick="changeMonth(1)">&gt;</button>
            </div>
            <div class="relative w-full overflow-x-auto whitespace-nowrap border rounded-lg p-2 bg-gray-100">
                <div class="daysList flex space-x-2 px-4"></div>
            </div>
        </div>
        <button onclick="showProfessionals()" class="mb-4 mt-4 px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700 transition">← Voltar</button>
        <h2 class="text-xl font-bold mb-4">Agendamentos - Ricardo Souza</h2>
        <div class="overflow-x-auto">
            <table class="w-full min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-5 text-left text-sm font-semibold">Nome</th>
                        <th class="px-6 py-5 text-left text-sm font-semibold">Horário</th>
                        <th class="px-6 py-5 text-left text-sm font-semibold">Telefone</th>
                        <th class="px-6 py-5 text-left text-sm font-semibold">Serviços</th>
                        <th class="px-6 py-5 text-left text-sm font-semibold">Duração</th>
                        <th class="px-6 py-5 text-right text-sm font-semibold">Detalhe</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white"></tbody>
            </table>
        </div>
     
    </div>


    <!-- Marcos -->
    <div id="schedule-marcos" class="schedule-table w-full max-w-5xl p-4 bg-white shadow-lg rounded-lg hidden mt-6">
        <!-- Botões de Bloqueio Marcos -->
    <div class="flex gap-4 mt-6">
        <button onclick="abrirModalBloqueio()" class="bg-red-600 text-white font-bold py-2 px-4 rounded hover:bg-red-700 transition">Bloquear Dia</button>
        <button onclick="abrirModalVisualizarBloqueios()" class="bg-yellow-500 text-white font-bold py-2 px-4 rounded hover:bg-yellow-600 transition">Ver Dias Bloqueados</button>
    </div>
        <!-- igual ao bloco acima, só muda nome no título -->
        <div class="flex flex-col items-center">
            <div class="flex items-center justify-center text-xl font-bold mb-2">
                <button class="prevMonth text-gray-700 hover:text-gray-900 text-2xl px-3" onclick="changeMonth(-1)">&lt;</button>
                <span class="monthName mx-4">Março</span>
                <button class="nextMonth text-gray-700 hover:text-gray-900 text-2xl px-3" onclick="changeMonth(1)">&gt;</button>
            </div>
            <div class="relative w-full overflow-x-auto whitespace-nowrap border rounded-lg p-2 bg-gray-100">
                <div class="daysList flex space-x-2 px-4"></div>
            </div>
        </div>
        <button onclick="showProfessionals()" class="mb-4 mt-4 px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700 transition">← Voltar</button>
        <h2 class="text-xl font-bold mb-4">Agendamentos - Marcos Oliveira</h2>
        <div class="overflow-x-auto">
            <table class="w-full min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-5 text-left text-sm font-semibold">Nome</th>
                        <th class="px-6 py-5 text-left text-sm font-semibold">Horário</th>
                        <th class="px-6 py-5 text-left text-sm font-semibold">Telefone</th>
                        <th class="px-6 py-5 text-left text-sm font-semibold">Serviços</th>
                        <th class="px-6 py-5 text-left text-sm font-semibold">Duração</th>
                        <th class="px-6 py-5 text-right text-sm font-semibold">Detalhe</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white"></tbody>
            </table>
        </div>
    
    </div>
    <!-- Modal de Bloqueio de Dias -->
    <div id="modalBloqueioDias" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-[360px]">
            <h2 class="text-xl font-bold mb-2 text-center">Selecionar dias para bloquear</h2>
            <div class="flex justify-between items-center mb-2">
                <button onclick="mudarMesBloqueio(-1)" class="text-xl px-3">&lt;</button>
                <span id="tituloMesBloqueio" class="font-semibold"></span>
                <button onclick="mudarMesBloqueio(1)" class="text-xl px-3">&gt;</button>
            </div>
            <!-- Corrigido: somente um ID de calendário -->
            <div id="calendarioBloqueio" class="grid grid-cols-7 gap-2 mb-4"></div>
            <div class="flex justify-between gap-2">
                <button onclick="enviarDiasBloqueados()" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 w-full">Salvar</button>
                <button onclick="fecharModalBloqueio()" class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400 w-full">Cancelar</button>
            </div>
        </div>
    </div>

    <!-- Modal de Visualização de Dias Bloqueados -->
    <div id="modalVisualizarBloqueios" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-[360px] max-h-[80vh] overflow-y-auto">
            <h2 class="text-xl font-bold mb-4">Dias Bloqueados</h2>
            <ul id="listaDiasBloqueados" class="space-y-2"></ul>
            <button onclick="fecharModalVisualizarBloqueios()" class="w-full mt-4 bg-gray-300 text-gray-800 py-2 rounded hover:bg-gray-400">Fechar</button>
        </div>
    </div>

    <!-- Modal de Detalhes -->
    <div id="detailModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <h2 class="text-lg font-semibold mb-4">Detalhes do Agendamento</h2>
            <p><strong>Nome:</strong> <span id="detailName"></span></p>
            <p><strong>Horário:</strong> <span id="detailTimeSlot"></span></p>
            <p><strong>Telefone:</strong> <span id="detailPhone"></span></p>
            <p><strong>Serviços:</strong> <span id="detailServices"></span></p>
            <p><strong>Duração:</strong> <span id="detailDuration"></span></p>
            <button onclick="closeModal()" class="mt-4 px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Fechar</button>
        </div>
    </div>

    <script src="script.js"></script>
</body>


</html>