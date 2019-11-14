<?php
session_start();
require_once('api_handler.php');
echo "Start"."<br/>";
$get_data = callAPI('GET', 'https://api-v3.igdb.com/games/', 'fields name; limit 12;');
echo "<br/>";
$response = json_decode($get_data, true);
echo "RESPONSE1: " . print_r($response) . "<br/>";
echo "RESPONSE2: " . print_r($response[0]) . "<br/>";
echo "RESPONSE3: " . print_r($response[1]) . "<br/>";
echo "RESPONSE4: " . print_r($response[0][0]) . "<br/>";

var_dump($response);
echo "\n";
foreach($response as $res)
  echo print_r($res) . '<br/>';


$errors = $response['response']['errors'];
$data = $response['response']['data'][0];
echo "Errors: " . $errors . "\n";
echo "Data: " . $data;
?>

<div class="lfg-cards__form-wrapper">
  <form class="lfg-cards__form">
    <div class="lfg-cards__select">
      <label for="platform">Platform</label>
      <select id="platform">
        <option value="">--Choose--</option>
        <option value="Xbox One">Xbox One</option>
        <option value="Playstation 4">Playstation 4</option>
      </select>
    </div>

    <div class="lfg-cards__select">
      <label for="region">Region</label>
      <select id="region">
        <option value="">--Choose--</option>
        <option value="NA">NA</option>
        <option value="EU">EU</option>
      </select>
    </div>

    <div class="lfg-cards__select">
      <label for="style">Style</label>
      <select id="style">
        <option value="">--Choose--</option>
        <option value="coop">Cooperative</option>
        <option value="competitive">Competitive</option>
        <option value="relaxed">Relaxed</option>
      </select>
    </div>

    <input type="submit" value="Search" class="lfg-cards__search" />
  </form>

  <div class="lfg-cards__filter-container">
    <h3>Filter results by game type</h3>
    <div class="lfg-cards__filters">
      <button class="lfg-cards__filter-btn active" onclick="filterSelection('all')"> Show all</button>
      <button class="lfg-cards__filter-btn" onclick="filterSelection('fps')"> FPS</button>
      <button class="lfg-cards__filter-btn" onclick="filterSelection('mmo')"> MMO</button>
      <button class="lfg-cards__filter-btn" onclick="filterSelection('other')"> Other</button>
    </div>
  </div>
</div>

<div class="lfg-cards__results">
  <div class="lfg-card">
    <img src="https://www.fillmurray.com/400/800" />
    <p class="lfg-card__title">Game Title</p>
    <div class="lfg-card__platforms">
      <img src="/img/icons/pc.jpg" alt="" />
    </div>
  </div>
  <div class="lfg-card">
    <img src="https://www.fillmurray.com/400/800" />
    <p class="lfg-card__title">Game Title</p>
    <div class="lfg-card__platforms">
      <img src="/img/icons/playstation.png" alt="" />
    </div>
  </div>
  <div class="lfg-card">
    <img src="https://www.fillmurray.com/400/800" />
    <p class="lfg-card__title">Game Title</p>
    <div class="lfg-card__platforms">
      <img src="/img/icons/xbox.png" alt="" />
    </div>
  </div>
  <div class="lfg-card">
    <img src="https://www.fillmurray.com/400/800" />
    <p class="lfg-card__title">Game Title</p>
    <div class="lfg-card__platforms">
      <img src="/img/icons/switch.png" alt="" />
    </div>
  </div>
  <div class="lfg-card">
    <img src="https://www.fillmurray.com/400/800" />
    <p class="lfg-card__title">Game Title</p>
    <div class="lfg-card__platforms">
      <img src="/img/icons/pc.jpg" alt="" />
      <img src="/img/icons/switch.png" alt="" />
    </div>
  </div>
</div>
