<?php
// Define o cabeçalho para que a resposta seja em JSON
header('Content-Type: application/json');

// Verifica se a requisição é do tipo POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém o conteúdo JSON do corpo da requisição
    $json = file_get_contents('php://input');
    
    // Decodifica o JSON para um array associativo
    $data = json_decode($json, true);
    
    // Verifica se o campo "pais" existe no JSON
    if (isset($data['pais'])) {
        $pais = $data['pais'];
        
        // Define a resposta com base no valor do campo "pais"
        if ($pais === 'brasil') {
            $response = ['moeda' => 'BRL', 'nome' => 'Real'];
        } elseif ($pais === 'eua') {
            $response = ['moeda' => 'USD', 'nome' => 'Dólar'];
        } elseif ($pais === 'japão') {
            $response = ['moeda' => 'JPY', 'nome' => 'Iene'];
        } elseif ($pais === 'reino unido') {
            $response = ['moeda' => 'GBP', 'nome' => 'Libra Esterlina'];
        } elseif ($pais === 'canadá') {
            $response = ['moeda' => 'CAD', 'nome' => 'Dólar Canadense'];
        } elseif ($pais === 'austrália') {
            $response = ['moeda' => 'AUD', 'nome' => 'Dólar Australiano'];
        } elseif ($pais === 'suíça') {
            $response = ['moeda' => 'CHF', 'nome' => 'Franco Suíço'];
        } elseif ($pais === 'china') {
            $response = ['moeda' => 'CNY', 'nome' => 'Yuan'];
        } elseif ($pais === 'índia') {
            $response = ['moeda' => 'INR', 'nome' => 'Rupia Indiana'];
        } elseif ($pais === 'rússia') {
            $response = ['moeda' => 'RUB', 'nome' => 'Rublo Russo'];
        } elseif ($pais === 'árábia saudita') {
            $response = ['moeda' => 'SAR', 'nome' => 'Riyal Saudita'];
        } elseif ($pais === 'méxico') {
            $response = ['moeda' => 'MXN', 'nome' => 'Peso Mexicano'];
        } elseif ($pais === 'africa do sul') {
            $response = ['moeda' => 'ZAR', 'nome' => 'Rand Sul-Africano'];
        } elseif ($pais === 'turquia') {
            $response = ['moeda' => 'TRY', 'nome' => 'Lira Turca'];
        } elseif ($pais === 'nigéria') {
            $response = ['moeda' => 'NGN', 'nome' => 'Naira'];
        } elseif ($pais === 'argélia') {
            $response = ['moeda' => 'DZD', 'nome' => 'Dinar Argelino'];
        } elseif ($pais === 'tanzânia') {
            $response = ['moeda' => 'TZS', 'nome' => 'Tanzanian Shilling'];
        } elseif ($pais === 'quênia') {
            $response = ['moeda' => 'KES', 'nome' => 'Xelim Queniano'];
        } elseif ($pais === 'camarões') {
            $response = ['moeda' => 'XAF', 'nome' => 'Franco CFA'];
        } elseif ($pais === 'burundi') {
            $response = ['moeda' => 'BIF', 'nome' => 'Franco Burundês'];
        } elseif ($pais === 'mali') {
            $response = ['moeda' => 'XOF', 'nome' => 'Franco CFA'];
        } elseif ($pais === 'zimbábue') {
            $response = ['moeda' => 'ZWL', 'nome' => 'Dólar Zimbabuense'];
        } elseif ($pais === 'haiti') {
            $response = ['moeda' => 'HTG', 'nome' => 'Gourde'];
        } elseif ($pais === 'mongólia') {
            $response = ['moeda' => 'MNT', 'nome' => 'Tugrik Mongol'];
        } elseif ($pais === 'jordânia') {
            $response = ['moeda' => 'JOD', 'nome' => 'Dinar Jordaniano'];
        } elseif ($pais === 'somália') {
            $response = ['moeda' => 'SOS', 'nome' => 'Xelim Somali'];
        } elseif ($pais === 'sérvia') {
            $response = ['moeda' => 'RSD', 'nome' => 'Dinar Sérvio'];
        } elseif ($pais === 'armênia') {
            $response = ['moeda' => 'AMD', 'nome' => 'Dram Armênio'];
        } elseif ($pais === 'chipre') {
            $response = ['moeda' => 'EUR', 'nome' => 'Euro'];
        } elseif ($pais === 'luxemburgo') {
            $response = ['moeda' => 'EUR', 'nome' => 'Euro'];
        } elseif ($pais === 'andorra') {
            $response = ['moeda' => 'EUR', 'nome' => 'Euro'];
        } elseif ($pais === 'são tomé e príncipe') {
            $response = ['moeda' => 'STN', 'nome' => 'Dobra de São Tomé e Príncipe'];
        } elseif ($pais === 'comores') {
            $response = ['moeda' => 'KMF', 'nome' => 'Franco Comorense'];
        } elseif ($pais === 'burundi') {
            $response = ['moeda' => 'BIF', 'nome' => 'Franco Burundês'];
        } elseif ($pais === 'djibuti') {
            $response = ['moeda' => 'DJF', 'nome' => 'Franco Djibutiano'];
        } elseif ($pais === 'lesoto') {
            $response = ['moeda' => 'LSL', 'nome' => 'Loti'];
        } elseif ($pais === 'vanuatu') {
            $response = ['moeda' => 'VUV', 'nome' => 'Vatu'];
        } elseif ($pais === 'palau') {
            $response = ['moeda' => 'USD', 'nome' => 'Dólar dos Estados Unidos'];
        } elseif ($pais === 'nauru') {
            $response = ['moeda' => 'AUD', 'nome' => 'Dólar Australiano'];
        } elseif ($pais === 'são cristóvão e nevis') {
            $response = ['moeda' => 'XCD', 'nome' => 'Dólar do Caribe Oriental'];
        } elseif ($pais === 'antígua e barbuda') {
            $response = ['moeda' => 'XCD', 'nome' => 'Dólar do Caribe Oriental'];
        } else {
            // Resposta para país desconhecido
            $response = ['error' => 'País não reconhecido'];
        }
    } else {
        // Resposta caso o campo "pais" não esteja presente
        $response = ['error' => 'Campo "pais" não encontrado'];
    }
} else {
    // Resposta caso a requisição não seja do tipo POST
    $response = ['error' => 'Método não permitido'];
}

// Converte a resposta para JSON e exibe
echo json_encode($response);
?>
