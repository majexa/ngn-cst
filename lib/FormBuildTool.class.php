<?php

class FormBuildTool {

  /**
   * @param string $jsonFieldsFile File with fields in JSON format
   */
  function build($jsonFieldsFile) {
    File::checkExists($jsonFieldsFile);
    $fields = json_decode(file_get_contents($jsonFieldsFile), JSON_FORCE_OBJECT);
    $form = (new FormMock(new Fields($fields)));
    $values = [];
    foreach ($fields as $field) {
      //$values[$field['name']] = "{%{$field['nam";
    }
    $form->setElementsData($values);
    print '<div class="apeform">'.$form->html().'</div>';
  }

}