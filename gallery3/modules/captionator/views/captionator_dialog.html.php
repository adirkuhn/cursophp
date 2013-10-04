<?php defined("SYSPATH") or die("No direct script access.") ?>

<div id="g-captionator-dialog">
  <script type="text/javascript">
    $(document).ready(function() {
      $('form input[name^=tags]').ready(function() {
          $('form input[name^=tags]').gallery_autocomplete(
            "<?= url::site("/tags/autocomplete") ?>",
            {max: 30, multiple: true, multipleSeparator: ',', cacheLength: 1});
        });

      // $('form input[name^=filename]').ready(function() {
      //     $('form input[name^=filename]').gallery_autocomplete(
      //       "<?= url::site("/tags/autocomplete") ?>",
      //       {max: 30, multiple: false, multipleSeparator: '', cacheLength: 1});
      //   });

      $('form input[name^=title]').change(function() {
        var title = $(this).val();
        slug = title.replace(/^\'/, "");
        var slug = title.replace(/[^A-Za-z0-9-_]+/g, "-");
        slug = slug.replace(/^-/, "");
        slug = slug.replace(/-$/, "");
        $(this).parent().parent().find("input[name^=internetaddress]").val(slug);
      });
    });
  </script>
  <form action="<?= url::site("captionator/save/{$album_id}") ?>" method="post" id="g-captionator-form">
    <?= access::csrf_form_field() ?>
    <fieldset>
      <legend>
        <?= t("Add captions for photos in <b>%album_title</b>", array("album_title" => $album_title)) ?>
      </legend>

      <? /*foreach ($album->viewable()->children() as $child):*/ 

      ?>
      <? foreach ($album as $child): ?>
      <table>
        <tr>
          <td style="width: 140px">
            <?= $child[0]->thumb_img(array(), 140, true) ?>
          </td>
          <td>
            <ul>
              <li>
                <label for="title[<?= $child[0]->id ?>]"> <?= t("Title") ?> </label>
                <input required type="text" name="title[<?= $child[0]->id ?>]" value="<?= html::chars($child[0]->title) ?>"/>
              </li>
              <li>
                <label for="description[<?= $child[0]->id ?>]"> <?= t("Description") ?> </label>
                <textarea style="height: 5em" name="description[<?= $child[0]->id ?>]"><?= $child[0]->description ?></textarea>
              </li>
              <? if ($enable_tags): ?>
              <li>
                <label for="tags[<?= $child[0]->id ?>]"> <?= t("Tags (comma separated)") ?> </label>
                <input type="text" name="tags[<?= $child[0]->id ?>]" class="ac_input" autocomplete="off" value="<?= html::chars($tags[$child[0]->id]) ?>"/>
              </li>
              <? endif ?>
              <li>
                <label for="filename[<?= $child[0]->id ?>]"> <?= t("Filename") ?> </label>
                <input type="text" name="filename[<?= $child[0]->id ?>]" class="ac_input" autocomplete="off" value="<?= html::chars($child[0]->name) ?>"/>
              </li>
              <li>
                <label for="internetaddress[<?= $child[0]->id ?>]"> <?= t("Internet Address") ?> </label>
                <input type="text" name="internetaddress[<?= $child[0]->id ?>]" class="ac_input" autocomplete="off" value="<?= html::chars($child[0]->slug) ?>"/>
              </li>

              <?php 
              if ($exif_gps) {
              ?>
                <!-- campos para dados lat-log //-->
                <li>
                  <label for="lat[<?= $child[0]->id ?>]"> <?= t("Latitude") ?> </label>
                  <input type="text" name="lat[<?= $child[0]->id ?>]" class="ac_input" autocomplete="off" value="<?= $child[1]->latitude ?>"/>
                </li>

                <!-- campos para dados lat-log //-->
                <li>
                  <label for="log[<?= $child[0]->id ?>]"> <?= t("Longitude") ?> </label>
                  <input type="text" name="log[<?= $child[0]->id ?>]" class="ac_input" autocomplete="off" value="<?= $child[1]->longitude ?>"/>
                </li>

                <!-- ABRIR MAPS E PEGAR LOCALIZACAO //-->
                <a style="cursor:pointer" onclick="chama_modal(<?= $child[0]->id ?>)">Pegar posição no mapa</a>
              <?php
              }
              ?>


            </ul>
          </td>
        </tr>
      </table>
      <? endforeach ?>
    </fieldset>
    <fieldset>
      <input type="submit" name="cancel" value="<?= t("Cancel") ?>"/>
      <input type="submit" name="save" value="<?= t("Save") ?>"/>
    </fieldset>
  </form>
</div>

<!--colocar classe css para esconder div modal  //-->
<div id='modal'>
    <div id="map-canvas">

    </div>  
</div>


<style type="text/css">
  #map-canvas {
    width: 400px;
    height: 400px;
    z-index: 0;
    margin: 0 auto;
  }

/*  #modal {
    display: none;
  }*/
</style>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=<?php echo $gps_key; ?>&sensor=false"></script>

<? /* <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBaPEDyFbbnWjtvT8W3UBOM34Y7g6vK69A&sensor=false"></script> */ ?>

<script type="text/javascript">

var item_id = null;
function atribui_valores(data) {
  
  $('input[name=lat['+item_id+']]').attr('value', data.latLng.lat());
  $('input[name=log['+item_id+']]').attr('value', data.latLng.lng());
}

var map;
var initialize = function() {
  var mapOptions = {
    zoom: 8,
    center: new google.maps.LatLng(-23.934613, -54.014048),
    mapTypeId: google.maps.MapTypeId.SATELLITE
  };
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  // google.maps.event.addListener(map, 'click', function(data) {
  //   //console.log(data.latLng.lat());  
  //   atribui_valores(data);
  // });

  var marker = new google.maps.Marker({
      map: map,
      draggable: true
  }); 

  myListener = google.maps.event.addListener(map, 'click', function(event) {
      atribui_valores(event);
      marker.setPosition(event.latLng);
      google.maps.event.removeListener(myListener);
  });
  google.maps.event.addListener(marker, 'drag', function(event) {
      atribui_valores(event);
      marker.setPosition(event.latLng);
      //google.maps.event.removeListener(myListener);
  });

}

google.maps.event.addDomListener(window, 'load', initialize);

//procurar por plugin de modal
//pq a dialog do jquery ui da dando pau (abre somente uma vez) !batata
$("#modal").dialog({ 
  autoOpen : false,
  height: 600,
  width: 600
});
function chama_modal(id) {
  item_id = id;

  $('#modal').dialog('open');
  // $('#modal').dialog();
}


</script>