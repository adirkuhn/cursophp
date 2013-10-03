<?php defined("SYSPATH") or die("No direct script access.") ?>
<div id="g-captionator-dialog">
  <script type="text/javascript">
    $(document).ready(function() {
      $('form input[name^=tags]').ready(function() {
          $('form input[name^=tags]').gallery_autocomplete(
            "<?= url::site("/tags/autocomplete") ?>",
            {max: 30, multiple: true, multipleSeparator: ',', cacheLength: 1});
        });
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
                  <label for="lat[<?= $child[1]->id ?>]"> <?= t("Latitude") ?> </label>
                  <input type="text" name="lat[<?= $child[1]->id ?>]" class="ac_input" autocomplete="off" value="<?= $child[1]->latitude ?>"/>
                </li>

                <!-- campos para dados lat-log //-->
                <li>
                  <label for="log[<?= $child[1]->id ?>]"> <?= t("Longitude") ?> </label>
                  <input type="text" name="log[<?= $child[1]->id ?>]" class="ac_input" autocomplete="off" value="<?= $child[1]->longitude ?>"/>
                </li>
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
