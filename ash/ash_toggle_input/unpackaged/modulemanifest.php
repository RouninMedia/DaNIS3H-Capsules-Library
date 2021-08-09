<?php

function Ash_Toggle_Input($moduleParameters) {

  // GET CODESHEETS
  $moduleBlock['CodeSheets'][] = ['Ash_Toggle_Input__Markup', 'Ash_Toggle_Input__Markup'];
  $moduleBlock['CodeSheets'][] = ['Ash_Toggle_Input__Styles', 'Ash_Toggle_Input__Styles'];

  // INITIALISE MODULE
  extract(initialiseModule(__DIR__, $moduleParameters, $moduleBlock, 'Markup'));

  // BUILD COMPONENTS
  $Module['Register'] = $Register;
  $Module['Markup'] = $Ash_Toggle_Input__Markup;
  $Module['Styles'] = $Ash_Toggle_Input__Styles;
  
  // SEND MODULE
  return json_encode($Module);
}

?>
