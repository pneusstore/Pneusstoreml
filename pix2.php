<html lang="pt-BR">
 <head> 
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>Pagamento via Pix</title> 
  <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin-top: 50px;
        }
        .qr-container {
            border: 2px solid #000;
            padding: 20px;
            margin-bottom: 20px;
        }
        .instructions {
            margin-top: 20px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 20px;
        }
    </style> 
  <script>
        function copyPixKey() {
            var pixKey = "00020126580014br.gov.bcb.pix013687cdb350-1be8-4638-9798-89e8679f679052040000530398654074500.005802BR5925Artemiza Rodrigues Da Sil6009Sao Paulo62290525JKzL90H69rxj85dP4EVtKwcon6304C61E"
            navigator.clipboard.writeText(pixKey).then(function() {
                alert('Chave Pix copiada com sucesso!');
            }, function() {
                alert('Falha ao copiar a chave Pix.');
            });
        }
    </script> 
 </head> 
 <body> 
  <div class="container"> 
   <h2>Escaneie o QR Code para finalizar o pagamento</h2> 
   <img src="data:image/png;Screenshot_20241221_134802_WhatsAppBusiness"> 
   <p><strong>Valor Total: R$ 4.500,00</strong></p> 
   <p><strong>Chave Pix:</strong></p> 
   <p>00020126580014br.gov.bcb.pix013687cdb350-1be8-4638-9798-89e8679f679052040000530398654074500.005802BR5925Artemiza Rodrigues Da Sil6009Sao Paulo62290525JKzL90H69rxj85dP4EVtKwcon6304C61E</p> 
   <button onclick="copyPixKey()">Copiar Chave Pix</button> 
   <div class="instructions"> 
    <h3>Instruções para pagamento</h3> 
    <p>1. Abra o aplicativo do seu banco.</p> 
    <p>2. Procure pela opção de pagamento via Pix.</p> 
    <p>3. Escolha a opção "Ler QR Code" e escaneie o código acima.</p> 
    <p>4. Confirme os dados e finalize o pagamento.</p> 
    <p>5. Caso prefira, copie a chave Pix e cole na opção de pagamento Pix do seu banco.</p> 
   </div> 
  </div> 
 </body>
</html>