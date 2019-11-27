<?php
session_start();
require_once('api_handler.php');
// DEBUGGING AREA
//echo "Start"."<br/>";
$get_data = callAPI('POST', 'https://api-v3.igdb.com/games/', 'fields name,platforms,cover.url,popularity,summary,genres.name,game_modes.name; 
where platforms.id = (6,48,49,130); 
sort popularity desc; 
limit 12;');

$response = json_decode($get_data, true);
//echo "Entire Response: ";
//echo "<br />";
//print_r($response);
//echo "<br /><br />";
//
//$errors = $response['response']['errors'];
//$data = $response['response']['data'][0];
//echo "Errors: " . $errors . "<br />";
//echo "Data: " . $data . "<br />";
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
    <?php
    foreach ($response as $res) {
      $platform = '';
      $image_url = $res['cover']['url'];
      $new_image_url = str_replace('t_thumb', 't_cover_big', $image_url);

      echo '<div class="lfg-card">';

      echo '<img src="https:' . $new_image_url . '"/>' . '<br/>';

      echo '<p class="lfg-card__title">' . $res['name'] . '</p>';

      echo '<div class="lfg-card__platforms">';
      foreach ($res['platforms'] as $platform) {
        switch ($platform) {
          case 6:
            echo "<img src=\"/img/icons/pc.jpg\" alt=\"\" />";
            break;
          case 48:
            echo "<img src=\"/img/icons/playstation.png\" alt=\"\" />";
            break;
          case 49:
            echo "<img src=\"/img/icons/xbox.png\" alt=\"\" />";
            break;
          case 130:
            echo "<img src=\"/img/icons/switch.png\" alt=\"\" />";
            break;
        }
      }

      foreach ($res['genres'][0]['name'] as $genre) {
        echo $genre . '</br>';
      }

      foreach ($res['game_modes'][0]['name'] as $game_mode) {
        echo $game_mode . '</br>';
      }

      echo '</div><a href="javascript:;" class="lfg-card__summary-js">Game Details</a><div class="lfg-card__summary"><span class="lfg-card__summary-close">X</span>' . $res['summary'] . '</div></div>';
    }
    ?>
</div>
