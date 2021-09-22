<?php
if (isset($_POST["mac"]) && !empty($_POST["mac"])){
  $mac_address = addslashes($_POST["mac"]);

  $url = "https://api.macvendors.com/" . urlencode($mac_address);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $response = curl_exec($ch);
  
  if($response) {
    echo "<script>
            alert('$response');
            window.location = './index.html';
          </script>";
  } else {
    echo "Erro: Não encontrado";
  }
}
//Vendor: $response";
?>